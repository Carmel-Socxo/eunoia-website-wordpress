<?php

/**
 * Theme Functions
 */

function theme_setup()
{
    add_theme_support('post-thumbnails'); // Enables featured images
    set_post_thumbnail_size(800, 600, true); // Default size (cropped)

    add_image_size('hero-large', 1200, 800, true); // Hero post image
    add_image_size('blog-medium', 600, 400, true); // Blog post thumbnails
}
add_action('after_setup_theme', 'theme_setup');

// Enqueue styles and scripts
function eunoia_enqueue_styles()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('custom-index-js', get_template_directory_uri() . '/js/index.js', array('jquery'), null, true);
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'eunoia_enqueue_styles');

// Register menu locations
function eunoia_register_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'eunoia')
    ));
}
add_action('init', 'eunoia_register_menus');
