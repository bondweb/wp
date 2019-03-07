
<div class="card mb-4">

  <a href="<?php the_permalink(); ?>">
    <?php
         if ( has_post_thumbnail() ) {
         the_post_thumbnail('', ['class' => 'card-img-top', 'title' => 'Feature image']);
}
?>
  		</a>
     <div class="card-body">
     <h2 class="card-title"><?php the_title(); ?></h2>
     
     
		<?php the_content(); ?>
	<!--.entry-content-->
    
            </div>
            <div class="card-footer text-muted">
              Posted on  <?php the_date();?>  by
              <a href="<?php the_author_link(); ?>"><?php the_author();?></a>
              
            </div>



</div>
