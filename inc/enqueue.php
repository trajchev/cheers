<?php
/**
 * Cheers enqueue scripts
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'cheers_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function cheers_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		// wp_enqueue_style('font-awesome', 'href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"', array());
		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'cheers-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'validator', get_template_directory_uri() . '/js/validator.min.js', array('jquery'), $js_version, true );
		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'cheers-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'anime', get_template_directory_uri() . '/src/js/anime.min.js', array(), $js_version, true );
		wp_enqueue_script( 'cheers-animation', get_template_directory_uri() . '/js/animation.js', array('anime'), $js_version, true );
		wp_enqueue_script( 'cheers-products', get_template_directory_uri() . '/js/products.js', array('jquery'), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'Cheers_scripts' ).

add_action( 'wp_enqueue_scripts', 'cheers_scripts' );
