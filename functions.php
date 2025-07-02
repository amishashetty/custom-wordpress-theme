<?php
// Enqueue styles and scripts
function custom_theme_enqueue_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Optional: enqueue a custom JS file
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_assets');

// Add menu support
add_theme_support('menus');

register_nav_menus(array(
  'primary-menu' => __('Primary Menu')
));

