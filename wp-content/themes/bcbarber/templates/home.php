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
	<div class="fixed_bg_home" style="background-image: url(<?php the_field('home_bg_image'); ?>);">   <!-- FIXED IMAGE -->
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 center">
			<h1><?php the_field('home_header'); ?></h1>
			<h3><?php the_field('home_subheader'); ?></h3>
			<i class="fa fa-angle-double-down fa-4x"></i>
		</div>
	</div>
	</div>
	</div>
</div>
<!-- END OF HOME SECTION -->
<!-- START OF SERVICES SECTION -->

<!-- END OF SERVICES SECTION -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
