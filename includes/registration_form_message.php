<?php

/**
 * Site registration.
 * 
 * @package makerstarter
 */

// Change Registration Message
function change_reg_message($message)
{
  // change messages that contain 'Register'
  if (strpos($message, 'Register') !== FALSE) {
    $newMessage = "Register with " . get_bloginfo('name');
    return '<p class="message register">' . $newMessage . '</p>';
  } else {
    return $message;
  }
}

// Change Registration Message
add_action('login_message', 'change_reg_message');
