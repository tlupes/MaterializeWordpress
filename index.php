
<?php 
$_SESSION["pg_nm"] = 'Latest Posts';
get_header(); ?>
<div style="background-color: whitesmoke;">
	<div class="container" >
		<div class="row">
			<div class="col m12 l8">
				<main role="main">
					<!-- section -->
					<section>

						<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

						<?php get_template_part('loop'); ?>

						<?php get_template_part('pagination'); ?>

					</section>
					<!-- /section -->
				</main>
			</div>
			<div class="col s12 m12 l4">
				<?php get_sidebar(); ?>
			</div>
			<div class="col s12">
				<?php get_footer(); ?>
			</div>
		</div>

		<?php if (is_user_logged_in()): ?>
		<div class="fixed-action-btn down-on-scroll" style="bottom: 45px; right: 24px;z-index:11">
			<a class="btn-floating btn-large waves-effect waves-light custom-color" href="/wp-admin/post-new.php" id="newPost"><i class="mdi-content-add"></i></a>
		</div>
		<?php endif ?>

	</div>
</div>
