<?php
/**********************************************************************************
startbootstrap_register_menus - register menus
**********************************************************************************/
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'startbootstrap' ),

	) );
	
	// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

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


/**********************************************************************************
	startbootstrap_support - adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
**********************************************************************************/



function startbootstrap_support() {
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
	
	// Set up the WordPress core custom background feature.
	 add_theme_support( 'custom-background', apply_filters( 'understrap_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	
	}

	add_action( 'after_setup_theme', 'startbootstrap_support' );

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




?>



