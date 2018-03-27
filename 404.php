<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mrinterlock
 */

get_header(); ?>

<div class="page_single">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<div class="page_content">
					<div class="error">
					  <h1>404</h1>
					  <p>We're sorry but it looks like that page doesn't exist anymore.</p>
					  <a href="<?php echo esc_url(home_url('/')) ?>" class="btn" style="background-color: #333;">Go back Home</a>
					</div>
				</div><!-- /page_content -->
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /Container -->
</div><!-- /page_single -->

<?php
get_footer();
