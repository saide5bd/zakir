<?php get_header(); ?>

<section class="two-column row no-max pad">
	<div class="small-12 columns">
		<div class="row">

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<div class="small-12 medium-4 columns">
				<div class="secondary">
					<h1><?php the_title(); ?></h1>
					<p><?php the_field('description'); ?></p>

					<hr>

					<p class="prev"><?php previous_post_link(); ?></p>
					<p class="next"><?php next_post_link(); ?></p>
				</div>
			</div>

			<div class="small-12 medium-7 medium-offset-1 end columns">
				<div class="primary">
					<?php the_field('images'); ?>
				</div>
			</div>

			<?php endwhile; endif; ?>

		</div>
	</div>

</section>


<?php get_footer(); ?>