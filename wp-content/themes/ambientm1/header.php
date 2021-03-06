<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<!-- css + javascript -->
		<?php wp_head(); ?>
<!-- 		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css"> -->
 		<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/main.less">
		<script src="<?php bloginfo('template_directory'); ?>/js/less.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:300italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="//use.typekit.net/dbh2jpq.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6380252/718502/css/fonts.css" />
		<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie8.css" />
		<![endif]-->
		<!--[if lte IE 8]>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie8.css" />
		<![endif]-->		
		<script>
		(function(){
			// configure legacy, retina, touch requirements @ conditionizr.com
			conditionizr();
		})();
		</script>
	</head>
	<body <?php body_class(); ?>>
				<!-- header -->
				<header class="header clear" role="banner">
					<div class="container">
						<a href="<?php echo home_url(); ?>" class="logo-container">
							<h1><?php bloginfo('name'); ?></h1>
						</a>
						<div class="header-contact">
							<p class="contact-phone">
								<span class="contact-phone-teaser">Call us today!</span>
								<a href="360.604.9000">(360) 604-9000</a>
							</p>
						</div>
						<nav role="navigation" class="navbar navbar-inverse">
							<div class="navbar-inner">
								<div class="container">
									<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<div class="nav-collapse collapse">
										<?php ambientm1_nav(); ?>
									</div>
								</div>
							</div>
						</nav>
					</div>
				</header>