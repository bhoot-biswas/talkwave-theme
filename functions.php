<?php
/**
 * talkwavwe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package talkwavwe
 * @since talkwavwe 1.0
 */

if ( ! function_exists( 'talkwave_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since talkwavwe 1.0
	 *
	 * @return void
	 */
	function talkwave_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'talkwavwe' );
	}

endif;

add_action( 'after_setup_theme', 'talkwave_support' );

if ( ! function_exists( 'talkwave_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since talkwavwe 1.0
	 *
	 * @return void
	 */
	function talkwave_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'talkwavwe-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'talkwavwe-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'talkwave_styles' );