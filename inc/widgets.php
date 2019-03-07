<?php
/**
 * Declaring widgets
 *
 * @package startbootstrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**********************************************************************************
	startbootstrap_widgets_init - register widgets
**********************************************************************************/
function startbootstrap_widgets_init() {
    	register_sidebar( array(
    		'name'          => __( 'Sidebar', 'startbootstrap' ),
    		'id'            => 'sidebar-1',
    		'description'   => __( 'Add widgets here to appear in your sidebar.', 'startbootstrap' ),
    		'before_widget' => '<div class="card my-4">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="card-header">',
    		'after_title'   => '</h5>',

    	) );
}
  add_action( 'widgets_init', 'startbootstrap_widgets_init' );
