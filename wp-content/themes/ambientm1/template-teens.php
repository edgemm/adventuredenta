<?php /* Template Name: Teens Template */ get_header(); ?>

	<!-- section -->
	<div role="main" id="main">
	
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="span6 offset6">
						<h2><?php the_field( 'teens_page_title' ); ?></h2>
						<h3><?php the_field( 'teens_page_subtitle' ); ?></h3>
						<p><?php the_field( 'teens_page_panel_1_copy' ); ?></p>
							<?php
								if(get_field('teens_button_1_link'))
								{ ?>
									<a class="blue-button" href="<?php the_field( 'teens_button_1_link' ); ?>"><?php the_field( 'teens_button_1_text' ); ?></a>
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
						<h3><?php the_field( 'teens_page_panel_2_title' ); ?></h3>
						<p><?php the_field( 'teens_page_panel_2_copy' ); ?></p>
							<?php
								if(get_field('teens_button_2_link'))
								{ ?>
									<a class="blue-button" href="<?php the_field( 'teens_button_2_link' ); ?>"><?php the_field( 'teens_button_2_text' ); ?></a>
								<?php }
							?>
					</div>
				</div>
			</div>
		</div>
		<div class="content-panel2">
			<div class="container">
				<div class="row">
					<div class="span12">
						<h3><?php the_field( 'teens_page_panel_3_title' ); ?></h3>
						<p><?php the_field( 'teens_page_panel_3_copy' ); ?></p>
							<?php
								if(get_field('teens_button_3_link'))
								{ ?>
									<a class="aqua-button" href="<?php the_field( 'teens_button_3_link' ); ?>"><?php the_field( 'teens_button_3_text' ); ?></a>
								<?php }
							?>
					</div>
				</div>
			</div>
		</div>
<!--
		<div class="content-panel5">
			<div class="container">
				<div class="row">
					<h3><?php the_field( 'teens_page_panel_4_title' ); ?></h3>
					<p><?php the_field( 'teens_page_panel_4_copy' ); ?></p>
				</div>
				<div class="row before-after">
					<?php
						if(get_field('teens_page_panel_4_container1_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'teens_page_panel_4_container1_title' ); ?></h4>
								<p><?php the_field( 'teens_page_panel_4_container1_copy' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('teens_page_panel_4_container2_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'teens_page_panel_4_container2_title' ); ?></h4>
								<p><?php the_field( 'teens_page_panel_4_container2_copy' ); ?></p>
							</div>
						<?php }
					?>					<?php
						if(get_field('teens_page_panel_4_container3_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'teens_page_panel_4_container3_title' ); ?></h4>
								<p><?php the_field( 'teens_page_panel_4_container3_copy' ); ?></p>
							</div>
						<?php }
					?>
				</div>
				<div class="row before-after">
					<?php
						if(get_field('teens_page_panel_4_container4_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'teens_page_panel_4_container4_title' ); ?></h4>
								<p><?php the_field( 'teens_page_panel_4_container4_copy' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('teens_page_panel_4_container5_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'teens_page_panel_4_container5_title' ); ?></h4>
								<p><?php the_field( 'teens_page_panel_4_container5_copy' ); ?></p>
							</div>
						<?php }
					?>					<?php
						if(get_field('teens_page_panel_4_container6_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'teens_page_panel_4_container6_title' ); ?></h4>
								<p><?php the_field( 'teens_page_panel_4_container6_copy' ); ?></p>
							</div>
						<?php }
					?>
				</div>
			</div>
		</div>
		<div class="content-panel6">
			<div class="container">
				<div class="row">
					<h3><?php the_field( 'teens_page_panel_5_title' ); ?></h3>
				</div>
				<div class="row before-after">
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu1" data-toggle="dropdown">
								<?php the_field( 'teens_page_panel5_question1' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								<li role="presentation"><?php the_field( 'teens_page_panel5_answer1' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu2" data-toggle="dropdown">
								<?php the_field( 'teens_page_panel5_question2' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
								<li role="presentation"><?php the_field( 'teens_page_panel5_answer2' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row before-after">
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu3" data-toggle="dropdown">
								<?php the_field( 'teens_page_panel5_question3' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
								<li role="presentation"><?php the_field( 'teens_page_panel5_answer3' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu4" data-toggle="dropdown">
								<?php the_field( 'teens_page_panel5_question4' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
								<li role="presentation"><?php the_field( 'teens_page_panel5_answer4' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row before-after">
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu5" data-toggle="dropdown">
								<?php the_field( 'teens_page_panel5_question5' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu5">
								<li role="presentation"><?php the_field( 'teens_page_panel5_answer5' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu6" data-toggle="dropdown">
								<?php the_field( 'teens_page_panel5_question6' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu6">
								<li role="presentation"><?php the_field( 'teens_page_panel5_answer6' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row before-after">
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu7" data-toggle="dropdown">
								<?php the_field( 'teens_page_panel5_question7' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu7">
								<li role="presentation"><?php the_field( 'teens_page_panel5_answer7' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu8" data-toggle="dropdown">
								<?php the_field( 'teens_page_panel5_question8' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu8">
								<li role="presentation"><?php the_field( 'teens_page_panel5_answer8' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row before-after">
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu9" data-toggle="dropdown">
								<?php the_field( 'teens_page_panel5_question9' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu9">
								<li role="presentation"><?php the_field( 'teens_page_panel5_answer9' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu10" data-toggle="dropdown">
								<?php the_field( 'teens_page_panel5_question10' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu10">
								<li role="presentation"><?php the_field( 'teens_page_panel5_answer10' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>	
-->
	</div>
<?php get_footer(); ?>
