<?php
/**
 * Markup functions.
 *
 * @package Dkjensen\Hack
 */

namespace Dkjensen\Hack\Functions;

/**
 * Enqueued assets
 *
 * @return void
 */
function body_classes( $classes ) {
	$template = \get_page_template_slug();

	if ( in_array( $template, array( 'templates/template-about.php', 'templates/template-projects.php' ) ) ) {
		$classes[] = 'transparent-header';
	}

	return $classes;
}
add_filter( 'body_class', __NAMESPACE__ . '\body_classes' );
