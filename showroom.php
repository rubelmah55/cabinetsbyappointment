<?php 
/*
Template name: Showroom
*/
get_header();?>

<section class="showroom-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="showroom-content">
					<?php 
					while(have_posts()): the_post();
						the_content();
					endwhile;
					?>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>