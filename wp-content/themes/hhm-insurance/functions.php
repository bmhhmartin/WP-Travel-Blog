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

include get_theme_file_path( './options/theme-support.php' );
include get_theme_file_path( './options/header-info.php' );
include get_theme_file_path( './options/enqueue-files.php' );
include get_theme_file_path( './widgets/footer-widget.php' );
include get_theme_file_path( './inc/acf-option.php' );

/**
 * Sample translation-ready string
 */
function hhm_insurance_sample_text() {
	echo __( 'Welcome to HHM Insurance!', 'hhm_insurance' );
}
