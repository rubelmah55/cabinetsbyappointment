<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mrinterlock
 */

?>
	
		<footer class="footer" style="background-color: #333333">
			<div class="container">
			  <div class="row">
			  	<div class="col-md-8 col-sm-8 col-xs-7">
			  		<p class="copyright"><?php the_field( 'copyright', 'options' ); ?></p>
			  	</div>
			  	<div class="col-md-4 col-sm-4 col-xs-5">
			  		<ul class="social_media list-inline text-right">
						<?php 
							$social_media = get_field('social', 'options');
							foreach ($social_media as $social_m) :
						 ?>						
							<li><a href="<?php echo $social_m['icon_link'] ?>"><i class="fa <?php echo $social_m['icon_class'] ?>"></i></a></li>
						<?php endforeach; ?>
					</ul>
			  	</div>
			  </div><!-- /row -->

			</div><!-- /container -->
		</footer><!-- /footer -->
		<?php wp_footer(); ?>
	</body>
</html>