<?php get_header('blog'); ?>
	
	<!-- section -->
	<div role="main" id="main" class="blog">
	
		<div class="container content">
			<div class="row">
				<div class="span8">
					<?php get_template_part('loop'); ?>				
				</div>
				<div class="span4">
					<?php get_sidebar('blog'); ?>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>