<?php
add_theme_support('post-thumbnails');


function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/static/external/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri().'/static/external/font-awesome/css/font-awesome.min.css' );
    

    wp_enqueue_script('jquery_script', get_template_directory_uri().'/static/external/jquery/dist/jquery.min.js', true);
    wp_enqueue_script('bootstrap_script', get_template_directory_uri().'/static/external/bootstrap/dist/js/bootstrap.min.js', true);

    wp_enqueue_script ( 'custom-script', get_template_directory_uri() . '/static/js/script.js' );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>
