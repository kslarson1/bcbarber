<?php
/**
 * Template Name: Events
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

<!-- START OF EVENTS SECTION -->
<div id="events" style="background-image: url(<?php the_field('events_bg_image'); ?>)">
<div class="container">
<!-- START OF EVENT -->
<div class="event_container">
<div class="row">
	
		<div class="col-xs-12 col-sm-6">
			<h3><?php the_field('event_header'); ?></h3>
			<hr>
			<p><?php the_field('event_text'); ?></p>
		</div>
		<div class="col-xs-12 col-sm-6">
			<img class="event_image" src="<?php the_field('event_image'); ?>">
		</div>
	</div>
</div>
<!-- END OF EVENT -->
</div>
</div>
<!-- END OF EVENTS SECTION -->


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
