<?php

/**
 * @file
 * Drush commands related to the Only One module.
 */

define('ONLYONE_GREEN_OUTPUT', "\033[1;32;40m\033[1m%s\033[0m");
define('ONLYONE_RED_OUTPUT', "\033[31;40m\033[1m%s\033[0m");

/**
 * Implements hook_drush_command().
 */
function onlyone_drush_command() {
  $items['onlyone-list'] = array(
    'description' => dt("Shows a content types list according to the selected status."),
    'aliases' => array('ol'),
    'arguments' => array(
      'status' => dt('Content type status (configured, available, notavailable or summary)'),
    ),
    'examples' => array(
      'drush onlyone-list configured' => dt("Lists the content types already configured in 'Only One node' mode."),
      'drush onlyone-list available' => dt("Lists the content types which can be configured in 'Only One node' mode."),
      'drush onlyone-list notavailable' => dt("Lists the content types which cannot be configured in 'Only One node' mode."),
      'drush onlyone-list summary' => dt("Lists the summary for all the content types."),
    ),
  );
  $items['onlyone-enable'] = array(
    'description' => dt("Enables the 'Only One node' mode on content types."),
    'arguments' => array(
      'content_type' => dt('List of content types machine names.'),
    ),
    'aliases' => array('oen'),
    'examples' => array(
      'drush onlyone-enable article' => dt("Enables the 'Only One node' mode for 'Article' content type."),
      'drush onlyone-enable article page' => dt("Enables the 'Only One node' mode for 'Article' and 'Basic page' content types."),
    ),
  );
  $items['onlyone-disable'] = array(
    'description' => dt("Disables the 'Only One node' mode on content types."),
    'arguments' => array(
      'content_type' => dt('List of content types machine names.'),
    ),
    'aliases' => array('odis'),
    'examples' => array(
      'drush onlyone-enable article' => dt("Disables the 'Only One node' mode for 'Article' content type."),
      'drush onlyone-enable article page' => dt("Disables the 'Only One node' mode for 'Article' and 'Basic page' content types."),
    ),
  );
  $items['onlyone-new-menu-entry'] = array(
    'description' => dt('Configures if the configured content types will be shown in a new menu entry.'),
    'arguments' => array(
      'status' => dt('The status option (on, off).'),
    ),
    'examples' => array(
      'onlyone-new-menu-entry' => dt('Shows if configured content types will be shown in a new menu entry or not.'),
      'onlyone-new-menu-entry on' => dt('Create a new menu entry for the configured content types.'),
      'onlyone-new-menu-entry off' => dt('Delete the menu entry for the configured content types.'),
    ),
    'aliases' => array('onme'),
  );
  return $items;
}

/**
 * Implements hook_drush_help().
 */
function onlyone_drush_help($section) {
  switch ($section) {
    case 'meta:onlyone:title':
      return dt("Commands for the module 'Allow a content type only once (Only One)'");

    case 'meta:onlyone:summary':
      return dt("Interacts with the Only One module's functionalities.");

    case 'drush:onlyone-list':
      return dt("Creates a list of content types according to the status selected.");

    case 'drush:onlyone-enable':
      return dt("Enables the 'Only One node' mode on content types.");

    case 'drush:onlyone-disable':
      return dt("Disables the 'Only One node' mode on content types.");

    case 'drush:onlyone-new-menu-entry':
      return dt("Configures if the configured content types will be shown in a new menu entry.");

  }
}

/**
 * Callback for the onlyone-list command.
 */
function drush_onlyone_list($status = '') {
  // Check for correct argument.
  $options = array(
    'configured' => dt("Content types configured in 'Only One node' mode."),
    'available' => dt("Content types that can be configured in 'Only One node' mode."),
    'notavailable' => dt("Content types that can't be configured in 'Only One node' mode."),
    'summary' => dt("The summary for all the content types."),
  );
  if (!in_array($status, array_keys($options))) {
    if (!empty($status)) {
      drush_log(dt('"@status" is not a valid statement status.', array('@status' => $status)), 'warning');
    }
    $status = drush_choice($options, dt('What kind of list would you like to print?'));
  }
  if (!empty($status)) {
    $function_name = '_drush_onlyone_' . $status;
    $function_name();
  }
}

/**
 * List the content types configured in 'Only One node' mode.
 */
function _drush_onlyone_configured() {
  // Getting the configured content types to have only one node.
  $onlyone_content_types = variable_get('onlyone_node_types');

  if (count($onlyone_content_types)) {
    // Searching the content type name.
    $content_types = array();
    foreach ($onlyone_content_types as $content_type) {
      $content_type_object = node_type_get_type($content_type);
      $content_types[$content_type] = $content_type_object->name . ' [' . $content_type_object->type . ']';
    }
    drush_print(dt("Content types configured in 'Only One node' mode:"));
    drush_print(' ' . implode("\n ", $content_types));
  }
  else {
    drush_print(dt("There is no content type configured in Only One node' mode."));
  }
}

/**
 * List the content types that can be configured in 'Only One node' mode.
 */
function _drush_onlyone_available() {
  $available_content_types = _onlyone_available_content_types();

  if (count($available_content_types)) {
    drush_print(dt("Content types that can be configured in 'Only One node' mode:"));
    drush_print(' ' . implode("\n ", $available_content_types));
  }
  else {
    drush_print(dt("There is no content type that can be configured in 'Only One node' mode."));
  }
}

/**
 * List the content types that can't be configured in 'Only One node' mode.
 */
function _drush_onlyone_notavailable() {
  $not_available_content_types = _onlyone_not_available_content_types();

  if (count($not_available_content_types)) {
    drush_print(dt("Content types that can't be configured in 'Only One node' mode:"));
    drush_print(' ' . implode("\n ", $not_available_content_types));
  }
  else {
    drush_print(dt("All content types can be configured in 'Only One node' mode."));
  }
}

/**
 * List the summary for all the content types.
 */
function _drush_onlyone_summary() {
  // Loading the helper functions file.
  module_load_include('inc', 'onlyone', 'onlyone.helpers');
  $available_content_types = _onlyone_available_content_types();
  $not_available_content_types = _onlyone_not_available_content_types();
  $content_types_summary = array_merge($available_content_types, $not_available_content_types);
  // Sorting all the elements.
  asort($content_types_summary);

  if (count($content_types_summary)) {
    drush_print(dt('Status summary:'));
    drush_print(' ' . implode("\n ", $content_types_summary));
  }
  else {
    drush_log(dt('There are no content types on the site.'), 'warning');
  }
}

/**
 * Implements drush_hook_COMMAND_validate().
 */
function drush_onlyone_enable_validate() {
  $args = func_get_args();

  if (!_drush_onlyone_validate_content_type($args)) {
    return;
  }
  // Loading the helper functions file.
  module_load_include('inc', 'onlyone', 'onlyone.helpers');
  $availables_content_types = array_keys(_onlyone_available_content_types());
  $not_available_content_types = array_diff($args, $availables_content_types);

  if (count($not_available_content_types)) {
    $names = implode(', ', $not_available_content_types);
    $singular = "The following content type can't be configured in 'Only One node' mode: @names";
    $plural = "The following content types can't be configured in 'Only One node' mode: @names";
    $message = _onlyone_drush_plural(count($not_available_content_types), $singular, $plural, array('@names' => $names));
    return drush_set_error('ONLYONE_NON_AVAILABLE_CONTENT_TYPE', $message);
  }
}

/**
 * Callback for the onlyone-enable command.
 */
function drush_onlyone_enable() {
  $args = array_unique(func_get_args());
  // Getting the configured content types to have only one node.
  $onlyone_content_types = variable_get('onlyone_node_types');
  // Array to store content types that are configured and don't need to be
  // configured one more time.
  $content_types_configured = array();
  // Adding the new values to save.
  foreach ($args as $content_type) {
    if (in_array($content_type, $onlyone_content_types)) {
      $content_types_configured[] = $content_type;
    }
    else {
      $onlyone_content_types[] = $content_type;
    }
  }
  // Printing the content types that will not be configured to have Only One
  // node (they are already configured to have Only One node).
  if (count($content_types_configured)) {
    $names = implode(', ', $content_types_configured);
    $singular = "The following content type is already configured in 'Only One node' mode: @names";
    $plural = "The following content types are already configured in 'Only One node' mode: @names";
    $cant = count($content_types_configured);
    $message = _onlyone_drush_plural($cant, $singular, $plural, array('@names' => $names));
    drush_log($message, 'warning');
  }
  // Printing the configured content types.
  $content_types_to_enable = array_diff($args, $content_types_configured);
  if (count($content_types_to_enable)) {
    // Saving the values in the config.
    variable_set('onlyone_node_types', $onlyone_content_types);

    $names = implode(', ', $content_types_to_enable);
    $singular = "The following content type was configured in 'Only One node' mode: @names";
    $plural = "The following content types were configured in 'Only One node' mode: @names";
    $cant = count($content_types_to_enable);
    $message = _onlyone_drush_plural($cant, $singular, $plural, array('@names' => $names));
    drush_log($message, 'success');
  }
}

/**
 * Implements drush_hook_COMMAND_validate().
 */
function drush_onlyone_disable_validate() {
  $args = func_get_args();

  if (!_drush_onlyone_validate_content_type($args)) {
    return;
  }
}

/**
 * Callback for the onlyone-disable command.
 */
function drush_onlyone_disable() {
  $args = array_unique(func_get_args());
  // Getting the configured content types to have only one node.
  $onlyone_content_types = variable_get('onlyone_node_types');
  // Deleting the values.
  $content_types_not_configured = array();
  foreach ($args as $content_type) {
    // Validating if the content types are configured.
    if (!in_array($content_type, $onlyone_content_types)) {
      $content_types_not_configured[] = $content_type;
    }
    else {
      // Loading the helper functions file.
      module_load_include('inc', 'onlyone', 'onlyone.helpers');
      // Deleting the content type configuration.
      _onlyone_delete_content_type_config($content_type);
    }
  }
  // Printing the content types that will not be deleted from the configuration
  // (they are not configured to have Only One node).
  if (count($content_types_not_configured)) {
    $names = implode(', ', $content_types_not_configured);
    $singular = "The following content type is not configured in 'Only One node' mode: @names";
    $plural = "The following content types are not configured in 'Only One node' mode: @names";
    $cant = count($content_types_not_configured);
    $message = _onlyone_drush_plural($cant, $singular, $plural, array('@names' => $names));
    drush_log($message, 'warning');
  }
  // Printing the configured content types that comes from be disable from the
  // Only One configuration.
  $content_types_to_disable = array_diff($args, $content_types_not_configured);
  if (count($content_types_to_disable)) {
    $names = implode(', ', $content_types_to_disable);
    $singular = "In the following content type the 'Only One node' mode was disabled: @names";
    $plural = "In the following content types the 'Only One node' mode was disabled: @names";
    $cant = count($content_types_to_disable);
    $message = _onlyone_drush_plural($cant, $singular, $plural, array('@names' => $names));
    drush_log($message, 'success');
  }
}

/**
 * Helper function to validate the content type names.
 *
 * @param array $content_types
 *   An array with content type machine names.
 *
 * @return bool
 *   A boolean indicating the success of the validation.
 */
function _drush_onlyone_validate_content_type(array $content_types) {
  if (!count($content_types)) {
    $message = dt('You must enter at least one content type machine name.');
    return drush_set_error('ONLYONE_MISSING_CONTENT_TYPE_MACHINE_NAME', $message);
  }

  $content_types_list = array_keys(node_type_get_types());
  $invalid_content_types = array_diff($content_types, $content_types_list);

  if (count($invalid_content_types)) {
    $names = implode(', ', $invalid_content_types);
    $singular = 'The following content type machine name is invalid: @names';
    $plural = 'The following content type machine names are invalid: @names';
    $message = _onlyone_drush_plural(count($invalid_content_types), $singular, $plural, array('@names' => $names));
    return drush_set_error('ONLYONE_INVALID_CONTENT_TYPE_MACHINE_NAME', $message);
  }

  return TRUE;
}

/**
 * Callback for the onlyone-new-menu-entry command.
 */
function drush_onlyone_new_menu_entry() {
  $args = func_get_args();
  // Getting the values from the config.
  $onlyone_new_menu_entry = variable_get('onlyone_new_menu_entry');

  // Giving colors to the messages.
  $activated = sprintf(ONLYONE_GREEN_OUTPUT, dt('Activated'));
  $disabled = sprintf(ONLYONE_RED_OUTPUT, dt('Disabled'));

  if (isset($args[0])) {
    // Assigning values to $value and $status.
    list($value, $status) = $args[0] == 'on' ? array(1, strtolower($activated)) : array(0, strtolower($disabled));

    // Is already configured?
    if ($onlyone_new_menu_entry == $value) {
      // If is configured stop the command execution with a warning message.
      $message = dt('The option for shown the configured content type in a new menu entry is already @status.', array('@status' => $status));
      drush_log($message, 'warning');
      return;
    }

    // Saving the values in the config.
    variable_set('onlyone_new_menu_entry', $value);

    $message = dt('You have @status the option the show the configured content types in a new menu entry.', array('@status' => $status));
    drush_log($message, 'success');
    // Rebuilding the menu.
    menu_rebuild();
  }
  else {
    // Defining the status.
    $status = $onlyone_new_menu_entry ? $activated : $disabled;

    $message = dt('The option to show the configured content types in a new menu entry is: @status', array('@status' => $status));
    drush_print($message);
  }
}

/**
 * Formats a plural string containing a count of items.
 *
 * This function ensures that the string is pluralized correctly. Since dt() is
 * called by this function, make sure not to pass already-localized strings to
 * it.
 *
 * For example:
 * @code
 *   $output = _onlyone_drush_plural($node->comment_count, '1 comment', '@count comments');
 * @endcode
 *
 * @param int $count
 *   The item count to display.
 * @param string $singular
 *   The string for the singular case. Make sure it is clear this is singular,
 *   to ease translation (e.g. use "1 new comment" instead of "1 new"). Do not
 *   use @count in the singular string.
 * @param string $plural
 *   The string for the plural case. Make sure it is clear this is plural, to
 *   ease translation. Use @count in place of the item count, as in
 *   "@count new comments".
 * @param array $args
 *   An associative array of replacements to make after translation. Instances
 *   of any key in this array are replaced with the corresponding value.
 *   Based on the first character of the key, the value is escaped and/or
 *   themed. See format_string(). Note that you do not need to include @count
 *   in this array; this replacement is done automatically for the plural case.
 * @param array $options
 *   An associative array of additional options. See dt() for allowed keys.
 *
 * @return string
 *   A translated string.
 *
 * @see dt()
 */
function _onlyone_drush_plural($count, $singular, $plural, array $args = array(), array $options = array()) {
  $args['@count'] = $count;
  if ($count == 1) {
    return dt($singular, $args, $options);
  }

  // Get the plural index through the gettext formula.
  $index = (function_exists('locale_get_plural')) ? locale_get_plural($count, isset($options['langcode']) ? $options['langcode'] : NULL) : -1;
  // If the index cannot be computed, use the plural as a fallback (which
  // allows for most flexiblity with the replaceable @count value).
  if ($index < 0) {
    return dt($plural, $args, $options);
  }
  else {
    switch ($index) {
      case "0":
        return dt($singular, $args, $options);

      case "1":
        return dt($plural, $args, $options);

      default:
        unset($args['@count']);
        $args['@count[' . $index . ']'] = $count;
        return dt(strtr($plural, array('@count' => '@count[' . $index . ']')), $args, $options);
    }
  }
}