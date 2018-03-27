<?php 
/*
Template name: Single Showroom
Template Post Type: post, page, location
*/
get_header();
$page_id = get_queried_object_id();
?>
	<?php 
		$args = array( 
			'post_type' => 'location', 
			'posts_per_page' => -1 
		);
		$loop = new WP_Query( $args );
		while($loop->have_posts()) : $loop->the_post();
		$banner_img = get_field('banner_bg', $page_id);
		$address = get_field('address', $page_id);
		$phone_title = get_field('phone', $page_id);
		$phone_nu = get_field('phone_number', $page_id);
		$social_icon = get_field('social_icon', $page_id);
		$button = get_field('button', $page_id);
		$map = get_field('map_url', $page_id);
		$brand_t = get_field('brand_title', $page_id);
		$brand_s = get_field('brand_sub_title', $page_id);
		$brand_img = get_field('brand_image', $page_id);
		$appoinment_t = get_field('appoinment_ttitle', $page_id);
		$appoinment_id = get_field('appoinment_form_id', $page_id);

	?>
	<section id="signle_banner" style="background: url(<?php echo $banner_img; ?>) no-repeat center center;">
		<div class="container">
			<div class="row text-center">
				<div class="col-md- col-sm-12 col-xs-12">
					<h1 class="title"><?php the_title(); ?></h1>
					<h4 class="address"><?php echo $address; ?><br>
					<?php echo $phone_title; ?> <a href="tel:<?php echo $phone_nu; ?>"><?php echo $phone_nu; ?></a></h4>
					<ul class="social_icon">
						<?php foreach ($social_icon as $social ): ?>
							<li><a href="<?php echo $social['icon_url']; ?>"><i class="fa <?php echo $social['icon']; ?>"></i><?php echo $social['icon_text']; ?></a></li>
						<?php endforeach; ?>
					</ul>

					<?php if ($button): foreach ($button as $butt ): ?>
						<a href="<?php echo $butt['button']["url"]; ?>" class="btn" target="<?php echo $butt['button']["target"]; ?>"><?php echo $butt['button']["title"]; ?></a>
					<?php endforeach; endif;?>

				</div>
			</div>
		</div>
	</section>
	<section id="map">
		<div class="container">
			<div class="row text-center" >
				<div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
					<iframe src="<?php echo $map; ?>" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
	<section id="brand" style="padding-top: 0px;">
		<div class="schedule_title" style="background: #ddd;">
			<div class="container">
				<div class="row text-center">
				  	<div class="col-xs-12 col-sm-12 col-md-12">
				  		<h3 class="area_title"><?php echo $brand_t; ?></h3>
				  		<div class="separator text-center" style="margin-bottom: 0;">
				  			<span class="fa fa-stop"></span>
				  			<span class="fa fa-stop"></span>
				  			<span class="fa fa-stop"></span>
				  		</div>
				  		<h4><?php echo $brand_s; ?></h4>
				  	</div>
				 </div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 brand-logo col-sm-12 col-xs-12">
					<?php foreach ($brand_img as $brand_im): ?>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img src="<?php echo $brand_im['image']; ?>" alt="">
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
	<section id="schedule" style="padding-top: 0px;">
		<div class="schedule_title" style="background: #ddd;">
			<div class="container">
				<div class="row">
				  	<div class="col-xs-12 col-sm-12 col-md-12">
				  		<h3 class="area_title"><?php echo $appoinment_t; ?></h3>
				  		<div class="separator text-center" style="margin-bottom: 0;">
				  			<span class="fa fa-stop"></span>
				  			<span class="fa fa-stop"></span>
				  			<span class="fa fa-stop"></span>
				  		</div>
				  	</div>
				 </div>
			</div>
		</div>
		<div class="container">
			<div class="row text-center">
				<div class="col-md-offset-2 col-md-8">
					<div class="contact_right appointment_form">
		  			<?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]'); ?>
		  			</div>
				</div>
			</div>
		</div>
	</section>


<?php endwhile; ?>


<?php get_footer(); ?>