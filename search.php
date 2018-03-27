<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

							<header class="page-header" style="border:0;">
								<h3 class="entry-title text-center"><?php printf( esc_html__( 'Search Results for: %s', 'mrinterlock' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
								<div class="separator big text-center" style="max-width: 100%;">
									<span class="fa fa-stop"></span>
									<span class="fa fa-stop"></span>
									<span class="fa fa-stop"></span>
								</div>
							</header><!-- .page-header -->
					
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

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
