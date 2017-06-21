<?php

/**
 * @file
 * Hooks provided by farm_admin.
 *
 * This file contains no working PHP code; it exists to provide additional
 * documentation for doxygen as well as to document hooks in the standard
 * Drupal manner.
 */

/**
 * @defgroup farm_admin Farm admin module integrations.
 *
 * Module integrations with the farm_admin module.
 */

/**
 * @defgroup farm_admin_hooks farm_admin's hooks
 * @{
 * Hooks that can be implemented by other modules in order to extend farm_admin.
 */

/**
 * Add output to the /farm/help page.
 *
 * @return array
 *   Returns an array of actions and their meta information (see example below).
 */
function hook_farm_admin_help_page() {

  // Add a link to farmOS.rog
  $output = array(
    l('farmOS.org', 'http://farmos.org'),
  );
  return $output;
}

/**
 * @}
 */
