<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Startbootstrap
 * @since Startbootstrap 1.0
 */

get_header(); ?>


    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4"><?php bloginfo( 'description' ); ?></h1>

          <?php
      		if ( have_posts() ) :
              /* Start the Loop */
      			while ( have_posts() ) : the_post();

      					get_template_part( 'loop', get_post_type() );
						

      			endwhile;



      		endif;
      		?>
            <?php if (show_posts_nav()) : ?>
              <div class='navigation'>
	            <span class='older'><?php next_posts_link('&laquo; Older Entries'); ?></span>
	            <span class='newer'><?php previous_posts_link('Newer Entries &raquo;'); ?></span>
             </div>
           <?php endif; ?>

        </div>

  <?php get_sidebar(); ?>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php get_footer(); ?>
