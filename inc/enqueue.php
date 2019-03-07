<?php
/**
 * Understrap enqueue scripts
 *
 * @package startbootstrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**********************************************************************************
	startbootstrap_script - enqueue style & scripts
**********************************************************************************/

function startbootstrap_scripts() {

  // Load boostrap stylesheet.
	wp_enqueue_style( 'blog-home', get_template_directory_uri() . '/assets/css/blog-home.css', array(), '1.0.0' );
  	wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap/css/bootstrap.min.css', array(), '4.1.1' );
  // Theme stylesheet.
	wp_enqueue_style( 'startbootstrap-style', get_stylesheet_uri() );

  // Load scripts.
	wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/assets/jquery/jquery.min.js', array(), '3.3.1' );
  	wp_enqueue_script( 'bootstrap.bundle.min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '3.3.1' );
}
add_action( 'wp_enqueue_scripts', 'startbootstrap_scripts' );

