<?php

/**
 * Styles and Scripts.
 * 
 * @package makerstarter
 */

// Enqueue styles and scripts
function makerstarter_enqueue()
{
  $theme_version = filemtime(get_stylesheet_directory() . '/style.css');
  $script_version = filemtime(get_stylesheet_directory() . '/assets/js/index.js');
  $style_version = filemtime(get_stylesheet_directory() . '/assets/css/styles.css');

  /* Register and Enqueue Admin Scripts */

  // wp_register_script('makerstarter-admin-scripts', get_parent_theme_file_uri('/assets/js/index-wp-admin.js'), [], $script_version, true);
  // wp_enqueue_script('makerstarter-admin-scripts');

  /* Register and Enqueue Admin Styles */

  wp_register_style('makerstarter-admin-styles', get_parent_theme_file_uri('/assets/css/styles-wp-admin.css'), [], $style_version, 'all');
  wp_enqueue_style('makerstarter-admin-styles');

  /* Register and Enqueue Front End Scripts */

  wp_register_script('makerstarter-scripts', get_parent_theme_file_uri('/assets/js/index.js'), ['wp-element'], $script_version, true);
  wp_enqueue_script('makerstarter-scripts');

  /* Register and Enqueue Front End Styles */

  wp_register_style('makerstarter-styles', get_parent_theme_file_uri('/assets/css/styles.css'), [], $style_version, 'all');
  wp_enqueue_style('makerstarter-styles');
}

// Enqueue front-end styles and script
add_action('wp_enqueue_scripts', 'makerstarter_enqueue');
