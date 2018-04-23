<?php
/**
 * calin-cohan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package calin-cohan
 */

if ( ! function_exists( 'calin_cohan_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function calin_cohan_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on calin-cohan, use a find and replace
		 * to change 'calin-cohan' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'calin-cohan', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'calin-cohan' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'calin_cohan_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'calin_cohan_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function calin_cohan_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'calin_cohan_content_width', 640 );
}
add_action( 'after_setup_theme', 'calin_cohan_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function calin_cohan_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'calin-cohan' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'calin-cohan' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'calin_cohan_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function calin_cohan_scripts() {

	// Owl Carousel 
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css' );

    // Icons
    wp_enqueue_style( 'icons', get_template_directory_uri() . '/icons/rik-icons/styles.css' );

    // Bootstrap
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );

    // FontAwesome
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/all.css' );

    // Normalize Styles
	wp_enqueue_style( 'general-styles', get_stylesheet_uri() );
	
	// General Styles
	wp_enqueue_style( 'calin-cohan-styles', get_template_directory_uri() . '/css/style.css' );
	
	// Responsive Styles
	wp_enqueue_style( 'calin-cohan-responsive', get_template_directory_uri() . '/css/responsive.css' );

	// Custom Styles
	wp_enqueue_style( 'calin-cohan-custom', get_template_directory_uri() . '/css/custom.css' );

	wp_enqueue_script( 'calin-cohan-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'calin_cohan_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Remove Admin Bar
add_filter('show_admin_bar', false);

// Stop Debugging
define( 'WP_DEBUG', false );