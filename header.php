<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header style="background:#222; color:#fff; padding:15px;">
    <div style="max-width:1200px; margin:0 auto; display:flex; justify-content:space-between;">
        
        <h2>CERO</h2>

        <nav>
            <?php
            wp_nav_menu([
                'theme_location' => 'menu-principal',
                'container' => false
            ]);
            ?>
        </nav>

    </div>
</header>