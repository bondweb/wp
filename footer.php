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


<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    
				
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> | </span>
				
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'startbootstrap' ) ); ?>" class="imprint">
					<?php printf( __( 'Realizzazione sito by %s', 'startbootstrap' ), 'WordPress' ); ?>
				</a> |
                <?php
				if ( function_exists( 'the_privacy_policy_link' ) ) {
					the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
				}
				?>
			
  </div>
  <!-- /.container -->
</footer>

<?php wp_footer(); ?>

</body>

</html>
