<?php get_header(); ?>
	
	<!-- section -->
	<div role="main" id="main" class="regular">
	
		<div class="container content">
			<div class="row">
				<div class="span8">
	
					<h2><?php _e( 'Posts for', 'ambientm1' ); the_category(); ?></h2>
				
					<?php get_template_part('loop'); ?>
					
					<?php get_template_part('pagination'); ?>

				</div>
				<div class="span4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>