<?php /* Template Name: News Template */ get_header(); ?>
	
	<!-- section -->
	<div role="main" id="main" class="news">
	
		<div class="container content">
			<div class="row">
				<div class="span8">
					<?php get_template_part('loop-news'); ?>				
					<?php get_template_part('pagination'); ?>			
				</div>
				<div class="span4">
					<?php the_breadcrumb(); ?>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
