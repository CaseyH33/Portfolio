<?php
/**
 * @file
 * recipe.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function recipe_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function recipe_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_image_default_styles().
 */
function recipe_image_default_styles() {
  $styles = array();

  // Exported image style: banner.
  $styles['banner'] = array(
    'label' => 'Banner',
    'effects' => array(
      2 => array(
        'name' => 'image_desaturate',
        'data' => array(),
        'weight' => 1,
      ),
      5 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 600,
          'height' => 200,
        ),
        'weight' => 3,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function recipe_node_info() {
  $items = array(
    'recipe' => array(
      'name' => t('Recipe'),
      'base' => 'node_content',
      'description' => t('Step-by-step recipes'),
      'has_title' => '1',
      'title_label' => t('Recipe'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
