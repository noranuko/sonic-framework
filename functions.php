<?php
add_action( 'wp_enqueue_scripts', 'tsnc_child_enqueue_styles' );
function tsnc_child_enqueue_styles() {
	wp_enqueue_style( 'tsnc_child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array( 'tsnc_main-style' )
	);
}