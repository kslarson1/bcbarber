<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bcbarber
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
		<div class="row center">
			<div class="col-xs-12 col-sm-4">
				<h5><?php the_field('footer_address_header'); ?></h5>
				<hr>
				<p><?php the_field('footer_address_text'); ?></p>
			</div>
			<div class="col-xs-12 col-sm-4">
				<h5><?php the_field('footer_phone_header'); ?></h5>
				<hr>
				<p><?php the_field('footer_phone_text'); ?></p>
			</div>
			<div class="col-xs-12 col-sm-4">
				<h5><?php the_field('footer_social_header'); ?></h5>
				<hr>
				<a href="https://www.facebook.com/bcbarbercompany"><i class="fa fa-facebook fa-2x"></i></a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 center">
				<a href="https://www.schedulicity.com/Scheduling/BBCLVL" class="button_flat" target="_blank">Book Now</a>
			</div>
		</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
