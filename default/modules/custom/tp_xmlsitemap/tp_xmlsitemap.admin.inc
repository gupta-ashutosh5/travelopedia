<?php

/**
 * @file
 * Administration functions for the Travelopedia XML sitemap module.
 */

/**
 * Menu callback to display form that creates basic XML sitemap.
 */
function tp_xmlsitemap_admin_form($form, &$form_state) {

  $form = array();

  $form['configuration'] = array(
    '#type' => 'fieldset',
    '#title' => t('Travelopedia SST XML sitemap settings'),
    '#description' => t('Travelopedia XML Sitemap settings that will be used by the SmartCapture screenshot Tool. <br/>
                           This Sitemap is available at: /sitemap.xml?tp_sst=1'),
  );

  $form['configuration']['advanced_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Advanced settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['configuration']['advanced_settings']['tp_xmlsitemap_batch_limit'] = array(
    '#type' => 'textfield',
    '#title' => t('Maximum number of sitemap links to process at once'),
    '#description' => t('If you have problems running cron or rebuilding the sitemap, you may want to lower this value.'),
    '#default_value' => variable_get('tp_xmlsitemap_batch_limit', 100),
    '#size' => 10,
    '#required' => TRUE,
  );

  $form['configuration']['sitemap_content'] = array(
    '#type' => 'fieldset',
    '#title' => t('Sitemap Content'),
    '#description' => t('Select the items that will compose the SST Sitemap.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );

  $content_types = node_type_get_names();
  if ($content_types) {
    $form['configuration']['sitemap_content']['tp_xmlsitemap_saved_content_types'] = array(
      '#type' => 'checkboxes',
      '#title' => t('Content types'),
      '#description' => t('All nodes from the selected content types will be indexed.'),
      '#options' => $content_types,
      '#default_value' => variable_get('tp_xmlsitemap_saved_content_types', array_keys($content_types)),
    );
  }

  if (module_exists('xmlsitemap_menu')) {
    $excluded_menus = tp_xmlsitemap_get_excluded_menus();
    $all_menus = array_keys(menu_get_menus());
    $menus_diff = array_diff($all_menus, $excluded_menus);
    $default_menus = array_combine($menus_diff, $menus_diff);

    $form['configuration']['sitemap_content']['tp_xmlsitemap_saved_menus'] = array(
      '#type' => 'checkboxes',
      '#title' => t('Menus'),
      '#description' => t('All links from the selected menus will be indexed.'),
      '#options' => $default_menus,
      '#default_value' => variable_get('tp_xmlsitemap_saved_menus', array_keys($default_menus)),
    );
  }

  if (module_exists('xmlsitemap_taxonomy')) {
    $vocabulary = taxonomy_get_vocabularies();
    $checklist_vocab_array = array();
    foreach ($vocabulary as $key => $item) {
      $key = $item->machine_name;
      $value = $item->name;
      $checklist_vocab_array[$key] = $value;
    }

    $form['configuration']['sitemap_content']['tp_xmlsitemap_saved_taxonomies'] = array(
      '#type' => 'checkboxes',
      '#title' => t('Vocabularies'),
      '#description' => t('All taxonomy terms from the selected vocabularies will be indexed.'),
      '#options' => $checklist_vocab_array,
      '#default_value' => variable_get('tp_xmlsitemap_saved_taxonomies', array_keys($checklist_vocab_array)),
    );
  }

  $form['actions']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save settings and update SST Sitemap'),
    '#submit' => array(
      'tp_xmlsitemap_admin_form_submit',
      'system_settings_form_submit',
    ),
  );

  $delete_message = t('Are you sure? The indexes of the Sitemaps will be deleted and recreated on next Cron.');
  $form['actions']['delete'] = array(
    '#type' => 'submit',
    '#value' => t('Delete Sitemaps indexes'),
    '#submit' => array('tp_xmlsitemap_admin_form_delete_submit'),
    '#attributes' => array('onclick' => 'if(!confirm("' . $delete_message . '")){ return false; }'),
  );

  return $form;
}

/**
 * Submit handler for admin form.
 */
function tp_xmlsitemap_admin_form_submit($form, &$form_state) {
  $checkboxes_fields = array(
    'tp_xmlsitemap_saved_content_types',
    'tp_xmlsitemap_saved_menus',
    'tp_xmlsitemap_saved_taxonomies',
  );

  foreach ($form_state['values'] as $field_name => $field_values) {
    if (!in_array($field_name, $checkboxes_fields)) {
      continue;
    }

    // Removed empty (0) values from checkboxes field value.
    $form_state['values'][$field_name] = array_keys(array_filter($field_values));
  }

  // Ensure that the sitemaps will be refreshed on next cron.
  tp_xmlsitemap_mark_sitemaps_to_be_regenerated();

  drupal_set_message(t("The sitemap will be refreshed on next cron."));
}

/**
 * Delete handler for admin form.
 */
function tp_xmlsitemap_admin_form_delete_submit($form, &$form_state) {
  tp_xmlsitemap_delete_index_links();
  xmlsitemap_link_save(array('type' => 'frontpage', 'id' => 0, 'loc' => ''));
  drupal_set_message(t("The Sitemaps will be refreshed on next cron."));
}
