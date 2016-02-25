<div style="background-color: whitesmoke;">
	<?php get_header(); ?>
	<div class="container" >
		<div class="row">
			<div class="col m12 l8">
				<main role="main">
					<!-- section -->
					<section>

					<?php if (have_posts()): the_post(); ?>

						<h1><?php _e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?></h1>

					<?php if ( get_the_author_meta('description')) : ?>
						<div class="card">
							<div class="card-content user-page-user-info">
								<table>
									<tr>
										<td style="width:96px"><?php echo get_avatar(get_the_author_meta('user_email')); ?></td>
										<td><p class="user-name"><?php _e( 'About ', 'html5blank' ); echo get_the_author() ; ?></p>
								<?php echo wpautop( get_the_author_meta('description') ); ?></td>
									</tr>
								</table>
							</div>
						</div>

					<?php endif; ?>

					<?php rewind_posts(); while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<div class="card hoverable">
								<!-- post thumbnail -->
								<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
								<div class="card-image card-image-loop">
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
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									</span>
									<?php endif; ?>
									<!-- /post title -->

									<!-- post details -->
										<!--<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
										<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
										<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
									<!-- /post details -->

									<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

								</div>
							</div>

						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

						</article>
						<!-- /article -->

					<?php endif; ?>

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
