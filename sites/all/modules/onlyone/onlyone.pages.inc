<?php

/**
 * @file
 * Page callbacks for adding content.
 */

/**
 * Page callback: Displays add content links for configured content types.
 *
 * Redirects to onlyone/add/[type] if only one content type is available.
 *
 * @see node_menu()
 */
function onlyone_add_page() {
  // Only use node types the user has access to.
  $item = menu_get_item('node/add');
  $content = system_admin_menu_block($item);

  // Getting the configured content types.
  $onlyone_node_types = variable_get('onlyone_node_types');

  // Filtering only the configured content types.
  foreach ($content as $key => $element) {
    // Getting the content type name.
    $content_type = substr($element['href'], 9);
    // Removing not configured content types.
    if (!in_array($content_type, $onlyone_node_types)) {
      unset($content[$key]);
    }
  }

  // Bypass the node/add listing if only one content type is available.
  if (count($content) == 1) {
    $item = array_shift($content);
    drupal_goto($item['href']);
  }
  return theme('node_add_list', array('content' => $content));
}

/**
 * Returns HTML for a list of available node types for node creation.
 *
 * @param array $variables
 *   An associative array containing:
 *   - content: An array of content types.
 *
 * @ingroup themeable
 */
function onlyone_node_add_list(array $variables) {
  $content = $variables['content'];
  $output = '';

  if ($content) {
    $output = '<dl class="node-type-list">';
    foreach ($content as $item) {
      $output .= '<dt>' . l($item['title'], $item['href'], $item['localized_options']) . '</dt>';
      $output .= '<dd>' . filter_xss_admin($item['description']) . '</dd>';
    }
    $output .= '</dl>';
  }
  else {
    $output = '<p>' . $variables['message'] . '</p>';
  }
  return $output;
}
