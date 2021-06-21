<?php
/**
 * Enqueued files.
 *
 * @package Dkjensen\Hack
 */

namespace Dkjensen\Hack\Functions;

/**
 * Enqueued assets
 *
 * @return void
 */
function hack_scripts() {
	// phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
	wp_enqueue_style( 'noto-sans', '//fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap' );
	// phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
	wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.15.3/css/all.css' );
	wp_enqueue_style( 'hack-style', get_stylesheet_uri(), array(), HACK_VERSION );
	wp_enqueue_style( 'hack-main', get_stylesheet_directory_uri() . '/assets/css/main.css', array( 'hack-style' ), HACK_VERSION );

	wp_enqueue_script( 'hack-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery' ), HACK_VERSION, true );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\hack_scripts' );
