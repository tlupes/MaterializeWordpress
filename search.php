<div style="background-color: whitesmoke;">
	<?php 
	$_SESSION["pg_nm"] = $wp_query->found_posts.' Search Results for '.get_search_query();
	get_header(); ?>
	<div class="container" >
		<div class="row">
			<div class="col m12 l8">
				<main role="main">
					<!-- section -->
					<section>

						<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

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

	</div>
</div>