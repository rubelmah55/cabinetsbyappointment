<?php 
/*
Template name: About
*/
get_header(); 
$page_id = get_queried_object_id();
 ?>
	<?php if(get_field('bannar_enabledisable')) : ?>
	<div class="about_banner" style="background-image: url(<?php the_field('bannar_bg_image', $page_id); ?>);
    ">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<h1 class="page_title"><?php the_field('about_bannar_title', $page_id); ?></h1>
					<?php if(get_field('banner_sub_title', $page_id)) : ?>
					<h3><?php the_field('banner_sub_title', $page_id) ?></h3>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<?php if(get_field('page_content_enable_disable')) : ?>
	<div class="page_single">
		<div class="container">
			<div class="row">
		  	<div class="col-xs-12 col-sm-12 col-md-12">
		  		<h3 class="area_title"><?php the_field('page_title', $page_id); ?></h3>
		  		<div class="separator big text-center">
		  			<span class="fa fa-stop"></span>
		  			<span class="fa fa-stop"></span>
		  			<span class="fa fa-stop"></span>
		  		</div>
		  	</div>
		  </div>
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<div class="page_content">
						<?php
							if ( have_posts() ) :
								while ( have_posts() ) : the_post();
									the_content();
								endwhile;
							else :
								echo wpautop( 'Sorry, no posts were found' );
							endif;
						?>
					</div>
				</div>
				<div class="separator big text-center">
		  			<span class="fa fa-stop"></span>
		  			<span class="fa fa-stop"></span>
		  			<span class="fa fa-stop"></span>
		  		</div>
			</div>
		</div>
	</div><!-- /page_single -->
	<?php endif; ?>

 <?php get_footer(); ?>