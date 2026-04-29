<?php
if (!defined('ABSPATH')) exit;

add_action('wp_footer', function() {
    echo '<p style="text-align:center;">CERO funcionando</p>';
});

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_action('after_setup_theme', function() {
    register_nav_menus([
        'menu-principal' => 'Menú Principal'
    ]);
});

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'mi-tema-style',
        get_stylesheet_uri()
    );
});