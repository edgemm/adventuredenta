<?php /* Template Name: Pediatrics Template */ get_header(); ?>

	<!-- section -->
	<div role="main" id="main">
	
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="span6 holder">
						<span>peds Girl</span>
					</div>
					<div class="span6">
						<h2><?php the_field( 'peds_page_title' ); ?></h2>
						<h3><?php the_field( 'peds_page_subtitle' ); ?></h3>
						<p><?php the_field( 'peds_page_panel_1_copy' ); ?></p>
							<?php
								if(get_field('peds_panel_1_button_link'))
								{ ?>
									<a class="red-button" href="<?php the_field( 'peds_panel_1_button_link' ); ?>"><?php the_field( 'peds_panel_1_button_text' ); ?></a>
								<?php }
							?>
					</div>
				</div>
			</div>
	    </div>
		<div class="content-panel">
			<div class="container">
				<div class="row">
					<div class="span6">
						<a href="<?php the_field( 'video_url_link' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'peds_page_panel_2_video' ); ?>" alt="Video" /></a>
					</div>
					<div class="span6">
						<h3><?php the_field( 'peds_page_panel_2_title' ); ?></h3>
						<p><?php the_field( 'peds_page_panel_2_copy' ); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="content-panel2">
			<div class="container">
				<div class="row">
					<div class="span6">
						<h3><?php the_field( 'peds_page_panel_3_title' ); ?></h3>
						<p><?php the_field( 'peds_page_panel_3_copy' ); ?></p>
							<?php
								if(get_field('peds_panel_3_button_link'))
								{ ?>
									<a class="blue-button" href="<?php the_field( 'peds_panel_3_button_link' ); ?>"><?php the_field( 'peds_panel_3_button_text' ); ?></a>
								<?php }
							?>
					</div>
				</div>
			</div>
		</div>
		<div class="content-panel4">
			<div class="container">
				<div class="row">
					<div class="span6">
						<h3><?php the_field( 'peds_page_panel_4_title' ); ?></h3>
						<p><?php the_field( 'peds_page_panel_4_copy' ); ?></p>
							<?php
								if(get_field('peds_panel_4_button_link'))
								{ ?>
									<a class="aqua-button" href="<?php the_field( 'peds_panel_4_button_link' ); ?>"><?php the_field( 'peds_panel_4_button_text' ); ?></a>
								<?php }
							?>
					</div>
					<div class="span6 holder">
						<span>Flosser</span>
					</div>
				</div>
			</div>
		</div>
		<div class="content-panel5">
			<div class="container">
				<div class="row">
					<h3><?php the_field( 'peds_page_panel_5_title' ); ?></h3>
					<p><?php the_field( 'peds_page_panel_5_copy' ); ?></p>
				</div>
				<div class="row before-after">
					<?php
						if(get_field('peds_page_panel_5_container1_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'peds_page_panel_5_container1_title' ); ?></h4>
								<p><?php the_field( 'peds_page_panel_5_container1_copy' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('peds_page_panel_5_container2_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'peds_page_panel_5_container2_title' ); ?></h4>
								<p><?php the_field( 'peds_page_panel_5_container2_copy' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('peds_page_panel_5_container3_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'peds_page_panel_5_container3_title' ); ?></h4>
								<p><?php the_field( 'peds_page_panel_5_container3_copy' ); ?></p>
							</div>
						<?php }
					?>
				</div>
				<div class="row before-after">
					<?php
						if(get_field('peds_page_panel_5_container4_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'peds_page_panel_5_container4_title' ); ?></h4>
								<p><?php the_field( 'peds_page_panel_5_container4_copy' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_6_container5_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'peds_page_panel_5_container5_title' ); ?></h4>
								<p><?php the_field( 'peds_page_panel_5_container5_copy' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('peds_page_panel_5_container6_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'peds_page_panel_5_container6_title' ); ?></h4>
								<p><?php the_field( 'peds_page_panel_5_container6_copy' ); ?></p>
							</div>
						<?php }
					?>
				</div>
			</div>
		</div>
		<div class="content-panel6">
			<div class="container">
				<div class="row">
					<h3><?php the_field( 'peds_page_panel_6_title' ); ?></h3>
				</div>
				<div class="row before-after">
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu1" data-toggle="dropdown">
								<?php the_field( 'peds_page_panel6_question1' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								<li role="presentation"><?php the_field( 'peds_page_panel6_answer1' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu2" data-toggle="dropdown">
								<?php the_field( 'peds_page_panel6_question2' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
								<li role="presentation"><?php the_field( 'peds_page_panel6_answer2' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row before-after">
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu3" data-toggle="dropdown">
								<?php the_field( 'peds_page_panel6_question3' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
								<li role="presentation"><?php the_field( 'peds_page_panel6_answer3' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu4" data-toggle="dropdown">
								<?php the_field( 'peds_page_panel6_question4' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
								<li role="presentation"><?php the_field( 'peds_page_panel6_answer4' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row before-after">
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu5" data-toggle="dropdown">
								<?php the_field( 'peds_page_panel6_question5' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu5">
								<li role="presentation"><?php the_field( 'peds_page_panel6_answer5' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu6" data-toggle="dropdown">
								<?php the_field( 'peds_page_panel6_question6' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu6">
								<li role="presentation"><?php the_field( 'peds_page_panel6_answer6' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row before-after">
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu7" data-toggle="dropdown">
								<?php the_field( 'peds_page_panel6_question7' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu7">
								<li role="presentation"><?php the_field( 'peds_page_panel6_answer7' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu8" data-toggle="dropdown">
								<?php the_field( 'peds_page_panel6_question8' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu8">
								<li role="presentation"><?php the_field( 'peds_page_panel6_answer8' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row before-after">
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu9" data-toggle="dropdown">
								<?php the_field( 'peds_page_panel6_question9' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu9">
								<li role="presentation"><?php the_field( 'peds_page_panel6_answer9' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu10" data-toggle="dropdown">
								<?php the_field( 'peds_page_panel6_question10' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu10">
								<li role="presentation"><?php the_field( 'peds_page_panel6_answer10' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
<?php get_footer(); ?>
