<?php /* Template Name: Testimonial Page Template */ get_header(); ?>
	
	<!-- section -->
	<div role="main" id="main">

		<div class="content-panel" id="testimonials">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>
		<?php else: ?>

			<div class="container">
		
				<!-- article -->
				<article>
	
					<h3><?php _e( 'Sorry, nothing to display.', 'ambientm1' ); ?></h3
	
				</article>
				<!-- /article -->

			</div>

		<?php endif; ?>

		</div>
	<?php get_footer(); ?>
