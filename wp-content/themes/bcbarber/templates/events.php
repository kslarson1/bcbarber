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
<div id="events">
<div class="container">
<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<div class="event_container">
			
			one third
			
			two third	
			
		</div>
	</div>
</div>
</div>
</div>
<!-- END OF EVENTS SECTION -->


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
