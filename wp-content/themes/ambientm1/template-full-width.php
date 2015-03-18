<?php /* Template Name: Full width Template */ get_header(); ?>

	<!-- section -->
	<div role="main" id="main">
	
		<div class="hero">
			<div class="container">
				<div class="span10 offset1">
					<h2><?php the_title(); ?></h2>
					<h3><?php the_field( 'subtitle' ); ?></h3>
					<hr />
					<p><?php the_field( 'intro_copy' ); ?></p>
				</div>
			</div>
	    </div>
		<div class="content-panel">
			<div class="container">
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
						
						<h3><?php _e( 'Sorry, nothing to display.', 'ambientm1' ); ?></h3
						
					</article>
					<!-- /article -->
	
				<?php endif; ?>
			</div>
		</div>
		<div class="dr-bios">
			<div class="container">
				<h4><?php the_field( 'secondary_panel' ); ?></h4>
			</div>
		</div>
		<div class="team-bios">
			<div class="container">
				<h4><?php the_field( 'team_bio_header' ); ?></h4>
			</div>
		</div>	
	</div>
	
<?php get_footer(); ?>

<div id='woobox-root'></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//woobox.com/js/plugins/woo.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'woobox-sdk'));
add_shortcode( 'woobox', 'woobox_func' );</script>