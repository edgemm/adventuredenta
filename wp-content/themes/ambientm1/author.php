<?php get_header(); ?>
	
	<!-- section -->
	<div role="main" id="main" class="regular">
	
		<div class="container content">
			<div class="row">
				<div class="span8">
	
				<?php if (have_posts()): the_post(); ?>
				
					<h2><?php _e( 'Author Archives for ', 'ambientm1' ); echo get_the_author(); ?></h2>
			
				<?php if ( get_the_author_meta('description')) : ?>
				
				<?php echo get_avatar(get_the_author_meta('user_email')); ?>
				
					<h3><?php e_( 'About', 'ambientm1' ); echo get_the_author() ; ?></h3>
				
				<?php the_author_meta('description'); ?>
				
				<?php endif; ?>
				
				<?php rewind_posts(); while (have_posts()) : the_post(); ?>
				
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->
						
						<!-- post title -->
						<h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h3>
						<!-- /Post title -->
						
						<!-- post details -->
						<time><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?> | </time>
						<span class="author"><?php _e( 'Published by', 'ambientm1' ); ?> <?php the_author_posts_link(); ?> | </span>
						<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'ambientm1' ), __( '1 Comment', 'ambientm1' ), __( '% Comments', 'ambientm1' )); ?></span>
						<!-- /post details -->
						
						<?php ambientm1wp_excerpt('ambientm1wp_index'); // Build your custom callback length in functions.php ?>
						
						<br class="clear">
						
						<?php edit_post_link(); ?>
						
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
				
				<?php get_template_part('pagination'); ?>
	
				</div>
				<div class="span4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
