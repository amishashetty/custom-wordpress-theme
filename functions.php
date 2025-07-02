<?php
/**
 * Enqueue styles and scripts
 */
function custom_theme_enqueue_assets() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_assets');

// Add support for menus and thumbnails
add_theme_support('menus');
add_theme_support('post-thumbnails');
register_nav_menus(array(
    'primary-menu' => __('Primary Menu'),
));

// Register Testimonials CPT
function custom_theme_register_cpt_testimonial() {
    $labels = array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title','editor','thumbnail'),
    );
    register_post_type('testimonial', $args);
}
add_action('init', 'custom_theme_register_cpt_testimonial');