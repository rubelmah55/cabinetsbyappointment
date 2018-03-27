<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0 !important;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php if (get_field('favicon', 'options')): ?>
        <link rel="icon" href="<?php the_field('favicon', 'options'); ?>" sizes="32x32">
    <?php endif; ?>
    <?php wp_head(); ?>
    <style type="text/css">
    	<?php
			$portfolio_bg = get_theme_mod( 'mrinterlock_portfolio_bg' );
    	?>
    	#post-3801 {
    		background-color: <?php echo $portfolio_bg['portfolio_bg']; ?>
    	}
    </style>
</head>
<body <?php body_class(); ?>>
		
		<div class="header" style="background-color: <?php the_field('header_bg_color', 'options') ?>">
			<!-- Navbar -->
			<div class="navbar navbar-default main_menu">
			  	<div class="container">
					<div class="navbar-header">
					  	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
					  	</button>

							<?php 
								$mrinterlock_logo = get_field( 'logo', 'options' );
								if ( $mrinterlock_logo ){
								echo '<a class="navbar-brand" href="'. esc_url( home_url( '/' ) ) .'"><img src="'. $mrinterlock_logo .'" class="img-responsive" alt="Logo" /></a>';
								} else {
									echo '<h2>Mr.Interlock</h2>';
								}
							?>
					 	
					</div>
					
					
					<div class="collapse navbar-collapse">
							<div class="menu_top text-right hidden-xs">
								<ul class="social_media list-inline">
									<li><?php the_field('call_title', 'options'); ?> <span><a href="tel:<?php the_field('phone_number', 'options'); ?>"><?php the_field('phone_number', 'options'); ?></a></span></li>
									
									<?php 
									$social_media = get_field('social', 'options');
										foreach ($social_media as $social_m) :
									 ?>						
									<li><a href="<?php echo $social_m['icon_link'] ?>"><i class="fa <?php echo $social_m['icon_class'] ?>"></i></a></li>
									<?php endforeach; ?>
								</ul>
							</div><!-- /menu_top -->

					  	<?php wp_nav_menu( array(
								'menu'               => 'primary',
								'theme_location'	 => 'primary',
								'depth'				 => 2,
								'container'			 => 'false',
								'menu_class' 		 => 'nav navbar-nav navbar-right',
								'menu_id' 			 => '',
								'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
								'walker' 			 => new wp_bootstrap_navwalker()
								) ); 
							?>
			
					</div><!-- /collapse -->
			  	</div><!-- /container-fluid -->
			</div><!--/ Navbar -->
		</div>