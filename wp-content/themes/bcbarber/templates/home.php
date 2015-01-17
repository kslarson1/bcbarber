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

				<?php get_template_part( 'content', 'page' ); ?>

<!-- START OF HOME SECTION -->
<div id="home">
	<div class="fixed_bg_home" style="background-image: url(<?php the_field('home_bg_image'); ?>);">
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 center">
			<h1><?php the_field('home_header'); ?></h1>
			<h3><?php the_field('home_subheader'); ?></h3>
			<a class="button_flat" href="https://www.schedulicity.com/Scheduling/BBCLVL">Book Now</a>
			<i class="fa fa-angle-double-down fa-4x"></i>
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
			<h2><?php the_field('services_header'); ?></h2>
		</div>
	</div>
	<div class="row">
	<!-- BEGIN REPEATER - SERVICES -->
<?php

// check if the repeater field has rows of data
if( have_rows('services_list') ):

 	// loop through the rows of data
    while ( have_rows('services_list') ) : the_row(); ?>

        <!-- // display a sub field value -->
        <div class="service_box">
	        <img src="<?php the_sub_field('services_list_image'); ?>" />
	        <h4><?php the_sub_field('services_list_name'); ?></h4>
	        <p><?php the_sub_field('services_list_text'); ?></p>
	        <a class="button_flat_services" href="<?php the_sub_field('services_list_link'); ?>">Book Now</a>
		</div>

    <?php endwhile;

else :

    // no rows found

endif;

?>
	<!-- END REPEATER - SERVICES -->
	</div>
	</div>
	</div>
</div>
<!-- END OF SERVICES SECTION -->

<!-- START OF ABOUT SECTION -->
<div id="about">
<div class="container">
<div class="row">
	<div class="col-xs-12 center">
		<h1><?php the_field('about_header'); ?></h1>
	</div>
</div>
<div class="row">
	<img class="about_full" src="<?php the_field('about_image'); ?>" />
</div>
<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
	<p><?php the_field('about_text'); ?></p>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<a class="button_flat" href="https://www.schedulicity.com/Scheduling/BBCLVL">Book Now</a>
	</div>
</div>
</div>
</div>
<!-- END OF ABOUT SECTION -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
