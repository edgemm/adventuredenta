<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<span class="flosser-peek"></span>

	<?php if ( is_page( 'new-patients' ) || '6' == $post->post_parent ) { ?>
		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('new-patients')) ?>
		</div>
	<?php } ?>

	<?php if ( is_page( 'your-visit' ) || '14' == $post->post_parent ) { ?>
		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('new-patients')) ?>
		</div>
	<?php } ?>

	<?php if ( is_page( 'emergencies' ) || '22' == $post->post_parent ) { ?>
		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('new-patients')) ?>
		</div>
	<?php } ?>
	
	<?php if ( is_page( 'about-us' ) || '26' == $post->post_parent ) { ?>
		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('about-us')) ?>
		</div>
	<?php } ?>
	
	<?php if ( is_page( 'pediatrics' ) || '28' == $post->post_parent ) { ?>
		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('pediatrics')) ?>
		</div>
	<?php } ?>
	
	<?php if ( is_page( 'contact' ) || '34' == $post->post_parent ) { ?>
		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('contact')) ?>
		</div>
	<?php } ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-widgets')) ?>
	</div>
		
</aside>
<!-- /sidebar -->