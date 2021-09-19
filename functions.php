<?php
/**
 * Theme functions.
 *
 * @package Dkjensen\Hack
 */

if ( ! defined( 'HACK_VERSION' ) ) {
	$hack_version = ! empty( wp_get_theme()->get( 'Version' ) ) ? wp_get_theme()->get( 'Version' ) : '0.0.0-development';

	// Replace the version number of the theme on each release.
	define( 'HACK_VERSION', $hack_version );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function hack_setup() {
	// Make theme available for translation.
	load_theme_textdomain( 'hack', get_template_directory() . '/assets/lang' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	* Let WordPress manage the document title.
	* This theme does not use a hard-coded <title> tag in the document head,
	* WordPress will provide it for us.
	*/
	add_theme_support( 'title-tag' );

	/**
	 * Add post-formats support.
	 */
	add_theme_support(
		'post-formats',
		array(
			'link',
			'aside',
			'gallery',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat',
		)
	);

	/*
	* Enable support for Post Thumbnails on posts and pages.
	*
	* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	*/
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 720, 720 );
	add_image_size( '16:9', 800, 450, true );

	register_nav_menus(
		array(
			'primary'     => esc_html__( 'Primary menu', 'hack' ),
			'footer-join' => esc_html__( 'Footer join', 'hack' ),
		)
	);

	add_theme_support(
		'infinite-scroll',
		array(
			'container'      => 'content',
			'wrapper'        => false,
			'render'         => function() {
				while ( have_posts() ) {
					the_post();

					if ( false === get_template_part( 'template-parts/' . get_post_type(), get_post_format() ) ) {
						get_template_part( 'template-parts/card' );
					}
				}
			},
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	$logo_width  = 300;
	$logo_height = 100;

	add_theme_support(
		'custom-logo',
		array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => false,
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	$editor_stylesheet_path = './assets/css/style-editor.css';

	// Enqueue editor styles.
	add_editor_style( $editor_stylesheet_path );

	// Add custom editor font sizes.
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name'      => esc_html__( 'Extra small', 'hack' ),
				'shortName' => esc_html_x( 'XS', 'Font size', 'hack' ),
				'size'      => 16,
				'slug'      => 'extra-small',
			),
			array(
				'name'      => esc_html__( 'Small', 'hack' ),
				'shortName' => esc_html_x( 'S', 'Font size', 'hack' ),
				'size'      => 18,
				'slug'      => 'small',
			),
			array(
				'name'      => esc_html__( 'Normal', 'hack' ),
				'shortName' => esc_html_x( 'M', 'Font size', 'hack' ),
				'size'      => 20,
				'slug'      => 'normal',
			),
			array(
				'name'      => esc_html__( 'Large', 'hack' ),
				'shortName' => esc_html_x( 'L', 'Font size', 'hack' ),
				'size'      => 24,
				'slug'      => 'large',
			),
			array(
				'name'      => esc_html__( 'Extra large', 'hack' ),
				'shortName' => esc_html_x( 'XL', 'Font size', 'hack' ),
				'size'      => 40,
				'slug'      => 'extra-large',
			),
			array(
				'name'      => esc_html__( 'Huge', 'hack' ),
				'shortName' => esc_html_x( 'XXL', 'Font size', 'hack' ),
				'size'      => 96,
				'slug'      => 'huge',
			),
			array(
				'name'      => esc_html__( 'Gigantic', 'hack' ),
				'shortName' => esc_html_x( 'XXXL', 'Font size', 'hack' ),
				'size'      => 144,
				'slug'      => 'gigantic',
			),
		)
	);

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'ffffff',
		)
	);

	// Editor color palette.
	$black     = '#000000';
	$dark_gray = '#28303D';
	$gray      = '#39414D';
	$green     = '#D1E4DD';
	$blue      = '#D1DFE4';
	$purple    = '#D1D1E4';
	$red       = '#E4D1D1';
	$orange    = '#E4DAD1';
	$yellow    = '#EEEADD';
	$white     = '#FFFFFF';

	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_html__( 'Black', 'hack' ),
				'slug'  => 'black',
				'color' => $black,
			),
			array(
				'name'  => esc_html__( 'Dark gray', 'hack' ),
				'slug'  => 'dark-gray',
				'color' => $dark_gray,
			),
			array(
				'name'  => esc_html__( 'Gray', 'hack' ),
				'slug'  => 'gray',
				'color' => $gray,
			),
			array(
				'name'  => esc_html__( 'Green', 'hack' ),
				'slug'  => 'green',
				'color' => $green,
			),
			array(
				'name'  => esc_html__( 'Blue', 'hack' ),
				'slug'  => 'blue',
				'color' => $blue,
			),
			array(
				'name'  => esc_html__( 'Purple', 'hack' ),
				'slug'  => 'purple',
				'color' => $purple,
			),
			array(
				'name'  => esc_html__( 'Red', 'hack' ),
				'slug'  => 'red',
				'color' => $red,
			),
			array(
				'name'  => esc_html__( 'Orange', 'hack' ),
				'slug'  => 'orange',
				'color' => $orange,
			),
			array(
				'name'  => esc_html__( 'Yellow', 'hack' ),
				'slug'  => 'yellow',
				'color' => $yellow,
			),
			array(
				'name'  => esc_html__( 'White', 'hack' ),
				'slug'  => 'white',
				'color' => $white,
			),
		)
	);

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support for custom line height controls.
	add_theme_support( 'custom-line-height' );

	// Add support for experimental link color control.
	add_theme_support( 'experimental-link-color' );

	// Add support for experimental cover block spacing.
	add_theme_support( 'custom-spacing' );

	// Add support for custom units.
	// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
	add_theme_support( 'custom-units' );
}
add_action( 'after_setup_theme', 'hack_setup' );

function hack_widgets() {
	register_sidebars(
		4,
		array(
			'id'            => 'footer',
			'name'          => esc_html__( 'Footer %d', 'hack' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title">',
			'after_title'   => '</div>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'footer-social',
			'name'          => esc_html__( 'Footer Social', 'hack' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title">',
			'after_title'   => '</div>',
		)
	);

	register_sidebars(
		2,
		array(
			'id'            => 'below-footer',
			'name'          => esc_html__( 'Below Footer %d', 'hack' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title">',
			'after_title'   => '</div>',
		)
	);
}
add_action( 'widgets_init', 'hack_widgets' );

require_once 'lib/config/globals.php';

require_once 'lib/functions/enqueue.php';
require_once 'lib/functions/helpers.php';
require_once 'lib/functions/shortcodes.php';
require_once 'lib/functions/markup.php';
require_once 'lib/functions/download.php';
require_once 'lib/functions/ajax.php';
require_once 'lib/functions/infinite-scroll.php';
require_once 'lib/functions/rewrite-rules.php';
require_once 'lib/functions/pagination.php';
require_once 'lib/functions/queries.php';

// add_filter(
// 'gform_notification',
// function( $notification, $form, $entry ) {

// error_log( get_post_meta( get_the_ID(), 'contact_email', true ) );

// $notification['to'] = get_post_meta( get_the_ID(), 'contact_email', true );

// return $notification;

// },
// 10,
// 3
// );
