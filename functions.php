<?php
function groovy_enqueue_scripts() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'groovy-magic', get_stylesheet_directory_uri() . '/js/groovy-magic.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'groovy_enqueue_scripts' );

// Create current year shortcode function
function groovy_get_current_year() {
	// Return current year in a shortcode
	add_shortcode( 'groovy_current_year', function( $atts = null, $content = null, $shortcode_tag = 'groovy_current_year' ) {
		return date("Y");
	} );
}

add_action( 'init', 'groovy_get_current_year' );