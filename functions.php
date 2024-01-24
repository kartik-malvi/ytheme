<?php
/**
 * Theme Functions
 * 
 * @package ytheme
 */

function ytheme_enqueue_scripts() {
    // Register Styles
    wp_register_style('styleCss', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'), 'all');
    wp_register_style('bootstrapCss', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], filemtime(get_template_directory() . '/assets/src/library/css/bootstrap.min.css'), 'all');

    // Register Scripts
    wp_register_script('mainJs', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script('bootstrapJs', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], filemtime(get_template_directory() . '/assets/src/library/js/bootstrap.min.js'), true);

    // Enqueue Styles
    wp_enqueue_style('styleCss');
    wp_enqueue_style('bootstrapCss');

    // Enqueue Scripts
    wp_enqueue_script('mainJs');
    wp_enqueue_script('bootstrapJs');
}

add_action('wp_enqueue_scripts', 'ytheme_enqueue_scripts');
?>
