
<div style="background-color: whitesmoke;">
	<?php get_header(); ?>
	<div class="container" >
		<div class="row">
			<div class="col m12 l8">
				<main role="main">
					<!-- section -->
					<section>

						<article id="post-404">

							<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
							<h2>
								<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
							</h2>

						</article>

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
