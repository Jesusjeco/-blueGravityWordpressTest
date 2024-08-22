<?php

include("includes/index.php");

function jeco_enqueue_styles()
{
  // Register and enqueue a custom stylesheet for the home page
  if (is_home()) {
    wp_enqueue_style('home-page-style', STYLES_PATH . 'home.css');
  }

  if (is_single()) {
    wp_enqueue_style('single-page-style', STYLES_PATH . 'single.css');
  }

  if (is_post_type_archive('games')) {
    wp_enqueue_style('games-archive-style', STYLES_PATH . 'archive-games.css');
  }

  // Check if the current page is using the "About Us" template
  if (is_page_template('templates/about.php')) {
    // Enqueue the custom stylesheet for the "About Us" page
    wp_enqueue_style('about-us-style', STYLES_PATH . 'about.css');
  }

  if (is_page_template('templates/contact.php')) {
    // Enqueue the custom stylesheet for the "About Us" page
    wp_enqueue_style('contact-style', STYLES_PATH . 'contact.css');
  }

  if (is_page_template('templates/services.php')) {
    // Enqueue the custom stylesheet for the "About Us" page
    wp_enqueue_style('services-style', STYLES_PATH . 'services.css');
  }
}
add_action('wp_enqueue_scripts', 'jeco_enqueue_styles');
