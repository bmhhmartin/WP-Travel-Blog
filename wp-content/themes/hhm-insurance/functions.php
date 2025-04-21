<?php
/**
 * Theme functions and definitions
 *
 * @package HHM_Insurance
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue scripts and styles.
 */
function hhm_insurance_enqueue_scripts() {

}
add_action( 'wp_enqueue_scripts', 'hhm_insurance_enqueue_scripts' );

/**
 * Theme setup.
 */
function hhm_insurance_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// Register primary menu.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'hhm_insurance' ),
	) );

	// Switch default core markup for search form, comment form, and comments.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
add_action( 'after_setup_theme', 'hhm_insurance_theme_setup' );


function custom_enqueue_styles() {
    // Preconnect for Google Fonts
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap');
    wp_enqueue_style('font-awesome','https://use.fontawesome.com/releases/v5.15.4/css/all.css', array(),'5.15.4');
    wp_enqueue_style('bootstrap-icons','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',array(),'1.4.1');
    wp_enqueue_style('animate-css',get_template_directory_uri() . '/assets/lib/animate/animate.min.css');
    wp_enqueue_style('lightbox-css',get_template_directory_uri() . '/assets/lib/lightbox/css/lightbox.min.css');
    wp_enqueue_style('owl-carousel-css',get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', array(), null);

    wp_enqueue_script('jquery-cdn','https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-bundle','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/lib/wow/wow.min.js', array('jquery'), null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', array('jquery'), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/lib/counterup/counterup.min.js', array('jquery', 'waypoints'), null, true);
    wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/assets/lib/lightbox/js/lightbox.min.js', array(), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_styles');





/**
 * Sample translation-ready string
 */
function hhm_insurance_sample_text() {
	echo __( 'Welcome to HHM Insurance!', 'hhm_insurance' );
}
