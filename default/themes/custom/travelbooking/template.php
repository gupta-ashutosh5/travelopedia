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

  if(arg(1) == 44) {  //For node 2
    $variables['theme_hook_suggestions'][] =  'page__flights';
  }

  if(arg(1) == 45) {  //For node 2
    $variables['theme_hook_suggestions'][] =  'page__bus';
  }

  if(arg(1) == 46) {  //For node 2
    $variables['theme_hook_suggestions'][] =  'page__hotel';
  }
}

function travelbooking_preprocess_page(&$variables) {
  if(!drupal_is_front_page()){
  	drupal_add_js('jQuery(function() {
    var images = ["c1.jpg","c2.jpg","c3.jpg","c4.jpg","c5.jpg"];
    var img = images[Math.floor(Math.random() * images.length)];
    console.log(img);
    jQuery("body").css("background","url(/sites/default/themes/custom/travelbooking/images/covers/" + img + ")");
   });', array(
  	'type' => 'inline',
  	'scope' => 'footer',
  	'weight' => 5,
   ));
  }
}
