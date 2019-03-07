<?php
/**
 * Theme basic setup.
 *
 * @package startbootstrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


if ( ! function_exists( 'startbootstrap_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */


if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */

/**********************************************************************************
	startbootstrap_support - adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
**********************************************************************************/

function startbootstrap_setup() {
	 
	 /* post formats */
	  add_theme_support( 'post-formats', array( 'aside', 'quote' ) );

	  /* post thumbnails */
	  add_theme_support( 'post-thumbnails', array( 'post', 'page', 'project' ) );

	  /* HTML5 */
	  add_theme_support( 'html5' );
	  
	/* automatic feed links */
	  add_theme_support( 'automatic-feed-links' );
	
	/* automatic custom logo */
     add_theme_support( 'custom-logo' );
	 
	 /**startbootstrap_register_menus - register menus*/
	 
	 register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'startbootstrap' ),) );
	 
	 
	// Set up the WordPress core custom background feature.
	 add_theme_support( 'custom-background', apply_filters( 'understrap_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	
	}
endif; // startbootstrap_setup
add_action( 'after_setup_theme', 'startbootstrap_setup' );

	if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 300, 300 ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 750, 300, true); //300 pixels wide (and unlimited height)
}


function startbootstrap_custom_logo_setup() {
    $defaults = array(
        'height'      => 25,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'startbootstrap_custom_logo_setup' );


/**********************************************************************************
	next prev post
**********************************************************************************/
if ( ! function_exists ( 'startbootstrap_post_nav' ) ) {
	function startbootstrap_post_nav() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous ) {
			return;
		}
		?>
		<nav class="container navigation post-navigation">
			<h2 class="sr-only"><?php esc_html_e( 'Post navigation', 'startbootstrap' ); ?></h2>
			<div class="row nav-links justify-content-between">
				<?php
				if ( get_previous_post_link() ) {
					previous_post_link( '<span class="nav-previous">%link</span>', _x( '<i class="fa fa-angle-left"></i>&nbsp;%title', 'Previous post link', 'startbootstrap' ) );
				}
				if ( get_next_post_link() ) {
					next_post_link( '<span class="nav-next">%link</span>', _x( '%title&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'startbootstrap' ) );
				}
				?>
			</div><!-- .nav-links -->
		</nav><!-- .navigation -->
		<?php
	}
}


/**
 * If more than one page exists, return TRUE.
 */
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
	}