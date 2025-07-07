<?php
function amrila_enqueue_scripts() {
    $stylesheet_path = get_template_directory() . '/style.css';
    $script_path = get_template_directory() . '/assets/main.js';

    wp_register_style(
        'style-css',
        get_stylesheet_uri(),
        [],
        filemtime($stylesheet_path),
        'all'
    );

    wp_register_script(
        'main-js',
        get_template_directory_uri() . '/assets/main.js',
        [],
        filemtime($script_path),
        true // Load in footer
    );

    wp_enqueue_style('style-css');
    wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts', 'amrila_enqueue_scripts');

?>