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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bcbarber' ); ?></a>

<header id="header">
  <div class="container-fluid">
  <div class="row">
  <div class="col-xs-12">
    <h2><?php the_field('header_title'); ?></h2>
    <nav id="nav" role="navigation">
      <ul>
        <li><a href="#home" class="smoothScroll">Home</a></li>
        <li><a href="#services" class="smoothScroll">Services</a></li>
        <li><a href="#about" class="smoothScroll">About</a></li>
        <li><a href="#location" class="smoothScroll">Location</a></li>
      </ul>
    </nav>
    </div> <!-- col-xs-12 -->
    </div> <!--Row -->
  </div>	<!--Container -->
</header>

	<div id="content" class="site-content">
