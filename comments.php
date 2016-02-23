<div class="card comments">
	<div class="card-content">
		<?php if (post_password_required()) : ?>
			<div class="card-content">
				<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
			</div>
	</div>
</div>
	<?php return; endif; ?>

		<?php if (have_comments()) : ?>
			<span class="card-title">
				<?php comments_number(); ?>
			</span>
			<ul>
				<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
			</ul>

		<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

		<?php endif; ?>

		<?php custom_comment_form(); ?>
	</div>
</div>
