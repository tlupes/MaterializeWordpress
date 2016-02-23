<div style="background-color: whitesmoke;">
	<?php get_header(); ?>
	<div class="container" >
		<div class="row">
			<div class="col m12 l8">
				<main role="main">
					<!-- section -->
					<section>

						<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

						<?php get_template_part('loop'); ?>

						<?php get_template_part('pagination'); ?>

					</section>
					<!-- /section -->
				</main>
			</div>
			<div class="col m12 l4">
				<?php get_sidebar(); ?>
			</div>
			<div class="col s12">
				<?php get_footer(); ?>
			</div>
		</div>

	</div>
</div>