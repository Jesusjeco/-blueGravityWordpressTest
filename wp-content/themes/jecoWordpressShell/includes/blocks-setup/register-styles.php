<?php

/**
 * This function checks if an specific block is in use.
 * If it is, it adds the style.css into the head
 * @return void
 */

function jeco_enqueue_conditional_block_styles()
{
  if (has_block('acf/hello-world')) {
    wp_enqueue_style('hello-world-block', BLOCKS_STYLES_PATH . 'hello-world/style.css');
  }

  if (has_block('acf/hero-video')) {
    wp_enqueue_style('hero-video-block', BLOCKS_STYLES_PATH . 'hero-video/style.css');
  }

  if (has_block('acf/blog-section')) {
    wp_enqueue_style('blog-section-block', BLOCKS_STYLES_PATH . 'blog-section/style.css');
  }

  if (has_block('acf/services')) {
    wp_enqueue_style('services-block', BLOCKS_STYLES_PATH . 'services/style.css');
  }

  if (has_block('acf/columns-4-6')) {
    wp_enqueue_style('columns-4-6-block', BLOCKS_STYLES_PATH . 'columns-4-6/style.css');
  }

  if (has_block('acf/columns-4-6-button')) {
    wp_enqueue_style('columns-4-6-button-block', BLOCKS_STYLES_PATH . 'columns-4-6-button/style.css');
  }
}
add_action('wp_enqueue_scripts', 'jeco_enqueue_conditional_block_styles');
