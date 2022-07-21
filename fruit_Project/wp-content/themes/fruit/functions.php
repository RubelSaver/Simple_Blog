<?php
/**
 * fruit_shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fruit_shop
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fruit_shop_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on fruit_shop, use a find and replace
		* to change 'fruit_shop' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'fruit_shop', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'fruit_shop' ),
		)
	);



	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'fruit_shop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fruit_shop_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar1', 'fruit_shop' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fruit_shop' ),
			'before_widget' => '<div class="widget-search">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar2', 'fruit_shop' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'fruit_shop' ),
			'before_widget' => '<div class="blog-widget blog-categorie">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title2">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar3', 'fruit_shop' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'fruit_shop' ),
			'before_widget' => ' <div class="blog-widget blog-widget-post">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title3">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar4', 'fruit_shop' ),
			'id'            => 'sidebar-4',
			'description'   => esc_html__( 'Add widgets here.', 'fruit_shop' ),
			'before_widget' => ' <div class="blog-widget blog-widget-tags">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title4">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-Sidebar1', 'fruit_shop' ),
			'id'            => 'sidebar-5',
			'description'   => esc_html__( 'Add widgets here.', 'fruit_shop' ),
			'before_widget' => '  <div class="footer-text">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title5">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'footer-Sidebar2', 'fruit_shop' ),
			'id'            => 'sidebar-6',
			'description'   => esc_html__( 'Add widgets here.', 'fruit_shop' ),
			'before_widget' => ' <div class="footer-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title6">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fruit_shop_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function fruit_shop_scripts() {

	
	//Theme Css
	wp_enqueue_style( 'fruit_style', get_stylesheet_uri());

	wp_register_style( 'fruit_bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '5.2.0','all');
	wp_register_style( 'fruit_fontawesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.7.0', 'all');
	wp_register_style( 'fruit_meanmenu', get_template_directory_uri().'/assets/css/meanmenu.min.css', array(), "2.0.7", 'all');
	wp_register_style( 'fruit_Main_style', get_template_directory_uri().'/assets/css/style.css', array(), null, 'all');
	wp_register_style( 'fruit_responsive_style', get_template_directory_uri().'/assets/css/responsive.css', array(), null, 'all');

	wp_enqueue_style( 'fruit_bootstrap');
	wp_enqueue_style( 'fruit_fontawesome');
	wp_enqueue_style( 'fruit_meanmenu');
	wp_enqueue_style( 'fruit_Main_style');
	wp_enqueue_style( 'fruit_responsive_style');

	//Theme Js
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'fruit_bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), "5.2.0", true );
	wp_enqueue_script( 'fruit_meanmenu_js', get_template_directory_uri() . '/assets/js/meanmenu.min.js', array(), '2.1.0', true );
	wp_enqueue_script( 'fruit_custom_js', get_template_directory_uri() . '/assets/js/custom.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'fruit_shop_scripts' );


//(Custom post Type) Support for Theme options
require get_template_directory() . '/inc/theme-functions.php';



