<?php
/**
 * Changing the_excerpt function so that it always send the first 20 words
 * @param mixed $excerpt
 * @return string
 */
function custom_excerpt($excerpt)
{
  return wp_trim_words($excerpt, 20, '...');
}
add_filter('the_excerpt', 'custom_excerpt');