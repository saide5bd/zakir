<?php 


/*
Template Name: Left sidebar
*/


?>

<?php get_header(); ?>


<section class="two-column row no-max pad">
      <div class="small-12 columns">
        <div class="row">
          <!-- Primary Column -->
          <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
            <div class="primary">

  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="post">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>        
    </div>

    <?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

        </div>
      </div>


      <!-- Secodary Colume -->
      <div class="small-12 medium-4 medium-pull-8 columns">
        <div class="secondary">
          <h2 class="module-heading">Sidebar</h2>
        </div>
      </div>

    </div>
  </div>
</section>



<?php get_footer(); ?>