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

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PNSRNHN');</script>
    <!-- End Google Tag Manager -->

    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700,900" rel="stylesheet">

    <!-- FavIcon -->
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo get_template_directory_uri(); ?>/images/favicon.png' />


    <!-- Custom CSS  -->


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PNSRNHN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="page" class="site">
    <!-- PRELOADER -->
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
    <!-- END PRELOADER -->

	<header id="masthead" class="site-header">

        <nav class="navbar navbar-fixed-top main-navbar-top navbar-top-js" id="main-navbar-top" >
            <div class="container relative">
                <div class="navbar-header">

                    <button type="button" class="nav-trigger nav-trigger-animate"  data-target="#js-navbar-menu">
                        <span aria-hidden="true" class="icon"></span>
                    </button>

                    <a class="navbar-brand light-logo btn-scroll" href="#home-section">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" class="img-responsive">
                    </a>

                </div>
                
                <div class="navbar-collapse" id="js-navbar-menu">
                    <ul class="nav navbar-nav navbar-right" id="navbar-nav">
                        <li><a class="btn-nav" href="#services-section">professions</a></li>
                        <li><a class="btn-nav" href="#portfolio-section">portfolio</a></li>
                        <li><a class="btn-nav" href="#testimonial-section">testimonials</a></li>
                        <li><a class="btn-nav" href="#team-section">Skills</a></li>
                        <li><a class="btn-nav" href="#contact-us-section">Contact</a></li>
                    </ul>
                </div>

                <div class="navbar-collapse-right hidden-xs " >
                    <ul class="nav navbar-nav navbar-right btn-scroll">
                        <li><a class="btn-nav" href="#contact-us-section">Get in Touch <i class="icon icon-arrow-right"></i></a></li>
                    </ul>
                </div>

            </div>
        </nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">