<div style="background-color: whitesmoke;">
	<?php 
	$_SESSION["pg_nm"] = get_the_title();
	get_header(); ?>
	<div class="container" >
		<div class="row">
			<div class="col m12 l8">
				<main role="main">
				<!-- section -->
				<section>

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="card">
							<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
								<div class="card-image">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
									<div class="pickgradient"></div>
								</a>
								<span class="card-title">
									<?php the_title(); ?>
								</span>
								</div>
							<?php endif; ?>
							<!-- /post thumbnail -->

							<div class="card-content">
								<!-- post title -->
								<?php if (!has_post_thumbnail()) : // Check if thumbnail exists ?>
								<span class="card-title">
									<?php the_title(); ?>
								</span>
								<?php endif; ?>

								<?php the_content(); // Dynamic Content ?>
							</div>
						</div>
					</article>
					<!-- /article -->

					<?php comments_template(); ?>

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>

				</section>
				<!-- /section -->
				</main>
			</div>
			<div class="col s12 m12 l4">
				<div class="card">
					<div class="card-content">
						<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span><br>
						<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span><br>
						<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span><br>
						<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
						<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
			<div class="col s12">
				<?php get_footer(); ?>
			</div>
		</div>
	</div>
</div>
