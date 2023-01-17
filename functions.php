<?php
function technext_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    register_nav_menu('primary_menu', 'Primary Menu');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'technext_theme_support');

function technext_register_styles()
{
    wp_enqueue_style('technext-theme-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('technext-theme-spacing', get_template_directory_uri() . "/assets/css/spacing.css", array(), '1.0', 'all');
    wp_enqueue_style('technext-theme-carousel', get_template_directory_uri() . "/assets/css/owl.carousel.min.css", array(), '1.0', 'all');
    wp_enqueue_style('technext-theme-main', get_template_directory_uri() . "/assets/css/main.css", array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'technext_register_styles');
