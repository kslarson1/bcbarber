<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bcbarber
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700|Roboto:500,300,400' rel='stylesheet' type='text/css'>	<!-- GOOGLE FONTS -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">	<!-- Font Awesome -->
<script src="/wp-content/themes/bcbarber/js/responsive-nav.js" type="text/javascript"></script>  <!-- RESPONSIVE FIXED NAV BAR -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bcbarber' ); ?></a>

	<header>
		 <a href="#home" class="logo" data-scroll>Fixed Nav</a>
		
			<nav class="nav-collapse">
		        <ul>
		          <li class="menu-item"><a href="#home" data-scroll>Home</a></li>
		          <li class="menu-item"><a href="#services" data-scroll>Services</a></li>
		          <li class="menu-item"><a href="#about" data-scroll>About</a></li>
		          <li class="menu-item"><a href="#location" data-scroll>Location</a></li>
		        </ul>
      		</nav>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
