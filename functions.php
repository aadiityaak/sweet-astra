<?php
/**
 * Sweet Astra Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sweet Astra
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_SWEET_ASTRA_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'sweet-astra-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_SWEET_ASTRA_VERSION, 'all' );
	wp_enqueue_style( 'sweet-sweet-css', get_stylesheet_directory_uri() . '/assets/css/sweet.css', array('sweet-astra-theme-css'), CHILD_THEME_SWEET_ASTRA_VERSION, 'all' );
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), CHILD_THEME_SWEET_ASTRA_VERSION, 'all' );

	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), CHILD_THEME_SWEET_ASTRA_VERSION, true );
	wp_enqueue_script( 'sweet-sweet-js', get_stylesheet_directory_uri() . '/assets/js/sweet.js', array('jquery'), CHILD_THEME_SWEET_ASTRA_VERSION, true );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );