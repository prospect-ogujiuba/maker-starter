<?php

/**
 * Archive Prexix Removal Function.
 * 
 * @package makerstarter
 */

function wpdocs_remove_archive_title_prefixes($title, $original_title)
{
    return $original_title;
}

// Remove Archive Title Prefix
add_filter('get_the_archive_title', 'wpdocs_remove_archive_title_prefixes', 10, 2);
