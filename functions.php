<?php
if (!defined('ABSPATH')) exit;

require_once __DIR__ . '/plugin-update-checker-master/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5p6\PucFactory;

$themeUpdateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/OscarBozadaSSM/CeroTheme',
    __FILE__,
    'CeroTheme'
);

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