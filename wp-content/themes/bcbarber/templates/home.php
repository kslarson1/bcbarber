<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package bcbarber
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<!-- START OF HOME SECTION -->
<div id="home">
	<div class="fixed_bg_home" style="background-image: url(<?php the_field('home_bg_image'); ?>);">
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 center">
			<h1><?php the_field('home_header'); ?></h1>
			<h3><?php the_field('home_subheader'); ?></h3>
			<br>
			<br>
			<a href="https://www.schedulicity.com/Scheduling/BBCLVL" class="button_flat" target="_blank">Book Now</a>
			<a href="#services" class="smoothScroll"><i class="fa fa-angle-double-down fa-4x"></i></a>
		</div>
	</div>
	</div>
	</div>
</div>
<!-- END OF HOME SECTION -->

<!-- START OF SERVICES SECTION -->
<div id="services">
	<div class="flat_bg">
	<div class="container">
	<div class="row">
		<div class="col-xs-12 center">
			<h1><?php the_field('services_header'); ?></h1>
			<hr style="height: 2px">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
		<ul class="ch-grid">
		 <div class="row">
	<!-- BEGIN REPEATER - SERVICES -->
<?php

// check if the repeater field has rows of data
if( have_rows('services_list') ):

 	// loop through the rows of data
    while ( have_rows('services_list') ) : the_row(); ?>

        <!-- // display a sub field value -->
       
        <div class="col-xs-12 col-sm-6 col-md-4">
        <li class="service_box">
			<div class="service_box_img" style="background: url(<?php the_sub_field('services_list_image'); ?>)">
			</div>
	        <h4><?php the_sub_field('services_list_name'); ?></h4>
	        <hr>
	        <p><?php the_sub_field('services_list_text'); ?></p>
	        <a class="button_flat_services" href="https://www.schedulicity.com/Scheduling/BBCLVL" target="_blank">Book Now</a>
	        <span class="service_details">
	        	<i class="fa fa-clock-o"></i><p><?php the_sub_field('services_list_time'); ?></p><p class="service_right"><?php the_sub_field('services_list_cost'); ?></p>
	        </span>
		</li>
		</div>

    <?php endwhile;

else :

    // no rows found

endif;

?>
	<!-- END REPEATER - SERVICES -->
		</div>
		</ul>
		</div>
	</div>
	</div>
	</div>
</div>
<!-- END OF SERVICES SECTION -->

<!-- START OF ABOUT SECTION -->
<div id="about" style="background-image: url(<?php the_field('about_bg_image'); ?>)">
<div class="container">
<div class="row">
	<div class="col-xs-12 center">
		<h1><?php the_field('about_header'); ?></h1>
		<hr style="height: 2px">
	</div>
</div>
<div class="row">
	<div class="col-xs-12 ">
		<img class="about_full" src="<?php the_field('about_image'); ?>">	<!-- ABOUT IMAGE -->
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-10 col-md-offset-1">
		<div class="box_out">
		<div class="box_thin">
			<p><?php the_field('about_text'); ?></p>	<!-- ABOUT TEXT -->
			<div class="row">
				<div class="col-xs-12">
				<div class="about_inline">
					<a class="button_flat" href="https://www.schedulicity.com/Scheduling/BBCLVL" target="_blank">Book Now</a><a class="button_flat" href="/barbers">Meet Us</a><a class="button_flat" href="/events">Events</a>
				</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>

</div>
</div>
<!-- END OF ABOUT SECTION -->

<!-- START OF LOCATION SECTION -->
<div id="location">
<div class="container">
<div class="row">
	<div class="col-xs-12 col-sm-4">
		<h3><?php the_field('location_header'); ?></h3>
		<p><?php the_field('location_text'); ?></p>
		<hr>	
		<h3><?php the_field('location_hours_header'); ?></h3>
<!-- BEGINNING OF REPEATER -->
<div class="repeater">
<?php

// check if the repeater field has rows of data
if( have_rows('location_hours') ):

 	// loop through the rows of data
    while ( have_rows('location_hours') ) : the_row(); ?>

        <!-- // display a sub field value -->
        <p><b><?php the_sub_field('hours_day'); ?> </b><?php the_sub_field('hours_hours'); ?></p>

    <?php endwhile;

else :

    // no rows found

endif;

?>
<!-- END OF REPEATER -->
</div>
<br>
	</div>
	<div class="col-xs-12 col-sm-8">
		<?php echo do_shortcode('[wpgmza id="1"]'); ?>
	</div>
</div>
</div>
</div>
<!-- END OF LOCATION SECTION -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
