<?php

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function portfolio_form_system_theme_settings_alter(&$form, &$form_state) {
  // Add your theme settings form elements here.
  // You can define text fields, checkboxes, etc.
  // For example, let's add a textfield for a slogan.
  $form['portfolio_slogan'] = [
    '#type' => 'textfield',
    '#title' => t('Slogan'),
    '#default_value' => theme_get_setting('portfolio_slogan'),
    '#description' => t("Enter your site's slogan."),
  ];
}