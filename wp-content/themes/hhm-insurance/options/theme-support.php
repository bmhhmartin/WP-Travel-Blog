<?php

function hhm_insurance_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
    add_theme_support('custom-logo', array(
        'height'      => 50,
        'width'       => 120,
        'flex-width'  => false,
        'flex-height' => false,
    ));

	register_nav_menus(array(
        'main-menu' => __('Main Menu', 'hhm_insurance'),
    ));
    

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