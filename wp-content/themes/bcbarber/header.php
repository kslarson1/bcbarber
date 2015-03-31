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
<link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700|Roboto:500,300,400,100' rel='stylesheet' type='text/css'>	<!-- GOOGLE FONTS -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">	<!-- Font Awesome -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>  <!-- modernizr -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bcbarber' ); ?></a>

<header id="masthead" class="site-header" role="banner">

    <nav id="site-navigation" class="main-navigation" role="navigation">

      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu', 'ul' => 'menu' ) ); ?>

          </div>
        </div>
      </div>

    </nav><!-- #site-navigation -->
<!-- initialize slicknav -->
<script>
  $(function(){
    $('#menu').slicknav();
  });
</script>

  </header><!-- #masthead -->

	<div id="content" class="site-content">
