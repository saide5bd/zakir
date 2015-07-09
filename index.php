<?php get_header(); ?>


<section class="row">
  <div class="small-12 columns text-center">

  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="leader">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>        
    </div>
	<h2> This is small changes</h2>
    <?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

  </div>
</section>



<?php get_footer(); ?>