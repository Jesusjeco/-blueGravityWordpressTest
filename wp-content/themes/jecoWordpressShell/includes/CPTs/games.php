<?php
function create_games_cpt()
{
  $labels = array(
    'name'                  => _x('Games', 'Post type general name', 'textdomain'),
    'singular_name'         => _x('Game', 'Post type singular name', 'textdomain'),
    'menu_name'             => _x('Games', 'Admin Menu text', 'textdomain'),
    'name_admin_bar'        => _x('Game', 'Add New on Toolbar', 'textdomain'),
    'add_new'               => __('Add New', 'textdomain'),
    'add_new_item'          => __('Add New Game', 'textdomain'),
    'new_item'              => __('New Game', 'textdomain'),
    'edit_item'             => __('Edit Game', 'textdomain'),
    'view_item'             => __('View Game', 'textdomain'),
    'all_items'             => __('All Games', 'textdomain'),
    'search_items'          => __('Search Games', 'textdomain'),
    'parent_item_colon'     => __('Parent Games:', 'textdomain'),
    'not_found'             => __('No games found.', 'textdomain'),
    'not_found_in_trash'    => __('No games found in Trash.', 'textdomain'),
    'featured_image'        => _x('Game Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
    'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
    'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
    'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
    'archives'              => _x('Game archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
    'insert_into_item'      => _x('Insert into game', 'Overrides the “Insert into post”/“Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
    'uploaded_to_this_item' => _x('Uploaded to this game', 'Overrides the “Uploaded to this post”/“Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
    'filter_items_list'     => _x('Filter games list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/“Filter pages list”. Added in 4.4', 'textdomain'),
    'items_list_navigation' => _x('Games list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/“Pages list navigation”. Added in 4.4', 'textdomain'),
    'items_list'            => _x('Games list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/“Pages list”. Added in 4.4', 'textdomain'),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'games'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'          => 'dashicons-video-alt3',
    'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    'taxonomies'         => array('category'), // This will attach the built-in Categories taxonomy
    'show_in_rest'       => true, // Enables the block editor and REST API support
  );

  register_post_type('games', $args);
}

add_action('init', 'create_games_cpt');