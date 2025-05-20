<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="site-header">
        <div class="site-branding">
            <!-- Logo shown on every page -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/studiooriley_logotype.png" alt="Studio O'Riley Logo">
            </a>

            <!-- Hidden site title for SEO and accessibility -->
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
            </h1>

            <p class="site-description"><?php bloginfo('description'); ?></p>
        </div>

        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'menu',
                'fallback_cb'    => false,
            ));
            ?>
        </nav>
    </header>