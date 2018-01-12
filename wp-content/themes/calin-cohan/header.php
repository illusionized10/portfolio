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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'calin-cohan' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="site-branding">

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">

		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">