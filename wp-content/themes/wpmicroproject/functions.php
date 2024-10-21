<?php
/*
The theme sections
*/

//Theme title
add_theme_support("title-tag");

// Theme css and jquery file calling
function kamrul_css_js_calling_enque(){
    wp_enqueue_style('kamrul-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'kamrul_css_js_calling_enque');
