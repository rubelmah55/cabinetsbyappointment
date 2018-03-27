<?php 
/*
Template name: Contact
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
					<?php if(get_field('bannar_sub_title')) : ?>
					<h3><?php the_field('bannar_sub_title', $page_id) ?></h3>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<?php if(get_field('page_content_enable_disable')) : ?>
	<div class="page_single">
		<div class="container">
			<div class="row text-center">
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
				<div class="contact_right">
		  			<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
		  		</div>
			</div>
		</div>
	</div><!-- /page_single -->
	<?php endif; ?>
	<?php if(get_field('map_enabledisable')) : ?>
	<div id="maps">
		<iframe src="<?php the_field('map_url', $page_id); ?>" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<?php endif; ?>
 <?php get_footer(); ?>
