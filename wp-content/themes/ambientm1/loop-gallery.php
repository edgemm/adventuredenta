<?php
$postcount=0;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args= array(
	'post_type' => 'video-gallery',
	'paged' => $paged
);
query_posts($args);
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php if( ($postcount % 3) == 0 ) $post_class = 'span3';
        else $post_class = 'span3 offset1'; ?>
<div class="<?php echo $post_class; ?>">	
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_field( 'video_link' ); ?>"
				class="gallery-thumb" rel="prettyPhoto">
					<?php the_post_thumbnail(); ?>
				</a>
				<p><?php the_title(); ?></p>
		<?php endif; ?>
		<!-- /post thumbnail -->
	</article>
	<!-- /article -->
</div>	
<?php 
        $postcount++;
    endwhile; 
?>

	<div class="span12">
		<div class="nav-previous alignleft"><?php next_posts_link( '&laquo; Older' ); ?></div>
		<div class="nav-next alignright"><?php previous_posts_link( 'Newer &raquo;' ); ?></div>
	</div>
<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'ambientm1' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>


