<?php

/**
 * Preprocess variables for html.tpl.php
 *
 * @see system_elements()
 * @see html.tpl.php
 */

/**
 * Override the submitted variable.
 */
function travelbooking_preprocess_node(&$variables) {
  if ($variables['type'] == 'holidaypackage' && $variables['view_mode'] == 'product_list') {
    $variables['theme_hook_suggestions'][] = 'node__holidaypackage__product_list';
  }

  if($variables['type'] == 'hotels' && $variables['view_mode'] == 'teaser') {
    $variables['theme_hook_suggestions'][] = 'node__hotels__teaser';
  }
}