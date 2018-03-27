<?php 
/*
Template name: FrontPage
*/
get_header(); 
$page_id = get_queried_object_id();
?>
	<?php if(get_field('banner_enabledisable')) : ?>
		<div class="slider_area">
			<?php 
				$gallery = get_field('banner_bg', $page_id);
				foreach ($gallery as $gal ) :
			 ?>
			<div class="slider_item" style="background: url(<?php echo $gal['url'] ?>);">
				<div class="banner_content">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h3><?php the_field('banner_sub_title') ?></h3>
								<h1><?php the_field('banner_title') ?></h1>
								<?php 
								$button = get_field('banner_button', $page_id);
								if ($button):
								 ?>
								<a href="tel:<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>" class="btn"><?php echo $button['title'] ?></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
	<!-- /slider_area -->
	<?php if(get_field('call_to_action_enabledisable')) : ?>
		<div class="call_to_action" style="background-color: <?php the_field('call_to_action_bg_color'); ?>;">
			<div class="container">
			  <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-8">
						<h2><?php the_field('call_to_action_text'); ?> <a href="tel:<?php the_field('phone_number', 'options') ?>" class="phone"><?php the_field('phone_number', 'options') ?></a></h2>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 text-right">
					<?php if(get_field('call_to_action_button_text')) : ?>				
						<a href="<?php the_field('call_to_action_button_url'); ?>" class="btn"><?php the_field('call_to_action_button_text'); ?> »</a>
					<?php endif; ?>
					</div>
			  </div>
			</div>
		</div><!-- /call_to_action -->
	<?php endif; ?>
	
	<?php if(get_field('gallery_enabledisable')) : ?>
		<section class="recentwork_area" style="background-color: <?php the_field('project_bg_color') ?>">
			<div class="container">
				<div class="row">
			  	<div class="col-xs-12 col-sm-12 col-md-12">
			  		<h3 class="area_title"><?php the_field('gallery_title'); ?></h3>
			  		<div class="separator text-center">
			  			<span class="fa fa-stop"></span>
			  			<span class="fa fa-stop"></span>
			  			<span class="fa fa-stop"></span>
			  		</div>
			  	</div>
			  </div>
			  <div class="row">

			  	<?php 
			  		$gallery_id = get_field('gallery_uber_id');
			  	echo do_shortcode('[ubergrid id='.$gallery_id.']'); ?>
			  </div>
			</div>
		</section><!-- End Gallery Section -->
	<?php endif; ?>

	<?php if(get_field('process_enabledisable')) : ?>
		<section id="process" style="background: <php the_field('process_bg_color'); ?>">
			<div class="container">
				<div class="row text-center process_title">
					<h3><?php the_field('process_sub_title'); ?></h3>
					<h1><?php the_field('process_title'); ?></h1>
					<div class="separator text-center">
			  			<span class="fa fa-stop"></span>
			  			<span class="fa fa-stop"></span>
			  			<span class="fa fa-stop"></span>
			  		</div>
				</div>
				<div class="row text-center">
					<?php 
						$process_i = get_field('process_item', $page_id);
						foreach ($process_i as $process ) :
					 ?>
					<div class="col-md-4 col-sm-4 col-xs-12 process_border">
						<div class="process">
							<div class="border1"></div>
							<div class="border2">
								<img src="<?php echo $process['item_icon']; ?>" alt="">
							</div>
						</div>
						<div class="process_content">
							<h4><?php echo $process['item_title']; ?></h4>
							<p><?php echo $process['item_content']; ?></p>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section><!-- End Dealer Section -->
	<?php endif; ?>

	<?php if(get_field('contact_enabledisable')) : ?>
		<section class="contact_us_area" style="background: <?php the_field('contact_bg_color'); ?>">
			<div class="container">
				<div class="row">
			  	<div class="col-xs-12 col-sm-12 col-md-12">
			  		<h3 class="area_title"><?php the_field('contact_title'); ?></h3>
			  		<div class="separator text-center">
			  			<span class="fa fa-stop"></span>
			  			<span class="fa fa-stop"></span>
			  			<span class="fa fa-stop"></span>
			  		</div>
			  	</div>
			  </div><!-- /row -->

			  <div class="row">
			  	<div class="col-md-4 col-sm-4 col-xs-12">
			  		<div class="contact_left">
			  			<p><b><?php the_field('company_name'); ?></b>
			  			<?php 
			  				$bussines_inf = get_field('company_info');
			  				foreach ($bussines_inf as $bussines) :
			  			 ?>
			  				<br>
							<b><?php echo $bussines['title']; ?> </b><?php echo $bussines['text']; ?>
						<?php endforeach; ?>

			  			</p>

			  			<p><strong>​​<?php the_field('contact_today_title'); ?></strong>
							<?php 
								$contact_today_item = get_field('contact_today_service_item');
								foreach ($contact_today_item as $contact_today) :
							 ?>
			  				<br><?php echo $contact_today['service_item']; ?>
			  			<?php endforeach; ?>
						</p>
							<ul class="social_media list-inline">
								<?php 
									$social_media = get_field('social', 'options');
										foreach ($social_media as $social_m) :
								?>						
									<li><a href="<?php echo $social_m['icon_link'] ?>"><i class="fa <?php echo $social_m['icon_class'] ?>"></i></a></li>
								<?php endforeach; ?>
							</ul>
			  		</div><!-- /contact_left -->
			  	</div>

			  	<div class="col-md-8 col-sm-8 col-xs-12">
			  		<div class="contact_right">
			  			<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
			  		</div><!-- /contact_right -->
			  	</div>
			  </div><!-- /row -->
			</div><!-- /container -->
		</section><!-- /contact_us_area -->
	<?php endif; ?>
	<?php if(get_field('map_enabledisable')) : ?>
	<div id="maps">
		<iframe src="<?php the_field('map_url', $page_id); ?>" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<?php endif; ?>

<?php get_footer(); ?>