<?php
/**
 * Template Name: Barbers
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

<!-- START OF BARBERS SECTION -->
<div id="barbers">
<div class="container">
	<div class="row">
		<div class="col-xs-12 center">
			<h1 class="double_border"><?php the_field('barbers_header'); ?></h1>
		</div>
	</div>
<div class="row">
		<ul class="ch-grid">

		<!-- BEGIN REPEATER -->
	<?php
	// check if the repeater field has rows of data
	if( have_rows('about_barbers') ):
	 	// loop through the rows of data
	    while ( have_rows('about_barbers') ) : the_row(); ?>
	      <!--   // display a sub field value -->
	      	
	     		<div class="col-xs-12 col-sm-6 col-md-4">
	     		<div class="about_item">
	     		<li>
	     		<div class="ch-item" style="background-image: url(<?php the_sub_field('about_barber_image'); ?>)">
		      	<div class="ch-info" >
		      		<h3><?php the_sub_field('about_barber_name'); ?></h3>
		      		<p><?php the_sub_field('about_barber_fact'); ?></p>
		      	</div>
		      	</div>
		      	</li>
		      	<!-- END OF CIRCLE IMAGE -->
		      	<div class="about_item_container">
		        	<p><?php the_sub_field('about_barber_background'); ?></p>
		        </div>
		        </div>
		    </div>
	       <?php 
	    endwhile;
	else :
	    // no rows found
	endif;
	?>
		<!-- END OF REPEATER -->
		</ul>
		</div>
</div>
</div>
<!-- END OF BARBERS SECTION -->


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>