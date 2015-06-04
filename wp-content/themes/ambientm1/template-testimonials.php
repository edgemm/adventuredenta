<?php /* Template Name: Testimonial Page Template */ get_header(); ?>
	
	<!-- section -->
	<div role="main" id="main">
	
		<div class="hero">
			<div class="container">
				<div class="span10 offset1">
					<h2><?php the_title(); ?></h2>
					<h3><?php the_field( 'subtitle' ); ?></h3>
					<hr />
					<p><?php the_field( 'intro_copy' ); ?></p>
				</div>
			</div>
	    </div>
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
		<div class="dr-bios" id="meet-our-doctors">
			<div class="container">
				<h4><?php the_field( 'doctor_bio_header' ); ?></h4>
				<?php get_template_part('loop-drs'); ?>
			</div>
		</div>
		<div class="team-bios" id="meet-the-crew">
			<div class="container">
				<h4><?php the_field( 'team_bio_header' ); ?></h4>
				<?php get_template_part('loop-team'); ?>
			</div>
		</div>
		<div class="meet-flosser" id="meet-flosser">
			<div class="container">
				<span>Flosser</span>
				<div class="row">
					<div class="span7 offset1">
						<h4><?php the_field( 'flosser_header' ); ?></h4>
						<p><?php the_field( 'flosser_copy' ); ?></p>
					</div>
				</div>
			</div>
		</div>	
	<?php get_footer(); ?>
