<?php

function cinema_theme_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'cinema-theme'),
    ));
}
add_action('after_setup_theme', 'cinema_theme_setup');

function cinema_theme_scripts() {
    wp_enqueue_style('cinema-theme-style', get_stylesheet_uri());
    wp_enqueue_script('cinema-theme-script', get_template_directory_uri() . '/js/theme.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'cinema_theme_scripts');

function cinema_theme_localize_script() {
    wp_localize_script('cinema-theme-script', 'cinema_theme_vars', array(
        'template_url' => get_template_directory_uri(),
    ));
}
add_action('wp_enqueue_scripts', 'cinema_theme_localize_script');
