<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- SEO -->
    <title>DaraClare: UX Designer &amp; Frontend Developer</title>
    <meta name="description" content="Dara Clare, UX designer and frontend developer" />
    <meta name="keywords" content="UX Designer, UI Designer, Frontend Developer, Front End Developer, Designer, Dublin, CSS, HTML, Development, Frontend, Responsive, Developer" />
    
    <link href="favicon.png" rel="icon" type="image/png" />
    
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,700%7cBitter:400,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap 3.1.0 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Flexslider 2 -->
    <link href="css/flexslider.css" rel="stylesheet" />
    <!-- venobox -->
    <link href="css/venobox.css" rel="stylesheet">
    <!-- ionicons font -->
    <link href="css/ionicons.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/color/blue.css" rel="stylesheet" />
  </head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		 <header>
        <div class="container">
          <div class="row">

            <div id="logo-region" class="logo col-md-3 text-center-sm">
              <a href="index.html"><img src="logo.svg" alt="logo" class="img-responsive" /></a>
            </div> <!-- /logo-region -->

            <div id="menu-region" class="col-md-9">
              <nav class="navbar daraclare-main-menu" role="navigation">
                <!-- Menu button for mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">MENU</button>
                </div>
            
                <!-- Navigation links -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                  <ul class="nav navbar-right navbar-nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                      <li><a href="blog">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
                </div> <!-- /navbar-collapse -->
              </nav>
            </div> <!-- /menu-region -->

          </div> <!-- /row -->
        </div> <!-- container -->
          
      </header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
