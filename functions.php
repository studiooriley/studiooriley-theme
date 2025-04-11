<?php
// Enqueue Styles and Scripts

function my_theme_enqueue_styles()
{
    wp_enqueue_style('studiooriley-theme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_style('studiooriley-theme-post-style', get_template_directory_uri() . '/assets/css/post.css', array(), filemtime(get_template_directory() . '/assets/css/post.css'));
    wp_enqueue_script('studiooriley-theme-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/script.js'), true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Theme Support for various features
function my_theme_setup()
{
    // Add support for Title tag (WordPress SEO feature)
    add_theme_support('title-tag');

    // Add support for Featured Images (Post Thumbnails)
    add_theme_support('post-thumbnails');

    // Add support for Custom Logo
    add_theme_support('custom-logo');

    // Register a navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'studiooriley-theme'),
    ));
}

add_action('after_setup_theme', 'my_theme_setup');

// Register Widget Areas (Sidebars)
function my_theme_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'studiooriley-theme'),
        'id' => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');
