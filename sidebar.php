<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Startbootstrap
 * @since Startbootstrap 1.0
 */
?>
<!-- Sidebar Widgets Column -->
<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<div class="col-md-4" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- .sidebar .widget-area -->
<?php endif; ?>
</div>
