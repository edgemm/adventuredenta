<?php get_header('inner'); ?>
	
	<!-- section -->
	<div role="main" id="main" class="single blog">
	
		<div class="container content">
			<div class="row">
				<div class="span8">
	
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post details -->
						<div class="details">
							<time><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?> | </time>						  
							<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'ambientm1' ), __( '1 Comment', 'ambientm1' ), __( '% Comments', 'ambientm1' )); ?></span>
						</div>
						<!-- /post details -->
					
						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->
						
						<?php the_content(); // Dynamic Content ?>
						
						<?php the_tags( __( 'Tags: ', 'ambientm1' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
						
						<p><?php _e( 'Categorised in: ', 'ambientm1' ); the_category(', '); // Separated by commas ?></p>
												
						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
						
						<?php comments_template(); ?>
						
					</article>
					<!-- /article -->
					
				<?php endwhile; ?>
				
				<?php else: ?>
				
					<!-- article -->
					<article>
						
						<h2><?php _e( 'Sorry, nothing to display.', 'ambientm1' ); ?></h2>
						
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