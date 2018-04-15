<?php

/**
 * @file
 *   Mforms examples.
 */

// /////////////////////////////////////////////////////////////////////////////
// Multi step forms with ajax example
/// ////////////////////////////////////////////////////////////////////////////

/**
 * Page callback for multistep form with ajax example.
 *
 * @return array
 *   Drupal renderable array.
 */
function tp_mforms_ajax_forms_page() {
  return drupal_get_form('tp_mforms_ajax_form');
}

/**
 * Form build callback.
 *
 * @param array $form
 *   Drupal form array.
 * @param array $form_state
 *   Drupal form_state array.
 *
 * @return array
 *   Drupal form array.
 */
function tp_mforms_ajax_form($form, &$form_state) {
  drupal_add_js('https://maps.googleapis.com/maps/api/js?key=AIzaSyAYdzcRihBZk7LxXTeQpmtO-XWtUAqqQTk&libraries=places', 'external');

  drupal_add_js('function init() {
                var input = document.getElementById("edit-tp-ms-to-place");
                console.log(input);
                var autocomplete = new google.maps.places.Autocomplete(input);
            }
 
            google.maps.event.addDomListener(window, "load", init);', array(
  	'type' => 'inline',
  	'scope' => 'footer',
  	'weight' => 5,
   ));

  drupal_add_js('function init_from() {
                var input = document.getElementById("edit-tp-ms-from-place");
                console.log(input);
                var autocomplete = new google.maps.places.Autocomplete(input);
            }
 
            google.maps.event.addDomListener(window, "load", init_from);', array(
  	'type' => 'inline',
  	'scope' => 'footer',
  	'weight' => 5,
   ));

  /*drupal_add_js('jQuery( function() {
    jQuery( "#edit-tp-ms-from-place" ).autocomplete({
      source: "/sites/default/modules/custom/tp_mforms/mforms/sample.php"
    });
  } );', array(
  	'type' => 'inline',
  	'scope' => 'footer',
  	'weight' => 5,
   ));
*/
  return mforms_build('ajax_forms', '_tp_mforms_ajax_forms_s1', $form_state);
}

/**
 * Form validate callback.
 *
 * @param array $form
 *   Drupal form array.
 * @param array $form_state
 *   Drupal form_state array.
 */
function tp_mforms_ajax_form_validate($form, &$form_state) {
  /*echo "hi2";
  exit;*/
  mforms_validate('ajax_forms', $form, $form_state);
}

/**
 * Form submit callback.
 *
 * @param array $form
 *   Drupal form array.
 * @param array $form_state
 *   Drupal form_state array.
 */
function tp_mforms_ajax_form_submit($form, &$form_state) {
  mforms_submit('ajax_forms', $form, $form_state);
}
