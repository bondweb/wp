
<div class="card mb-4">

  <a href="<?php the_permalink(); ?>">
    <?php
         if ( has_post_thumbnail() ) {
         the_post_thumbnail('', ['class' => 'card-img-top', 'title' => 'Feature image']);
}
?>
  		</a>
     <div class="card-body">
     <h2 class="card-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'startbootstrap' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h2>
     
     
		<?php the_excerpt(); ?>
	<!--.entry-content-->
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on  <?php the_date();?>  by
              <a href="<?php the_author_link(); ?>"><?php the_author();?></a>
            </div>



</div>
