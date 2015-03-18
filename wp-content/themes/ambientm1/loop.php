<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<!-- post title -->
		<h3>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h3>
		<!-- /post title -->
		
		<!-- post details -->
		<time><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></time>
		<!-- /post details -->

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" class="blog-img" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
		
		<?php ambientm1wp_excerpt('ambientm1wp_index'); // Build your custom callback length in functions.php ?>
		
<!-- 		<?php edit_post_link(); ?> -->
		<hr />
	</article>
	<!-- /article -->
	
<?php endwhile; ?>

<div class="nav-previous alignleft"><?php next_posts_link( '&laquo; Older' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer &raquo;' ); ?></div>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'ambientm1' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>