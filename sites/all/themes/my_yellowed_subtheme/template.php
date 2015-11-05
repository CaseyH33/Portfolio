<?php
/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 */

/**
 * Implements hook_html_head_alter().
 */
function my_yellowed_subtheme_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8'
  );
}

/**
 * Insert themed breadcrumb page navigation at top of the node content.
 */
function my_yellowed_subtheme_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Use CSS to hide titile .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    // Comment below line to hide current page to breadcrumb.
    $breadcrumb[] = drupal_get_title();
    $output .= '<nav class="breadcrumb">' . implode(' » ', $breadcrumb) . '</nav>';
    return $output;
  }
}

/**
 * Override or insert variables into the page template.
 */
function my_yellowed_subtheme_preprocess_page(&$vars) {
  if (isset($vars['main_menu'])) {
    $vars['main_menu'] = theme('links__system_main_menu', array(
      'links' => $vars['main_menu'],
      'attributes' => array(
        'class' => array('links', 'main-menu', 'clearfix'),
      ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    ));
  }
  else {
    $vars['main_menu'] = FALSE;
  }
  if (isset($vars['secondary_menu'])) {
    $vars['secondary_menu'] = theme('links__system_secondary_menu', array(
      'links' => $vars['secondary_menu'],
      'attributes' => array(
        'class' => array('links', 'secondary-menu', 'clearfix'),
      ),
      'heading' => array(
        'text' => t('Secondary menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    ));
  }
  else {
    $vars['secondary_menu'] = FALSE;
  }
  if (module_exists('i18n_menu')) {
    $vars['main_menu_tree'] = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
  }
  else {
    $vars['main_menu_tree'] = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
  }
  $vars['display'] = theme_get_setting('display', 'my_yellowed_subtheme');
  $vars['slideshow_display'] = theme_get_setting('slideshow_display', 'my_yellowed_subtheme');
  $vars['slide1_des'] = theme_get_setting('slide1_des', 'my_yellowed_subtheme');
  $vars['slide2_des'] = theme_get_setting('slide2_des', 'my_yellowed_subtheme');
  $vars['slide3_des'] = theme_get_setting('slide3_des', 'my_yellowed_subtheme');
  $vars['img1'] = base_path() . drupal_get_path('theme', 'my_yellowed_subtheme') . '/images/theater-seats-banner.jpg';
  $vars['img2'] = base_path() . drupal_get_path('theme', 'my_yellowed_subtheme') . '/images/beer-me-bw.jpg';
  $vars['img3'] = base_path() . drupal_get_path('theme', 'my_yellowed_subtheme') . '/images/duck-ramen.jpg';
  $vars['twitter'] = theme_get_setting('twitter', 'my_yellowed_subtheme');
  $vars['facebook'] = theme_get_setting('facebook', 'my_yellowed_subtheme');
  // $vars['googleplus'] = theme_get_setting('googleplus', 'my_yellowed_subtheme');
  $vars['linkedin'] = theme_get_setting('linkedin', 'my_yellowed_subtheme');
  // $vars['pinterest'] = theme_get_setting('pinterest', 'my_yellowed_subtheme');
  // $vars['vimeo'] = theme_get_setting('vimeo', 'my_yellowed_subtheme');
  // $vars['youtube'] = theme_get_setting('youtube', 'my_yellowed_subtheme');
  $vars['theme_path_social'] = base_path() . drupal_get_path('theme', 'my_yellowed_subtheme');
  $vars['footer_copyright'] = theme_get_setting('footer_copyright');
  $vars['footer_developed'] = theme_get_setting('footer_developed');
  $vars['footer_developedby_url'] = filter_xss_admin(theme_get_setting('footer_developedby_url', 'my_yellowed_subtheme'));
  $vars['footer_developedby'] = filter_xss_admin(theme_get_setting('footer_developedby', 'my_yellowed_subtheme'));

}
/**
 * Add Google Fonts.
 */
function my_yellowed_subtheme_preprocess_html(&$variables) {
  drupal_add_css('http://fonts.googleapis.com/css?family=Volkhov:400,400italic', array('type' => 'external'));
  drupal_add_css('http://fonts.googleapis.com/css?family=Ubuntu', array('type' => 'external'));
  drupal_add_css('http://fonts.googleapis.com/css?family=Dancing+Script', array('type' => 'external'));
}

/**
 * Duplicate of theme_menu_local_tasks() but adds clearfix to tabs.
 */
function my_yellowed_subtheme_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary clearfix">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary clearfix">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }
  return $output;
}

/**
 * Override or insert variables into the node template.
 */
function my_yellowed_subtheme_preprocess_node(&$variables) {
  $node = $variables['node'];
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }
}

function my_yellowed_subtheme_page_alter($page) {
  $viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
    'name' => 'viewport',
    'content' => 'width=device-width'
    ),
  );
  drupal_add_html_head($viewport, 'viewport');
}
