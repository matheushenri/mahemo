<?php
// Limpa Header
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

// Adiciona Scripts
add_action( 'wp_enqueue_scripts', 'load_scripts' );
function load_scripts () {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), true );
    wp_enqueue_style( 'assistant-font', 'https://fonts.googleapis.com/css?family=Assistant:400,300,80');
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main-style.css', array(), true );
}

// Registra Menu
add_action( 'init', 'register_nav' );
function register_nav () {
    register_nav_menu( 'main-menu', 'Main Menu', 'mahemo' );
}

// Adiciona suporte para Post Thumbnail
add_theme_support( 'post-thumbnails' );
?>