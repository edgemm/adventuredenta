<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'ambientm1' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>
	
	<hr />

	<h3><?php comments_number(); ?></h3>

	<ul>
		<?php wp_list_comments('type=comment&callback=ambientm1comments'); // Custom callback in functions.php ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	
	<p><?php _e( 'Comments are closed here.', 'ambientm1' ); ?></p>
	
<?php endif; ?>

<?php comment_form(); ?>

</div>