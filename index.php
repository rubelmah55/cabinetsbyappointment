<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mrinterlock
 */

get_header(); ?>

<div class="page_single">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<div class="page_content">
					<div id="ajax-content">
						<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) : ?>
								<header class="entry-header">
									<h3 class="entry-title"><?php //single_post_title(); ?></h3>
								</header>

							<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							//the_posts_navigation();

							else :

							get_template_part( 'template-parts/content', 'none' );

							endif; ?>
					</div>
					<div class="text-center">
						<button class="laod_more_post btn transition" data-page="1" data-url="<?php echo admin_url('admin-ajax.php'); ?>">Load more »</button>
					</div>
				</div><!-- /page_content -->
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /Container -->
</div><!-- /page_single -->

<?php
get_sidebar();
get_footer();
