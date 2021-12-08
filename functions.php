<?php
/**
 * TIMfilp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TIMfilp
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'timfilp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function timfilp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on TIMfilp, use a find and replace
		 * to change 'timfilp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'timfilp', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'timfilp' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'timfilp_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
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
endif;
add_action( 'after_setup_theme', 'timfilp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function timfilp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'timfilp_content_width', 640 );
}
add_action( 'after_setup_theme', 'timfilp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function timfilp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'infosSite', 'FlipTIM' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'FlipTIM' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'NavFooter', 'FlipTIM' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'FlipTIM' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'LocalisationFooter', 'FlipTIM' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'FlipTIM' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'ReseauxSociaux', 'FlipTIM' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'FlipTIM' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'timfilp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function timfilp_scripts() {
	wp_enqueue_style( 'timfilp-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'timfilp-style', 'rtl', 'replace' );

	wp_enqueue_script( 'timfilp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'timfilp-afficherDescProf', get_template_directory_uri() . '/js/afficherDescProf.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'timfilp-afficherDescEmplois', get_template_directory_uri() . '/js/afficherDescEmplois.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'timfilp-afficherDescCours', get_template_directory_uri() . '/js/afficherDescCours.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'timfilp-afficherTypesCours', get_template_directory_uri() . '/js/afficherTypesCours.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'theme4w4-burger', get_template_directory_uri() . '/js/burger.js', array(), _S_VERSION, true ); 


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'timfilp_scripts' );

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


function extraireAccueil ($query){
	if($query->is_front_page() && $query->is_main_query() ){
		$query->set('category_name', 'accueil' );
		$query->set('post_per_page', -1 ); // -1 indique d'afficher tous les d'article
		$query->set('meta_key', 'ordre' );
		$query->set('orderby', array('meta_value' => 'ASC') );
	}
}
add_action('pre_get_posts','extraireAccueil');

function extraireAccueil1 ($query){
	if($query->is_category(3) && $query->is_main_query() ){
		$query->set('category_name', 'accueil' );
		$query->set('post_per_page', -1 ); // -1 indique d'afficher tous les d'article
		$query->set('meta_key', 'ordre' );
		$query->set('orderby', array('meta_value' => 'ASC') );
	}
}
add_action('pre_get_posts','extraireAccueil1');


function extraireCours($query){
	if(is_category(9) && $query->is_main_query() ){
		$query->set('post_per_page', -1 ); // -1 indique d'afficher tous les d'article
		$query->set('meta_key', 'ordre' );
		$query->set('orderby', array('meta_value' => 'ASC') );
	}
}
add_action('pre_get_posts','extraireCours');


function extraireCommunaute($query){
	if(is_category(10) && $query->is_main_query() ){
		$query->set('post_per_page', -1 ); // -1 indique d'afficher tous les d'article
		$query->set('meta_key', 'ordre' );
		$query->set('orderby', array('meta_value' => 'ASC') );
	}
}
add_action('pre_get_posts','extraireCommunaute');


function extraireFutur($query){
	if(is_category(6) && $query->is_main_query() ){
		$query->set('post_per_page', -1 ); // -1 indique d'afficher tous les d'article
		$query->set('meta_key', 'ordre' );
		$query->set('orderby', array('meta_value' => 'ASC') );
	}
}
add_action('pre_get_posts','extraireFutur');