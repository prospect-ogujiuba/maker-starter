<?php

/**
 * Gravity Forms Functions.
 * 
 * @package ThemeStarter
 */

function setup_form_args($form_args)
{
    $form_args['ajax'] = true;

    return $form_args;
}

// Gravity Forms Ajax Sumbit
add_filter('gform_form_args', 'setup_form_args');