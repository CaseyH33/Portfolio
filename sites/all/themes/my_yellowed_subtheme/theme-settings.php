<?php
/**
 * @file
 * Theme setting callbacks for the my_yellowed_subtheme theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 */
function my_yellowed_subtheme_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['my_yellowed_subtheme_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('my_yellowed_subtheme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['my_yellowed_subtheme_settings']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('breadcrumbs', 'my_yellowed_subtheme'),
    '#description'   => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );
  $form['my_yellowed_subtheme_settings']['slideshow'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slideshow'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['my_yellowed_subtheme_settings']['slideshow']['slideshow_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Slideshow'),
    '#default_value' => theme_get_setting('slideshow_display', 'my_yellowed_subtheme'),
    '#description'   => t("Check this option to show Slideshow. Uncheck to hide."),
  );
    $form['my_yellowed_subtheme_settings']['slideshow']['slide1'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 1'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
    $form['my_yellowed_subtheme_settings']['slideshow']['slide1']['slide1_des'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide 1'),
    '#default_value' => theme_get_setting('slide1_des', 'my_yellowed_subtheme'),
    '#description'   => t("Enter Description for Slide1."),
  );
    $form['my_yellowed_subtheme_settings']['slideshow']['slide2'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 2'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
    $form['my_yellowed_subtheme_settings']['slideshow']['slide2']['slide2_des'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide 2'),
    '#default_value' => theme_get_setting('slide2_des', 'my_yellowed_subtheme'),
    '#description'   => t("Enter Description for Slide2."),
  );
    $form['my_yellowed_subtheme_settings']['slideshow']['slide3'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 3'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
    $form['my_yellowed_subtheme_settings']['slideshow']['slide3']['slide3_des'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide 3'),
    '#default_value' => theme_get_setting('slide3_des', 'my_yellowed_subtheme'),
    '#description'   => t("Enter Description for Slide3."),
  );
    $form['my_yellowed_subtheme_settings']['slideshow']['slideimage'] = array(
    '#markup' => t('To change the Slide Images, Replace the slide-image-1.jpg, slide-image-2.jpg and slide-image-3.jpg in the images folder of the my_yellowed_subtheme theme folder.'),
  );
  $form['my_yellowed_subtheme_settings']['social'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social Icon'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['my_yellowed_subtheme_settings']['social']['display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Social Icon'),
    '#default_value' => theme_get_setting('display', 'my_yellowed_subtheme'),
    '#description'   => t("Check this option to show Social Icon. Uncheck to hide."),
  );
    $form['my_yellowed_subtheme_settings']['social']['facebook1'] = array(
    '#type' => 'fieldset',
    '#title' => t('Facebook'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['my_yellowed_subtheme_settings']['social']['facebook1']['facebook'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook URL'),
    '#default_value' => theme_get_setting('facebook', 'my_yellowed_subtheme'),
    '#description'   => t("Enter your Facebook Profile URL. example:: http://www.xyz.com"),
  );
    $form['my_yellowed_subtheme_settings']['social']['twitter1'] = array(
    '#type' => 'fieldset',
    '#title' => t('Twitter'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
   $form['my_yellowed_subtheme_settings']['social']['twitter1']['twitter'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter URL'),
    '#default_value' => theme_get_setting('twitter', 'my_yellowed_subtheme'),
    '#description' => t("Enter your Twitter Profile URL. example:: http://www.xyz.com"),
  );
  //   $form['my_yellowed_subtheme_settings']['social']['googleplus1'] = array(
  //   '#type' => 'fieldset',
  //   '#title' => t('Googleplus'),
  //   '#collapsible' => TRUE,
  //   '#collapsed' => TRUE,
  // );
  //   $form['my_yellowed_subtheme_settings']['social']['googleplus1']['googleplus'] = array(
  //   '#type' => 'textfield',
  //   '#title' => t('GooglePlus URL'),
  //   '#default_value' => theme_get_setting('googleplus', 'my_yellowed_subtheme'),
  //   '#description'   => t("Enter your Google Plus Profile URL. example:: http://www.xyz.com"),
  // );
    $form['my_yellowed_subtheme_settings']['social']['linkedin1'] = array(
    '#type' => 'fieldset',
    '#title' => t('Linkedin'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['my_yellowed_subtheme_settings']['social']['linkedin1']['linkedin'] = array(
    '#type' => 'textfield',
    '#title' => t('LinkedIn URL'),
    '#default_value' => theme_get_setting('linkedin', 'my_yellowed_subtheme'),
    '#description'   => t("Enter your LinkedIn Profile URL. example:: http://www.xyz.com"),
  );
  //   $form['my_yellowed_subtheme_settings']['social']['pinterest1'] = array(
  //   '#type' => 'fieldset',
  //   '#title' => t('Pinterest'),
  //   '#collapsible' => TRUE,
  //   '#collapsed' => TRUE,
  // );
  //   $form['my_yellowed_subtheme_settings']['social']['pinterest1']['pinterest'] = array(
  //   '#type' => 'textfield',
  //   '#title' => t('Pinterest URL'),
  //   '#default_value' => theme_get_setting('pinterest', 'my_yellowed_subtheme'),
  //   '#description'   => t("Enter your Pinterest Profile URL. example:: http://www.xyz.com"),
  // );
  //   $form['my_yellowed_subtheme_settings']['social']['vimeo1'] = array(
  //   '#type' => 'fieldset',
  //   '#title' => t('Vimeo'),
  //   '#collapsible' => TRUE,
  //   '#collapsed' => TRUE,
  // );
  //   $form['my_yellowed_subtheme_settings']['social']['vimeo1']['vimeo'] = array(
  //   '#type' => 'textfield',
  //   '#title' => t('Vimeo URL'),
  //   '#default_value' => theme_get_setting('vimeo', 'my_yellowed_subtheme'),
  //   '#description'   => t("Enter your Vimeo Profile URL. example:: http://www.xyz.com"),
  // );
  //   $form['my_yellowed_subtheme_settings']['social']['youtube1'] = array(
  //   '#type' => 'fieldset',
  //   '#title' => t('Youtube'),
  //   '#collapsible' => TRUE,
  //   '#collapsed' => TRUE,
  // );
  //   $form['my_yellowed_subtheme_settings']['social']['youtube1']['youtube'] = array(
  //   '#type' => 'textfield',
  //   '#title' => t('Youtube URL'),
  //   '#default_value' => theme_get_setting('youtube', 'my_yellowed_subtheme'),
  //   '#description'   => t("Enter your Youtube Profile URL. example:: http://www.xyz.com"),
  // );
  $form['my_yellowed_subtheme_settings']['footer'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['my_yellowed_subtheme_settings']['footer']['footer_copyright'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show copyright text in footer'),
    '#default_value' => theme_get_setting('footer_copyright', 'my_yellowed_subtheme'),
    '#description'   => t("Check this option to show copyright text in footer. Uncheck to hide."),
  );
  $form['my_yellowed_subtheme_settings']['footer']['footer_developed'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show theme developed by in footer'),
    '#default_value' => theme_get_setting('footer_developed', 'my_yellowed_subtheme'),
    '#description'   => t("Check this option to show design & developed by text in footer. Uncheck to hide."),
  );
  $form['my_yellowed_subtheme_settings']['footer']['footer_developedby'] = array(
    '#type' => 'textfield',
    '#title' => t('Add name developed by in footer'),
    '#default_value' => theme_get_setting('footer_developedby', 'my_yellowed_subtheme'),
    '#description'   => t("Add name developed by in footer"),
  );
  $form['my_yellowed_subtheme_settings']['footer']['footer_developedby_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Add link to developed by in footer'),
    '#default_value' => theme_get_setting('footer_developedby_url', 'my_yellowed_subtheme'),
    '#description'   => t("Add url developed by in footer. example:: http://www.xyz.com"),
  );
}
