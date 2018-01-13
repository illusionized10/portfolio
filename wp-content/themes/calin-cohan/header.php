<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package calin-cohan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,900' rel='stylesheet' type='text/css'>
    <!-- font-family: 'Merriweather', serif; -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- font-family: 'Open Sans', sans-serif; -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">

    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/icons/rik-icons/styles.css">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">

    <!-- Custom Stylesheet Overrides -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <!-- Screen Reader Text -->
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'calin-cohan' ); ?></a>

    <!-- Start: Preloader Section
    =================================== -->
    <div id="main-preloader" class="main-preloader semi-dark-background">
        <div class="container full-height">
            <div class="row full-height">
                <div class="full-height col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">

                    <div class="main-preloader-inner">

                        <h1 class="preloader-percentage">
                            <span class="preloader-percentage-text">0%</span> <!-- Show Percentage Number -->
                            <!-- <span class="percentage">%</span> -->
                        </h1>
                        <div class="preloader-bar-outer">
                            <div class="preloader-bar"></div> <!-- Percentage Precess Bar -->
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End: Preloader Section
    =================================== -->

	<header id="masthead" class="site-header">

        <!-- Start: Navbar  Area
        ============================= -->
        <nav class="navbar navbar-fixed-top main-navbar-top navbar-top-js" id="main-navbar-top" >
            <div class="container relative">
                <div class="navbar-header">

                    <!-- Menu Button show Mobile view -->
                    <button type="button" class="nav-trigger nav-trigger-animate"  data-target="#js-navbar-menu">
                        <span aria-hidden="true" class="icon"></span>
                    </button>

                    <!-- TEMPLATE LOGO LIGHT -->
                    <a class="navbar-brand light-logo btn-scroll" href="#home-section"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" class="img-responsive"></a>

                </div>
                
                <!-- Main Menu List -->
                <div class="navbar-collapse" id="js-navbar-menu">
                    <ul class="nav navbar-nav navbar-right" id="navbar-nav">
                        <li><a class="btn-nav" href="#services-section">professions</a></li>
                        <li><a class="btn-nav" href="#portfolio-section">portfolio</a></li>
                        <li><a class="btn-nav" href="#testimonial-section">testimonials</a></li>
                        <li><a class="btn-nav" href="#team-section">team</a></li>
                        <li><a class="btn-nav" href="#contact-us-section">Contact Us</a></li>
                    </ul>
                </div>


                <!-- Right Side Navigation Button -->
                <div class="navbar-collapse-right hidden-xs " >
                    <ul class="nav navbar-nav navbar-right btn-scroll">
                        <li><a class="btn-nav" href="#contact-us-section">Get in Touch <i class="icon icon-arrow-right"></i></a></li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- End: Navbar Area
        ============================= -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">