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

          <h1 class="my-4">
          </h1>

          <?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/page/content', 'page' ); ?>

					

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>


        </div>
        
        
        
        
        
        
        

  <?php get_sidebar(); ?>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php get_footer(); ?>
