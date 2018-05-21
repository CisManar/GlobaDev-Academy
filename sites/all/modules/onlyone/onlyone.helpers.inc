<?php

/**
 * @file
 * Helper functions.
 */

/**
 * Delete the content type config variable.
 *
 * @param string $content_type
 *   Content type machine name.
 *
 * @return bool
 *   Return TRUE if the content type config was deleted or FALSE if not exists.
 */
function _onlyone_delete_content_type_config($content_type) {
  // Getting the variables with the content types configuration.
  $onlyone_node_types = variable_get('onlyone_node_types');
  // Checking if the config exists.
  $index = array_search($content_type, $onlyone_node_types);
  if ($index !== FALSE) {
    // Deleting the value from the array.
    unset($onlyone_node_types[$index]);
    // Saving the values in the config.
    variable_set('onlyone_node_types', $onlyone_node_types);
    return TRUE;
  }
  return FALSE;
}

/**
 * Return the available content types list.
 *
 * @param bool $format
 *   (optional) A boolean indicating if we need to format the output.
 *
 * @return array
 *   An associative array with the content type machine name as key and his
 *   status for the Only One module as value.
 */
function _onlyone_available_content_types($format = FALSE) {
  if (drupal_multilingual()) {
    // Looking for content types that doesn't have more than 1 node
    // in any language.
    $query = 'SELECT type, name
              FROM {node_type}
              WHERE type NOT IN (SELECT type
                                 FROM {node_type} JOIN {node} USING(type)
                                 GROUP BY type, language
                                 HAVING COUNT(nid) > 1)
              ORDER BY name';
    $available_content_types = _onlyone_process('multilingual', $query, $format);
  }
  else {
    // If the site is not multilingual we have only one language.
    $query = 'SELECT type, name, COUNT(nid) as total
              FROM {node_type} LEFT JOIN {node} USING(type)
              GROUP BY type
              HAVING total <= 1
              ORDER BY name';

    $available_content_types = _onlyone_process('not-multilingual', $query, $format);
  }
  // Returning available content types to have only one node.
  return $available_content_types;
}

/**
 * Return the not available content types list.
 *
 * @param bool $format
 *   (optional) A boolean indicating if we need to format the output.
 *
 * @return array
 *   An associative array with the content type machine name as key and his
 *   status for the Only One module as value.
 */
function _onlyone_not_available_content_types($format = FALSE) {
  if (drupal_multilingual()) {
    // Looking for content types with more than 1 nodes
    // in at least one language.
    $query = 'SELECT DISTINCT type, name
              FROM {node_type} JOIN {node} USING(type)
              GROUP BY type, language
              HAVING COUNT(nid) > 1
              ORDER BY name';

    $not_available_content_types = _onlyone_process('multilingual', $query, $format);
  }
  else {
    // If the site is not multilingual we have only one language,
    // and if we have a content type with more than one node,
    // then it is not available for the Only One feature.
    $query = 'SELECT type, name, COUNT(nid) as total
              FROM {node_type} JOIN {node} USING(type)
              GROUP BY type
              HAVING total > 1
              ORDER BY name';

    $not_available_content_types = _onlyone_process('not-multilingual', $query, $format);
  }
  // Returning not available content types to have only one node.
  return $not_available_content_types;
}

/**
 * Process the output.
 *
 * @param string $type
 *   The site type (multilingual or not-multilingual).
 * @param string $query
 *   A query string to obtain the information about the content types.
 * @param bool $format
 *   (optional) A boolean indicating if we need to format the output.
 *
 * @return array
 *   An associative array with the content type machine name as key and his
 *   status for the Only One module as value.
 */
function _onlyone_process($type, $query, $format) {
  $array = array();
  // Executing the query.
  $result = db_query($query);
  // If we have results.
  if (count($result)) {
    $initial_format = $format ? ONLYONE_FORMAT_INITIAL_ADMIN : ONLYONE_FORMAT_INITIAL_DRUSH;
    $final_format = $format ? ONLYONE_FORMAT_FINAL_ADMIN : ONLYONE_FORMAT_FINAL_DRUSH;

    if (!$format) {
      // Getting all the configured content types.
      $onlyone_content_types = variable_get('onlyone_node_types');
    }
    // Processing each content type information.
    foreach ($result as $content_type) {
      // Variable to show if the content type is configured.
      $configured = '';
      if ($format) {
        $name = $content_type->name;
      }
      else {
        // Adding machine name if the output is for a drush command.
        $name = $content_type->name . ' [' . $content_type->type . ']';
        // If the content type is configured we will aditional info in green,
        // see https://drupal.stackexchange.com/q/220229/28275 .
        if (in_array($content_type->type, $onlyone_content_types)) {
          $configured = sprintf(ONLYONE_GREEN_OUTPUT, t('Configured'));
        }
      }
      // Multilingual or not?
      switch ($type) {
        case 'multilingual':
          // Searching all the info about the nodes of each content types.
          $query = 'SELECT type, language, COUNT(nid) as total
                FROM {node_type} LEFT JOIN {node} USING(type)
                WHERE type = :type
                GROUP BY type, language
                ORDER BY language ASC';
          $result_info = db_query($query, array(':type' => $content_type->type));
          // Variable to store the quantity of nodes by language.
          $cant_by_language = array();
          // Procesing each language.
          foreach ($result_info as $info) {
            // If we have nodes we need to add the language.
            if ($info->total) {
              // If the language is empty then is Undetermined.
              $info->language = ($info->language == LANGUAGE_NONE || empty($info->language)) ? t('Language neutral') : ucfirst($info->language);
              $cant_by_language[] = format_plural($info->total, '@language: @total Node', '@language: @total Nodes', array('@language' => $info->language, '@total' => $info->total));
            }
            else {
              // If we don't have nodes we don't need the language.
              $cant_by_language[] = t('@total Nodes', array('@total' => 0));
            }
          }
          // Example: Article (En: 7 Nodes, Fr: 5 Nodes, Undetermined: 2 Nodes)
          $value = $name . $initial_format . implode(', ', $cant_by_language) . $final_format . ' ' . $configured;
          $array[$info->type] = $value;

          break;

        case 'not-multilingual':
          // Example: Article (7 Nodes)
          $cant = format_plural($content_type->total, '@total Node', '@total Nodes', array('@total' => $content_type->total));
          $value = $name . $initial_format . $cant . $final_format . ' ' . $configured;
          $array[$content_type->type] = $value;

          break;
      }
    }

    asort($array, SORT_NATURAL | SORT_FLAG_CASE);
  }

  return $array;
}

/**
 * Return if exists nodes of a content type in the actual language.
 *
 * @param string $content_type
 *   Content type machine name.
 * @param string $language_to_check
 *   The language to check. If the variable is not provided and the site is
 *   multilingual the actual language will be taken.
 *
 * @return int
 *   If exists nodes return the first node nid otherwise return 0.
 */
function _onlyone_exists_nodes_content_type($content_type, $language_to_check = NULL) {
  $query = new EntityFieldQuery();
  $query->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', $content_type);
  // The site is multilingual?
  if (drupal_multilingual()) {
    if (empty($language_to_check)) {
      global $language;
      $language_to_check = $language->language;
    }
    $query->propertyCondition('language', $language_to_check);
  }
  // Executing the query.
  $result = $query->execute();
  // Getting the nid.
  $nid = isset($result['node']) ? key($result['node']) : 0;

  return $nid;
}

/**
 * Rebuild the menu to change the menu label.
 *
 * The menu will be rebuilded if the content type is configured to have only
 * one node.
 *
 * @param string $content_type
 *   The content type machine name.
 */
function _onlyone_rebuild_menu($content_type) {
  // Getting the configured content types.
  $onlyone_content_types = variable_get('onlyone_node_types');
  // Checking if the content type is configured.
  if (in_array($content_type, $onlyone_content_types)) {
    // If is configured then we need to rebuild the menu.
    menu_rebuild();
  }
}
