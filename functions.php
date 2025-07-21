<?php
/**
 * Enqueue styles and scripts for the Amrila theme.
 *
 * This function registers and enqueues the main stylesheet and JavaScript files,
 * as well as Bootstrap CSS and JS files.
 *
 * @package Amrila
 */ 


 if ( ! defined( 'AMRILA_DIR_PATH' ) ) {
	define( 'AMRILA_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

require_once AMRILA_DIR_PATH . '/inc/helpers/autoloader.php';

function amrila_get_theme_instance() {
    return \AMRILA_THEME\Inc\AMRILA_THEME::get_instance();
}

amrila_get_theme_instance();

function amrila_enqueue_scripts() {
    $stylesheet_path = get_template_directory() . '/style.css';
    $script_path = get_template_directory() . '/assets/main.js';

    // Register Styles and Scripts
    wp_register_style(
        'style-css',
        get_stylesheet_uri(),
        [],
        filemtime($stylesheet_path),
        'all'
    );

      wp_register_style(
        'bootstrap-css',
        get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css',
        [],
        false,
        'all'
    );

    wp_register_script(
        'main-js',
        get_template_directory_uri() . '/assets/main.js',
        [],
        filemtime($script_path),
        true // Load in footer
    );

       wp_register_script(
        'bootstrap-js',
        get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js',
        ['jquery'],
        false,
        true // Load in footer
    );

    // Enqueue Styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    
    // Enqueue Scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}
add_action('wp_enqueue_scripts', 'amrila_enqueue_scripts');

?>