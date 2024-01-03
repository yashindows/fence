<?php
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );


	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array(), null, true );
	wp_enqueue_script( 'popup', get_template_directory_uri() . '/assets/js/popup.js', array(), null, true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>