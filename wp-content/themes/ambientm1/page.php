<?php get_header(); ?>
	
	<!-- section -->
	<div role="main" id="main" class="regular">
	
		<div class="container content">
			<div class="row">
				<div class="span8">
	
					<h2><?php the_title(); ?></h2>
		
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<?php the_content(); ?>
						
					</article>
					<!-- /article -->
			
					<?php endwhile; ?>
					
					<?php else: ?>
					
						<!-- article -->
						<article>
							
							<h3><?php _e( 'Sorry, nothing to display.', 'ambientm1' ); ?></h3>
							
						</article>
						<!-- /article -->
		
					<?php endif; ?>
				</div>
				<div class="span4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>