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


// google fonts enqueue start 
function kamrul_add_google_fonts(){
    wp_enqueue_style('kamrul_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald:wght@200..700&display=swap',false);
}
add_action('wp_enqueue_scripts','kamrul_add_google_fonts');



// Theme Function code start 
function kamrul_customizar_registar($wp_customize){
    
    $wp_customize->add_section('kamrul_header_area', array(
        'title'       =>  __('Header Area', 'kamrulislam'),
        'description' => 'If you interested to update header area you can do it here',
    ));

    $wp_customize->add_setting('kamrul_logo', array(

        'default' =>  get_bloginfo('template_directory').'/img/logo.png',
    ));

    $wp_customize->add_control(new Wp_Customize_Image_Control($wp_customize, 'kamrul_logo', array(

        'label' => 'Logo Upload',
        'setting' => 'kamrul_logo',
        'description' => 'If you interested to change or update your logo you can do it',
        'section' => 'kamrul_header_area',

    ) ));


    // menu position setting code start 
    $wp_customize->add_section('kamrul_menu_position', array(
        'title'       => __('Menu Position Option', 'kamrulislam'),
        'description' => 'If you are interested in changing your menu position, you can do it here.'
    ));
    
    $wp_customize->add_setting('kamrul_menu_position', array(
        'default' => 'right_menu',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('kamrul_menu_position', array(
        'label'       => "Menu Position",
        'description' => 'Select Your Menu Position',
        'section'     => 'kamrul_menu_position',
        'settings'    => 'kamrul_menu_position',
        'type'        => 'radio',
        'choices'     => array(
            'left_menu'   => 'Left Menu',
            'right_menu'  => 'Right Menu',
            'center_menu' => 'Center Menu'
        ),
    ));
    
        // Footer position setting code start 
        // $wp_customize->add_section('kamrul_footer_option', array(
        //     'title'       => __('Footer Option', 'kamrulislam'),
        //     'description' => 'If you are interested in changing your footer option, you can do it here.'
        // ));
        
        // $wp_customize->add_setting('kamrul_copyright_section', array(
        //     'default' => '&copy copyright 2024 | by kamrul',
        // ));
        
        // $wp_customize->add_control('kamrul_copyright_section', array(
        //     'label'       => "Copyright Text",
        //     'description' => 'If you need can update your copyright text from here',
        //     'section'     => 'kamrul_footer_option',
        //     'setting'    => 'kamrul_copyright_section', 
        // ));
        $wp_customize->add_section('kamrul_footer_option', array(
            'title'       => __('Footer Option', 'kamrulislam'),
            'description' => 'If you are interested in changing your footer option, you can do it here.'
        ));
        
        $wp_customize->add_setting('kamrul_copyright_section', array(
            'default' => '&copy; copyright 2024 | by kamrul',
        ));
        
        $wp_customize->add_control('kamrul_copyright_section', array(
            'label'       => 'Copyright Text',
            'description' => 'If you need, you can update your copyright text from here.',
            'section'     => 'kamrul_footer_option',
            'settings'    => 'kamrul_copyright_section', // corrected to 'settings'
        ));
        
    
}
add_action('customize_register', 'kamrul_customizar_registar');


// Menu register code start 

register_nav_menu('main_menu',__('Main Menu', 'kamrulislam'));

// walker Menu Properties

// function kamrul_nav_description( $item_output, $item, $args ){
//     if( ! empty($item->description)){
//         $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav"' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
//     }
//     return $item_output;
// }
// add_filter('walker_nav_menu_start_el', 'kamrul_nav_description', 10, 3);

function kamrul_nav_description( $item_output, $item, $args ) {
    // Ensure $args is an object and has a property link_after
    if ( is_object( $args ) && property_exists( $args, 'link_after' ) ) {
        $link_after = $args->link_after;
    } else {
        // Set a default empty string for link_after if it's not available
        $link_after = '';
    }

    if ( ! empty( $item->description ) ) {
        $item_output = str_replace(
            $link_after . '</a>', 
            '<span class="walker_nav">' . $item->description . '</span>' . $link_after . '</a>', 
            $item_output
        );
    }

    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'kamrul_nav_description', 10, 3 );






 

