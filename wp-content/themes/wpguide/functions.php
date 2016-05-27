<?php
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');

    // Css Styles
    wp_enqueue_style( 'main',  get_stylesheet_directory_uri() . '/styles/main.css' );

    // Js Scripts
    wp_enqueue_script( 'main',  get_stylesheet_directory_uri() . '/scripts/min/main-min.js' , array( 'jquery' ), '20140616', true);

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );




