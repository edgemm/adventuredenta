<?php /* Template Name: Gallery Template */ get_header(); ?>
	
	<!-- section -->
		<div class="container content">
			<div class="row">
				<div class="span12">
					<h2><?php the_title(); ?></h2>
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php get_template_part('loop-gallery'); ?>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>