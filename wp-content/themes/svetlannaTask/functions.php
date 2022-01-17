<?php

/*

function custom_script_style_adding_function() {
    wp_enqueue_script( 'my-js', get_stylesheet_directory_uri() . '/assets/js/script.js' );
    wp_enqueue_style( 'my-css', get_stylesheet_directory_uri() . '/assets/js/style.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_script_style_adding_function' );


*/




require get_template_directory() . '/classes/Sv_comment.php';


function custom_script_adding_function() {

    wp_enqueue_script( 'my-jquery-min', get_stylesheet_directory_uri() .'/assets/js/jquery/jquery.min.js' );
    wp_enqueue_script( 'my-jquery-min', get_stylesheet_directory_uri() .'/assets/js/bootstrap.bundle.min.js' );
    wp_enqueue_script( 'my-jquery-min', get_stylesheet_directory_uri() .'/assets/js/animation.js' );
    wp_enqueue_script( 'my-jquery-min', get_stylesheet_directory_uri() .'/assets/js/imagesloaded.js');
    wp_enqueue_script( 'my-jquery-min', get_stylesheet_directory_uri() .'/assets/js/popup.js' );
    wp_enqueue_script( 'my-custom', get_stylesheet_directory_uri() .'/assets/js/custom.js' );
    wp_enqueue_script( 'my-slick','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' );



}
add_action( 'wp_enqueue_scripts', 'custom_script_adding_function' );



// this function only adds styles
function custom_style_adding_function() {
    wp_enqueue_style( 'my-bootstrap', get_stylesheet_directory_uri() .'/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'my-css', get_stylesheet_directory_uri() . '/assets/css/style.css' );
        wp_enqueue_style( 'my-bootstrap', get_stylesheet_directory_uri() .'/assets/css/animated.css' );

}
add_action( 'wp_enqueue_scripts', 'custom_style_adding_function' );




function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'S_top_menu' => __( 'Top Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );



function kb_theme_setup() {
    add_theme_support('custom-logo');
}

add_action('after_setup_theme','kb_theme_setup');

wp_list_comments();