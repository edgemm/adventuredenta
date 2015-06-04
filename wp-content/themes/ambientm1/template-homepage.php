<?php /* Template Name: Homepage Template */ get_header(); ?>
	
	<!-- section -->
	<div role="main" id="main">
		<div class="panel1">
			<div class="container container-slides">
				<?php if( is_home() || is_front_page() ) { ?>
				<div class="row ad-slides">
				<?php // get from home slides post type with SlidesJS plugin
				// WP_Query arguments
				
				$slide_args = array (
					'post_type'		=> 'home_slider',
					'posts_per_page'	=> -1,
					'meta_key'		=> 'home_slide_order',
					'orderby'		=> 'meta_value_num',
					'order'			=> 'ASC'
				);
				
				// The Query
				$slides = new WP_Query( $slide_args );
				
				// The Loop
				if ( $slides->have_posts() ) {
					while ( $slides->have_posts() ) {
						$slides->the_post();

						$slide_thmb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $slides->ID ), 'full' );
						$slide_thmb_alttitle = trim( strip_tags( get_the_title() ) );
				?>
					<div class="ad-slide">
					    <img class="ad-slide-img" src="<?php echo $slide_thmb_url['0']; ?>" alt="<?php echo $slide_thmb_alttitle; ?>" />
					</div>
				<?php
					}
				}
				
				// Restore original Post Data
				wp_reset_postdata(); ?>
				</div>
				<?php } // end check for home page ?>
				<!--<div class="row">
					<div class="span6 intro">
						<h2><?php the_field( 'homepage_title' ); ?></h2>
						<hr />
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						
							<?php the_content(); ?>
						
						<?php endwhile; ?>
			
						<?php endif; ?>
					</div>
					<div class="span6">
						<span class="flosser">Flosser!</span>
					</div>
				</div>-->
			</div>
		</div>
		<div class="panel2">
			<div class="container">
				<div class="row">
					<div class="span4 peds">
						<a href="/pediatrics">Pediatrics</a>
						<div class="span4 border1"></div>
						<p><?php the_field( 'pediatrics_card_copy' ); ?></p>
					</div>
					<div class="span4 teens">
						<a href="/teenagers">Teens</a>
						<div class="span4 border2"></div>
						<p><?php the_field( 'teens_card_copy' ); ?></p>
					</div>
					<div class="span4 ortho">
						<a href="/orthodontics">Orthodontics</a>
						<div class="span4 border3"></div>
						<p><?php the_field( 'orthodontics_card_copy' ); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="panel3">
			<div class="container">
				<div class="row">
					<div class="span6">
						<div class="video-container">
							<iframe width="460" height="259" src="https://www.youtube.com/embed/Tzf21a2tgVU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="span6">
						<h2><?php the_field( 'homepage_title' ); ?></h2>
						<hr />
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						
							<?php the_content(); ?>
						
						<?php endwhile; ?>
			
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
