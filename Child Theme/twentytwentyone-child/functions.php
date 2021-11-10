<?php 
add_action('wp_enqueue_scripts', 'ctc_enqueue_scripts');
function ctc_enqueue_scripts(){ //Enqueue all the files that required

	wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'twenty-twenty-one-style-child', get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'pallete-mozaic-font', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Palette+Mosaic&display=swap', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'oswald-font', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap', array(), wp_get_theme()->get( 'Version' ) );
}
