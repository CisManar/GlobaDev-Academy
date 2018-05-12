<?php

/**
 * @file
 * Calls results to administration's pages for the Only One module.
 */

/**
 * Form constructor for Only One Config Content Types form.
 *
 * @param array $form
 *   The form element.
 * @param array $form_state
 *   The form state.
 */
function config_content_types(array $form, array &$form_state) {
  // Loading the helper functions file.
  module_load_include('inc', 'onlyone', 'onlyone.helpers');
  $available_content_types = _onlyone_available_content_types(TRUE);
  $not_available_content_types = _onlyone_not_available_content_types(TRUE);

  $cant_available_content_types = count($available_content_types);
  if ($cant_available_content_types) {
    // The fieldset of available content types.
    $form['available_content_type'] = array(
      '#type' => 'fieldset',
      '#title' => t("Content types available to have Only One node"),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    );
    // All the available content types.
    $form['available_content_type']['onlyone_node_types'] = array(
      '#type' => 'checkboxes',
      '#title' => t('Configure these content types to have Only One node per language:'),
      '#options' => $available_content_types,
      '#default_value' => variable_get('onlyone_node_types'),
      '#description' => t('The selected content types will allow Only One node per language.'),
    );
  }

  // If all the content types are available we don't need to show the fieldset.
  $cant_not_available_content_types = count($not_available_content_types);
  if ($cant_not_available_content_types) {
    $collapsed = $cant_available_content_types ? TRUE : FALSE;
    // The fieldset of not available content types.
    $form['not_available_content_type'] = array(
      '#type' => 'fieldset',
      '#title' => t('Content types not available to have Only One node'),
      '#description' => t('Content types which have more than one node in at least one language:'),
      '#collapsible' => $collapsed,
      '#collapsed' => $collapsed,
    );
    // Showing all the not availables content types.
    foreach ($not_available_content_types as $key => $value) {
      $form['not_available_content_type'][$key] = array(
        '#type' => 'item',
        '#markup' => $value,
      );
    }

    $form['#attached']['css'] = array(
      drupal_get_path('module', 'onlyone') . '/css/onlyone.css',
    );
  }

  if (!$cant_available_content_types && !$cant_not_available_content_types) {
    $form['not_available_content_type'] = array(
      '#markup' => t('There are not content types on this site, go to the <a href="@add-content-type">Add content type</a> page to create one.', array('@add-content-type' => url('admin/structure/types/add'))),
    );
  }

  // Set a submit handler manually because the default submit handler
  // gets overridden by the system_settings_form() submit handler.
  $form['#submit'][] = 'config_content_types_submit';

  // Show the submit button if there is availables content types.
  if ($cant_available_content_types) {
    $form['actions'] = array('#type' => 'actions');
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Save configuration'),
    );
  }

  return $form;
}

/**
 * Submit handler for the custom form.
 */
function config_content_types_submit($form, &$form_state) {
  // Cleaning the not checked content types from the selected checkboxes.
  $content_types_checked = array_values(array_diff($form_state['values']['onlyone_node_types'], array('0')));
  // Getting the configured content types.
  $onlyone_content_types = variable_get('onlyone_node_types');

  // Checking if we have any change in the configured content types.
  if (($content_types_checked) == array_values($onlyone_content_types)) {
    drupal_set_message(t("You don't have changed the configured content types."), 'warning');
  }
  else {
    // Saving the configuration.
    variable_set('onlyone_node_types', $content_types_checked);
    // Printing the confirmation message.
    drupal_set_message(t('The configuration options have been saved.'));
    // Rebuilding the menu.
    menu_rebuild();
  }
}

/**
 * Form constructor for Only One Settings form.
 *
 * @param array $form
 *   The form element.
 * @param array $form_state
 *   The form state.
 */
function onlyone_admin_settings(array $form, array &$form_state) {
  $form['onlyone_new_menu_entry'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show configured content types in a new menu entry?'),
    '#description' => t("If you check this item a new menu entry named 'Add content (Only One)' will be created in Administration » Content, and all the configured content types to have Only One node will be moved there."),
    '#default_value' => variable_get('onlyone_new_menu_entry'),
  );

  $form['actions'] = array('#type' => 'actions');
  $form['actions']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save configuration'),
  );

  // Set a submit handler manually because the default submit handler
  // gets overridden by the system_settings_form() submit handler.
  $form['#submit'][] = 'onlyone_admin_settings_submit';

  return $form;
}

/**
 * Submit handler for the custom form.
 */
function onlyone_admin_settings_submit($form, &$form_state) {
  // Getting the value from the form.
  $new_menu_entry_checked = $form_state['values']['onlyone_new_menu_entry'];
  // Getting the onlyone_new_menu_entry variable.
  $onlyone_new_menu_entry = variable_get('onlyone_new_menu_entry');

  // Checking if we have or not changes in the form.
  if ($new_menu_entry_checked == $onlyone_new_menu_entry) {
    drupal_set_message(t("You don't have changes in the form."), 'warning');
  }
  else {
    // Setting the variable.
    variable_set('onlyone_new_menu_entry', $new_menu_entry_checked);
    // Printing the confirmation message.
    drupal_set_message(t('The configuration options have been saved.'));
    // Rebuilding the menu.
    menu_rebuild();
  }
}
