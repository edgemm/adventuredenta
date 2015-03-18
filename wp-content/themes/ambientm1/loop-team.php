<div class="row">
<?php
$counter = 1;
$args= array(
	'post_type' => 'loop-team',
	'order' => 'ASC',
	'posts_per_page' => '9999'
);
query_posts($args);
?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<?php if( ($counter % 4) == 1 ) : ?>
			</div>
				<div class="row">
			<?php endif; ?>
			
				<div class="span3">
					<div class="bio-container">
						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : ?>
							<div class="bio-photo">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif; ?>
						<!-- /post thumbnail -->
							<h5><?php the_title(); ?></h5>
							<h6><?php the_field( "team_job_title" ); ?></h6>
					</div>
				</div>
	
			<?php $counter++;
				endwhile;
		?>
	
		<?php endif; wp_reset_query(); ?>
				</div>
			</div>