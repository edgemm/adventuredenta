<?php get_header(); ?>
	
	<!-- section -->
	<div role="main" id="main" class="regular">
	
		<div class="container content">
			<div class="row">
				<div class="span8">
	
					<h2><?php echo sprintf( __( '%s Search Results for ', 'ambientm1' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>
					
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