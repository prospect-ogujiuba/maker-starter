<?php

/**
 * Query Adjustments.
 * 
 * @package makerstarter
 */

function makerstarter_adjust_queries($query)
{

  // Search Page Query Adjustment
  if ($query->is_search()) {
    $query->set('posts_per_page', '-1');
    $query->set('order', 'ASC');
  }
}

// Adjust Queries
add_action('pre_get_posts', 'makerstarter_adjust_queries');
