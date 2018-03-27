<?php
/**
 * The template for displaying archive pages.
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
					<?php
					if ( have_posts() ) : ?>

						<header class="page-header">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
					
				</div><!-- /page_content -->
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /Container -->
</div><!-- /page_single -->

<?php
get_sidebar();
get_footer();
