<?php

/**
 * Site login.
 * 
 * @package makerstarter
 */

// Change Login Page header url
function ourHeaderUrl()
{
  return esc_url(site_url('/'));
}

// Make login title the name of our website
function ourLoginTitle()
{
  return get_bloginfo('name');
}

// Enqueue out stylesheet for login screen
function ourLoginCSS()
{
  wp_enqueue_style('login styles', get_theme_file_uri('/assets/css/styles.css'));
}

// Customize Login Screen Title
add_filter('login_headertext', 'ourLoginTitle');

// Change Login Page header url
add_filter('login_headerurl', 'ourHeaderUrl');

// Enqueue out stylesheet for login screen
add_action('login_enqueue_scripts', 'ourLoginCSS');
