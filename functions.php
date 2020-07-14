<?php
function kopuram_enqueue_styles() {
// all styles
wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/lib/css/bootstrap.min.css');
wp_enqueue_style('font-awesome-css',get_template_directory_uri().'/lib/font-awesome/css/font-awesome.min.css');
wp_enqueue_style('fullpage-css',get_template_directory_uri().'/lib/css/fullpage.css');
wp_enqueue_style( 'stylecss', get_stylesheet_uri() );  

}

function kopuram_enqueue_scripts(){
// all scripts
wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/lib/js/jquery.min.js');
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/lib/js/bootstrap.min.js');
wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/lib/js/slick.js');

}

add_action( 'wp_enqueue_scripts', 'kopuram_enqueue_styles',80 );
add_action( 'wp_enqueue_scripts', 'kopuram_enqueue_scripts',80 );

// register_nav_menus(array(
// 'primary'=>__('Primary Menu'),
// 'secondary'=>__('Secondary Menu')
// ))


?>