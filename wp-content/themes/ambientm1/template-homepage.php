<?php /* Template Name: Homepage Template */ get_header(); ?>
	
	<!-- section -->
	<div role="main" id="main">
		<div class="panel1">
			<div class="container">
				<div class="row">
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
				</div>
				<div class="row alt">
					<div class="span4 peds">
						<a href="/pediatrics">Pediatrics</a>
					</div>
					<div class="span4 teens">
						<a href="/teenagers">Teens</a>
					</div>
					<div class="span4 ortho">
						<a href="/orthodontics">Orthodontics</a>
					</div>
				</div>
				<div class="row borders">
					<div class="span4 border1"></div>
					<div class="span4 border2"></div>
					<div class="span4 border3"></div>
				</div>
				<div class="row popups">
					<div class="span4 peds-popup">
						<img src="<?php the_field( 'pediatrics_card_image' ); ?>" alt="Pediatrics pop-up image" />
						<p><?php the_field( 'pediatrics_card_copy' ); ?></p>
					</div>

					<div class="span4 teens-popup">
						<img src="<?php the_field( 'teens_card_image' ); ?>" alt="Teens pop-up image" />
						<p><?php the_field( 'teens_card_copy' ); ?></p>
					</div>

					<div class="span4 ortho-popup">
						<img src="<?php the_field( 'orthodontics_card_image' ); ?>" alt="Orthodontics pop-up image" />
						<p><?php the_field( 'orthodontics_card_copy' ); ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="panel2">
			<div class="container">
				
			</div>
		</div>	
	</div>
	<?php get_footer(); ?>
