<?php

include("includes/index.php");

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
  }
}

// Hook into the ACF init action to register the block
add_action('acf/init', 'register_jeco_acf_blocks');
