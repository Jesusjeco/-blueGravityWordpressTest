<?php

include("includes/index.php");

/**
 * Changing the_excerpt function so that it always send the first 15 words
 * @param mixed $excerpt
 * @return string
 */
function custom_excerpt($excerpt) {
  return wp_trim_words($excerpt, 20, '...');
}
add_filter('the_excerpt', 'custom_excerpt');

function my_theme_enqueue_styles() {
  // Register and enqueue a custom stylesheet for the home page
  if (is_home()) {
      wp_enqueue_style('home-page-style', get_template_directory_uri() . '/dist/css/home.css');
  }

  if (is_single()) {
    wp_enqueue_style('single-page-style', get_template_directory_uri() . '/dist/css/single.css');
}

  // Check if the current page is using the "About Us" template
  if (is_page_template('templates/about.php')) {
    // Enqueue the custom stylesheet for the "About Us" page
    wp_enqueue_style('about-us-style', get_template_directory_uri() . '/dist/css/about.css');
}
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


function register_jeco_acf_blocks()
{
  // Check if function exists to avoid errors
  if (function_exists('acf_register_block_type')) {

    // Register the hello-world block
    acf_register_block_type([
      'name'              => 'hello-world',
      'title'             => __('Hello World'),
      'description'       => __('A custom block for displaying a Hello World message.'),
      'render_template'   => get_template_directory() . '/blocks/hello-world/render.php', // Path to the render file
      'category'          => 'formatting',
      'icon'              => 'admin-site-alt3',
      'keywords'          => array('hello', 'world'),
      'supports'          => array(
        'align' => true,
      ),
    ]);

    // Register the hero-video block
    acf_register_block_type([
      'name'              => 'hero-video',
      'title'             => __('Hero Video'),
      'description'       => __('A custom block for displaying a hero with am iframe.'),
      'render_template'   => get_template_directory() . '/blocks/hero-video/render.php', // Path to the render file
      'category'          => 'formatting',
      'icon'              => 'admin-site-alt3',
      'keywords'          => array('hero', 'iframe'),
      'supports'          => array(
        'align' => true,
      ),
    ]);

    // Register the blog-section block
    acf_register_block_type([
      'name'              => 'blog-section',
      'title'             => __('Blog section'),
      'description'       => __('A custom block for displaying a blog section anywhere'),
      'render_template'   => get_template_directory() . '/blocks/blog-section/render.php', // Path to the render file
      'category'          => 'formatting',
      'icon'              => 'admin-site-alt3',
      'keywords'          => array('blog', 'news'),
      'supports'          => array(
        'align' => true,
      ),
    ]);

    // Register the 4-6 column block
    acf_register_block_type([
      'name'              => 'columns-4-6',
      'title'             => __('4 6 columns'),
      'description'       => __('A custom block for displaying a 2 columns layouts block.'),
      'render_template'   => get_template_directory() . '/blocks/columns-4-6/render.php', // Path to the render file
      'category'          => 'formatting',
      'icon'              => 'admin-site-alt3',
      'keywords'          => array('columns'),
      'supports'          => array(
        'align' => true,
      ),
    ]);

    // Register the 4-6 column block
    acf_register_block_type([
      'name'              => 'columns-4-6-button',
      'title'             => __('4 6 columns buttons'),
      'description'       => __('A custom block for displaying a 2 columns layouts and a top button block.'),
      'render_template'   => get_template_directory() . '/blocks/columns-4-6-button/render.php', // Path to the render file
      'category'          => 'formatting',
      'icon'              => 'admin-site-alt3',
      'keywords'          => array('columns', 'button'),
      'supports'          => array(
        'align' => true,
      ),
    ]);
  }
}

// Hook into the ACF init action to register the block
add_action('acf/init', 'register_jeco_acf_blocks');
