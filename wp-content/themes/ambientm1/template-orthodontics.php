<?php /* Template Name: Orthodontics Template */ get_header(); ?>

	<!-- section -->
	<div role="main" id="main">
	
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="span6 holder">
						<span>Ortho Girl</span>
					</div>
					<div class="span6">
						<h2><?php the_field( 'ortho_page_title' ); ?></h2>
						<h3><?php the_field( 'ortho_page_subtitle' ); ?></h3>
						<p><?php the_field( 'ortho_intro_copy' ); ?></p>
							<?php
								if(get_field('ortho_panel_1_button_link'))
								{ ?>
									<a class="red-button" href="<?php the_field( 'ortho_panel_1_button_link' ); ?>"><?php the_field( 'ortho_panel1_button_text' ); ?></a>
								<?php }
							?>
					</div>
				</div>
			</div>
	    </div>
<!--
		<div class="content-panel">
			<div class="container">
				<div class="row">
					<div class="span6">
						<a href="<?php the_field( 'ortho_video_url_link' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_2_video' ); ?>" alt="Video" /></a>
					</div>
					<div class="span6">
						<h3><?php the_field( 'ortho_page_panel_2_title' ); ?></h3>
						<p><?php the_field( 'ortho_page_panel_2_copy' ); ?></p>
					</div>
				</div>
			</div>
		</div>
-->
		<div class="content-panel2">
			<div class="container">
				<div class="row">
					<div class="span6">
						<h3><?php the_field( 'ortho_page_panel_3_title' ); ?></h3>
						<p><?php the_field( 'ortho_page_panel_3_copy' ); ?></p>
							<?php
								if(get_field('ortho_panel_3_button_link'))
								{ ?>
									<a class="blue-button" href="<?php the_field( 'ortho_panel_3_button_link' ); ?>"><?php the_field( 'ortho_panel_3_button_text' ); ?></a>
								<?php }
							?>
					</div>
					<div class="span6 holder">
						<span>Flosser</span>
					</div>
				</div>
			</div>
		</div>
		<div class="content-panel3">
			<div class="container">
				<div class="row">
					<h3><?php the_field( 'ortho_page_panel_4_title' ); ?></h3>
					<p><?php the_field( 'ortho_page_panel_4_copy' ); ?></p>
				</div>
				<div class="row before-after">
					<?php
						if(get_field('ortho_page_panel_5_before1'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_before1' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_before1' ); ?>" alt="Before photo" /></a>
								<p><?php the_field( 'photo_1_text' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_5_after1'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_after1' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_after1' ); ?>" alt="After photo" /></a>
								<p><?php the_field( 'photo_2_text' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_5_before2'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_before2' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_before2' ); ?>" alt="Before photo" /></a>
								<p><?php the_field( 'photo_3_text' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_5_after2'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_after2' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_after2' ); ?>" alt="After photo" /></a>
								<p><?php the_field( 'photo_4_text' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_5_before3'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_before3' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_before3' ); ?>" alt="Before photo" /></a>
								<p><?php the_field( 'photo_5_text' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_5_after3'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_after3' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_after3' ); ?>" alt="After photo" /></a>
								<p><?php the_field( 'photo_6_text' ); ?></p>
							</div>
						<?php }
					?>

					<?php
						if(get_field('ortho_page_panel_5_before4'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_before4' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_before4' ); ?>" alt="Before photo" /></a>
								<p><?php the_field( 'photo_7_text' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_5_after4'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_after4' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_after4' ); ?>" alt="After photo" /></a>
								<p><?php the_field( 'photo_8_text' ); ?></p>
							</div>
						<?php }
					?>

					<?php
						if(get_field('ortho_page_panel_5_before5'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_before5' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_before5' ); ?>" alt="Before photo" /></a>
								<p><?php the_field( 'photo_9_text' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_5_after5'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_after5' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_after5' ); ?>" alt="After photo" /></a>
								<p><?php the_field( 'photo_10_text' ); ?></p>
							</div>
						<?php }
					?>

					<?php
						if(get_field('ortho_page_panel_5_before6'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_before6' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_before6' ); ?>" alt="Before photo" /></a>
								<p><?php the_field( 'photo_11_text' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_5_after6'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_after6' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_after6' ); ?>" alt="After photo" /></a>
								<p><?php the_field( 'photo_12_text' ); ?></p>
							</div>
						<?php }
					?>
					
					<?php
						if(get_field('ortho_page_panel_5_before7'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_before7' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_before7' ); ?>" alt="Before photo" /></a>
								<p><?php the_field( 'photo_13_text' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_5_after7'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_after7' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_after7' ); ?>" alt="After photo" /></a>
								<p><?php the_field( 'photo_14_text' ); ?></p>
							</div>
						<?php }
					?>
					
					<?php
						if(get_field('ortho_page_panel_5_before8'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_before8' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_before8' ); ?>" alt="Before photo" /></a>
								<p><?php the_field( 'photo_15_text' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_5_after8'))
						{ ?>
							<div class="span3">
								<a href="<?php the_field( 'ortho_page_panel_5_after8' ); ?>" rel="prettyPhoto"><img src="<?php the_field( 'ortho_page_panel_5_after8' ); ?>" alt="After photo" /></a>
								<p><?php the_field( 'photo_16_text' ); ?></p>
							</div>
						<?php }
					?>
				</div>
			</div>
		</div>
		<div class="content-panel4">
			<div class="container">
				<div class="row">
					<div class="span12">
						<h3><?php the_field( 'ortho_page_panel_6_title' ); ?></h3>
						<p><?php the_field( 'ortho_page_panel_6_copy' ); ?></p>
							<?php
								if(get_field('ortho_panel_5_button_link'))
								{ ?>
									<a class="red-button" href="<?php the_field( 'ortho_panel_5_button_link' ); ?>"><?php the_field( 'ortho_panel_5_button_text' ); ?></a>
								<?php }
							?>
					</div>
				</div>
			</div>
		</div>
		<div class="content-panel5">
			<div class="container">
				<div class="row">
					<h3><?php the_field( 'ortho_page_panel_7_title' ); ?></h3>
					<p><?php the_field( 'ortho_page_panel_7_copy' ); ?></p>
				</div>
				<div class="row before-after">
					<?php
						if(get_field('ortho_page_panel_6_container1_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'ortho_page_panel_6_container1_title' ); ?></h4>
								<p><?php the_field( 'ortho_page_panel_6_container1_copy' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_6_container2_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'ortho_page_panel_6_container2_title' ); ?></h4>
								<p><?php the_field( 'ortho_page_panel_6_container2_copy' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_6_container3_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'ortho_page_panel_6_container3_title' ); ?></h4>
								<p><?php the_field( 'ortho_page_panel_6_container3_copy' ); ?></p>
							</div>
						<?php }
					?>
				</div>
				<div class="row before-after">
					<?php
						if(get_field('ortho_page_panel_6_container4_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'ortho_page_panel_6_container4_title' ); ?></h4>
								<p><?php the_field( 'ortho_page_panel_6_container4_copy' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_6_container5_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'ortho_page_panel_6_container5_title' ); ?></h4>
								<p><?php the_field( 'ortho_page_panel_6_container5_copy' ); ?></p>
							</div>
						<?php }
					?>
					<?php
						if(get_field('ortho_page_panel_6_container6_copy'))
						{ ?>
							<div class="span4">
								<h4><?php the_field( 'ortho_page_panel_6_container6_title' ); ?></h4>
								<p><?php the_field( 'ortho_page_panel_6_container6_copy' ); ?></p>
							</div>
						<?php }
					?>
				</div>
			</div>
		</div>
		<div class="content-panel6">
			<div class="container">
				<div class="row">
					<h3><?php the_field( 'ortho_page_panel8_title' ); ?></h3>
				</div>
				<div class="row before-after">
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu1" data-toggle="dropdown">
								<?php the_field( 'ortho_page_panel7_question1' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								<li role="presentation"><?php the_field( 'ortho_page_panel7_answer1' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu2" data-toggle="dropdown">
								<?php the_field( 'ortho_page_panel7_question2' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
								<li role="presentation"><?php the_field( 'ortho_page_panel7_answer2' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row before-after">
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu3" data-toggle="dropdown">
								<?php the_field( 'ortho_page_panel7_question3' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
								<li role="presentation"><?php the_field( 'ortho_page_panel7_answer3' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu4" data-toggle="dropdown">
								<?php the_field( 'ortho_page_panel7_question4' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
								<li role="presentation"><?php the_field( 'ortho_page_panel7_answer4' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row before-after">
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu5" data-toggle="dropdown">
								<?php the_field( 'ortho_page_panel7_question5' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu5">
								<li role="presentation"><?php the_field( 'ortho_page_panel7_answer5' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu6" data-toggle="dropdown">
								<?php the_field( 'ortho_page_panel7_question6' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu6">
								<li role="presentation"><?php the_field( 'ortho_page_panel7_answer6' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row before-after">
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu7" data-toggle="dropdown">
								<?php the_field( 'ortho_page_panel7_question7' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu7">
								<li role="presentation"><?php the_field( 'ortho_page_panel7_answer7' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="span6">
						<div class="dropdown">
							<button class="dropdown-toggle sr-only" type="button" id="dropdownMenu8" data-toggle="dropdown">
								<?php the_field( 'ortho_page_panel7_question8' ); ?>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu8">
								<li role="presentation"><?php the_field( 'ortho_page_panel7_answer8' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
