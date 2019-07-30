<?php 
/*
* Подключение скриптов и стилей
*/

function connection_styles() {
	wp_enqueue_style( 'my-style', get_template_directory_uri() . '/assets/css/style.css', array() );
}
add_action( 'wp_enqueue_scripts', 'connection_styles' );


function connection_scripts() {
	wp_enqueue_script( 'my-script-jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'connection_scripts' );