<?php
/*
The theme sections
*/

//Theme title
add_theme_support("title-tag");

// Theme css and jquery file calling
function kamrul_css_js_calling_enque(){
    wp_enqueue_style('kamrul-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.3.3', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    // jquery file 
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'js/bootstrap.js', array(), '5.3.3', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'js/main.js', array(), '1.0.0', 'true');
}
add_action('wp_enqueue_scripts', 'kamrul_css_js_calling_enque');
