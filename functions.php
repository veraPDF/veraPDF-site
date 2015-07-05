<?php
/**
 * Verapdf functions and definitions
 *
 * @package Verapdf
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( 'verapdf_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function verapdf_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	/**
	 * Add default posts and comments RSS feed links to head
	*/
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );

	/**
	 * Enable support for Post Formats
	*/
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	*/
	add_theme_support( 'custom-background', apply_filters( 'verapdf_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Verapdf, use a find and replace
	 * to change 'verapdf' to the name of your theme in all the template files
	*/
	load_theme_textdomain( 'verapdf', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Header bottom menu', 'verapdf' ),
	) );

	// Disable to admin bar
	add_filter('show_admin_bar', '__return_false');

}
endif; // verapdf_setup
add_action( 'after_setup_theme', 'verapdf_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function verapdf_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'verapdf' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'verapdf_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function verapdf_scripts() {

	// Import the necessary TK Bootstrap WP CSS additions
	wp_enqueue_style( 'verapdf-bootstrap-wp', get_template_directory_uri() . '/includes/css/bootstrap-wp.css' );

	// load bootstrap css
	wp_enqueue_style( 'verapdf-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.min.css' );

	// load Font Awesome css
	wp_enqueue_style( 'verapdf-font-awesome', get_template_directory_uri() . '/includes/css/font-awesome.min.css', false, '4.1.0' );

	// load Verapdf styles
	wp_enqueue_style( 'verapdf-style', get_stylesheet_uri() );

	// Load special front page css
	if ( is_front_page() ) {
		wp_enqueue_style( 'verapdf-cover', get_template_directory_uri() . '/includes/css/bootstrap-cover.css' );
	}

	// Override JQuery and load after page footer
	if( !is_admin() ){
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), false, '1.11.3', true);
		wp_enqueue_script('jquery');
	}

	// load bootstrap js after page footer
	wp_enqueue_script('verapdf-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.min.js', array('jquery'), '1.11.3', true );

	// load bootstrap wp js
	wp_enqueue_script( 'verapdf-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery'), '1.11.3', true );

	wp_enqueue_script( 'verapdf-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'verapdf-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202', true );
	}
	// Fix for MS surface
	wp_enqueue_script( '', get_template_directory_uri() . '/includes/js/ie10-viewport-bug-workaround.js', array(), '', true);
}
add_action( 'wp_enqueue_scripts', 'verapdf_scripts' );

/**
 * Remove emoji styles
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';
