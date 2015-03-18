<?php get_header(); ?>
	
	<!-- section -->
	<div role="main" id="main" class="regular">
	
		<div class="container content">
			<div class="row">
				<div class="span8">
	
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<h2><?php _e( 'Page not found', 'ambientm1' ); ?></h2>
						<h3>
							<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'ambientm1' ); ?></a>
						</h3>
						
					</article>
					<!-- /article -->
				</div>
				<div class="span4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>