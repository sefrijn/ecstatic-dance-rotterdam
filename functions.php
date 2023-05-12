<?php

include("functions/blocksWhitelist.php");
include("functions/cleanupUserProfile.php");
include("functions/disableComments.php");
include("functions/disablePosts.php");
include("functions/favicon.php");

function edrdam_enqueue_styles()
{
    wp_enqueue_style('ed-rdam-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'edrdam_enqueue_styles');

add_theme_support('post-thumbnails');

function custom_theme_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'custom-theme'),
        )
    );
}
add_action('init', 'custom_theme_menus');
