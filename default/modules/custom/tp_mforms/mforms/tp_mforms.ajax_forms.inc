<?php

/**
 * @file
 *    Mforms ajax example.
 */

/**
 * Builds first form step with form element loaded by ajax call.
 *
 * @param array $form_state
 *   Drupal form_state array.
 * @param string $next_step
 *   Mforms next step callback name.
 * @param mixed $params
 *   Optional params passed into form.
 *
 * @return array
 *   Drupal form array.
 */
function _tp_mforms_ajax_forms_s1(&$form_state, &$next_step, $params) {
  //$next_step = '_tp_mforms_ajax_forms_s2';

  $form = array();
  $values = mforms_get_vals('ajax_forms', '_tp_mforms_ajax_forms_s1');

  $form['tp-ms-to-place'] = array(
    '#type' => 'textfield',
    '#title' => t('To'),
    '#default_value' => isset($values['tp-ms-to-place']) ? $values['tp-ms-to-place'] : NULL,
    "#attributes" => array(	"placeholder"=> "To"),
    '#required' => TRUE
  );

  $form['tp-ms-from-place'] = array(
    '#type' => 'textfield',
    '#title' => t('From'),
    '#default_value' => isset($values['tp-ms-from-place']) ? $values['tp-ms-from-place'] : NULL,
    "#attributes" => array(	 "placeholder"=> "From"),
    '#required' => TRUE
  );

  $form['tp-ms-email'] = array(
    '#type' => 'emailfield',
    '#title' => t('Email'),
    '#default_value' => isset($values['tp-ms-email']) ? $values['tp-ms-email'] : NULL,
    "#attributes" => array(	 "placeholder"=> "Enter Your Email Id"),
    '#required' => TRUE
  );

  $form['tp-ms-phone'] = array(
    '#type' => 'telfield',
    '#title' => t('Phone'),
    '#default_value' => isset($values['tp-ms-phone']) ? $values['tp-ms-phone'] : NULL,
    "#attributes" => array(	 "placeholder"=> "Enter Your Phone Number"),
    '#required' => TRUE
  );

  //2

  $form['tp-ms-flight'] = array(
    '#type' => 'radios',
    '#title' => t('Flight'),
    '#options' => array(
      'yes' => t('Yes'),
      'no' => t('No')
    ),
    '#default_value' => isset($values['tp-ms-flight']) ? $values['tp-ms-flight'] : NULL,
  );

  $form['tp-ms-cab'] = array(
    '#type' => 'radios',
    '#title' => t('Require Cab for sightseeing'),
    '#options' => array(
      'yes' => t('Yes'),
      'no' => t('No')
    ),
    '#default_value' => isset($values['tp-ms-cab']) ? $values['tp-ms-cab'] : NULL,
  );

  $form['tp-ms-tour-type'] = array(
    '#type' => 'radios',
    '#title' => t('Preferred Tour Type'),
    '#options' => array(
      'Honeymoon' => t('Honeymoon'),
      'Tourism' => t('Tourism'),
      'Family' => t('Family'),
      'Weekend' => t('Weekend')
    ),
    '#default_value' => isset($values['tp-ms-tour-type']) ? $values['tp-ms-tour-type'] : NULL,
  );

  //3

  $form['tp-ms-hotel'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Preferred Hotel Category'),
    '#options' => array(
      '2 Star' => t('2 Star'),
      '3 Star' => t('3 Star'),
      '4 Star' => t('4 Star'),
      '5 Star' => t('5 Star')
    ),
    '#default_value' => isset($values['tp-ms-hotel']) ? $values['tp-ms-hotel'] : NULL
  );

  $form['tp-ms-package'] = array(
    '#type' => 'textfield',
    '#title' => t('Package'),
    '#default_value' => isset($values['tp-ms-package']) ? $values['tp-ms-package'] : NULL,
    "#attributes" => array(  "placeholder"=> "Package"),
    '#required' => TRUE
  );

  $form['tp-ms-budget'] = array(
    '#type' => 'textfield',
    '#title' => t('Budget'),
    '#default_value' => isset($values['tp-ms-budget']) ? $values['tp-ms-budget'] : NULL,
    "#attributes" => array(  "placeholder"=> "Budget"),
    '#required' => TRUE
  );

  $form['tp_date_label'] = array(
  '#type' => 'markup',
  '#markup' => '<label>Date of Journey</label>',
  );

  $form['tp-ms-date-type-fixed'] = array(
    '#type' => 'textfield',
    '#title' => t(''),
    "#attributes" => array("placeholder"=> "Fixed", "class" => array("tp-date-fields")),
    '#default_value' => isset($values['tp-ms-date-type-fixed']) ? $values['tp-ms-date-type-fixed'] : NULL,
  );

  $form['tp-ms-date-type-flexible'] = array(
    '#type' => 'textfield',
    '#title' => t(''),
    "#attributes" => array("placeholder"=> "Flexible", "class" => array("tp-date-fields")),
    '#default_value' => isset($values['tp-ms-date-type-flexible']) ? $values['tp-ms-date-type-flexible'] : NULL,
  );

  $form['tp-ms-date'] = array(
    '#type' => 'hidden',
    '#title' => t('Journey Date'),
    '#default_value' => isset($values['tp-ms-date']) ? $values['tp-ms-date'] : NULL,
  );

  $form['tp-ms-number-of-days'] = array(
    '#type' => 'numberfield',
    '#title' => t(''),
    '#default_value' => isset($values['tp-ms-number-of-days']) ? $values['tp-ms-number-of-days'] : 3,
    "#attributes" => array(  "placeholder"=> "Enter Day Count" , "min" => 3),
    '#required' => FALSE
  );

  $form['tp-ms-adult-count'] = array(
    '#type' => 'numberfield',
    '#title' => t('Adult'),
    '#default_value' => isset($values['tp-ms-adult-count']) ? $values['tp-ms-adult-count'] : 00,
    "#attributes" => array("min" => 0),
    '#required' => FALSE
  );

  $form['tp-ms-infant-count'] = array(
    '#type' => 'numberfield',
    '#title' => t('Infant(0-2 years)'),
    '#default_value' => isset($values['tp-ms-infant-count']) ? $values['tp-ms-infant-count'] : 00,
    "#attributes" => array("min" => 0),
    '#required' => FALSE
  );

  $form['tp-ms-children-count'] = array(
    '#type' => 'numberfield',
    '#title' => t('Children(2-12 years)'),
    '#default_value' => isset($values['tp-ms-children-count']) ? $values['tp-ms-children-count'] : 00,
    "#attributes" => array("min" => 0),
    '#required' => FALSE
  );

  return $form;
}

/**
 * Loads built form element as a result of ajax call.
 *
 * @param array $form
 *   Drupal form array.
 * @param array $form_state
 *   Drupal form_state array.
 *
 * @return array
 *   Drupal form array.
 */
function _tp_mforms_ajax_forms_load_element($form, &$form_state) {
  return $form['new-element-wrapper'];
}

/**
 * Second form step.
 *
 * @param array $form_state
 *   Drupal form_state array.
 * @param string $next_step
 *   Mforms next step callback name.
 * @param mixed $params
 *   Optional params passed into form.
 *
 * @return array
 *   Drupal form array.
 */
function _tp_mforms_ajax_forms_s2(&$form_state, &$next_step, $params) {
  $values = mforms_get_vals('ajax_forms', '_tp_mforms_ajax_forms_s2');

  $next_step = '_tp_mforms_ajax_forms_s3';

  $form = array();

  
  
  return $form;
}

function _tp_mforms_ajax_forms_s3(&$form_state, &$next_step, $params) {

  $values = mforms_get_vals('ajax_forms', '_tp_mforms_ajax_forms_s3');

  $form = array();

  

  return $form;
}

/**
 * Submit callback of second form step.
 *
 * @param array $form
 *   Drupal form array.
 * @param array $form_state
 *   Drupal form_state array.
 */
function _tp_mforms_ajax_forms_s1_submit($form, &$form_state) {
  drupal_set_message(t('Your details are submitted sucessfully. Our team will get back to you shortly!'));
  $node = node_load(42);

  global $user;

  $doj = '';
  if (!empty($form_state['values']['tp-ms-date-type-fixed'])) {
    $doj = $form_state['values']['tp-ms-date-type-fixed'];
  }
  else{
    $doj = $form_state['values']['tp-ms-date-type-flexible'];
  }

  $data = array(
    'to' => $form_state['values']['tp-ms-to-place'],
    'from' => $form_state['values']['tp-ms-from-place'],
    'email' => $form_state['values']['tp-ms-email'],
    'phone' => $form_state['values']['tp-ms-phone'],
    'flight' => $form_state['values']['tp-ms-flight'],
    'cab' => $form_state['values']['tp-ms-cab'],
    'tour_type' => $form_state['values']['tp-ms-tour-type'],
    'hotel_category' => $form_state['values']['tp-ms-hotel'],
    'package' => $form_state['values']['tp-ms-package'],
    'budget' => $form_state['values']['tp-ms-budget'],
    'date_of_journey' => $doj,
    'days_of_journey' => $form_state['values']['tp-ms-number-of-days'],
    'adult' => $form_state['values']['tp-ms-adult-count'],
    'infant' => $form_state['values']['tp-ms-infant-count'],
    'children' => $form_state['values']['tp-ms-children-count']
  );


  module_load_include('inc', 'webform', 'webform.module');
  module_load_include('inc', 'webform', 'includes/webform.submissions');
  
  // This methods will arrange $data in the right way
  $data = _webform_client_form_submit_flatten($node, $data);
  $data = webform_submission_data($node, $data);

  $submission = (object) array(
    'nid' => $nid,
    'uid' => $user->uid,
    'sid' => NULL,
    'submitted' => REQUEST_TIME,
    'completed' => REQUEST_TIME,
    'remote_addr' => ip_address(),
    'is_draft' => FALSE,
    'data' => $data,
  );

  $sid = webform_submission_insert($node, $submission);
  webform_submission_send_mail($node, $submission);
  mforms_clean('ajax_forms');
  //$form_state['redirect'] = 'mforms';
}
