<?php
/**
 * Rewrite rules functions.
 *
 * @package Dkjensen\Hack
 */

namespace Dkjensen\Hack\Functions;

/**
 * Register rewrite rules
 *
 * @return void
 */
function rewrite_rules() {
	add_rewrite_rule( '^locations/([a-z]+)/?$', 'index.php?region=$matches[1]', 'top' );
}
add_action( 'init', __NAMESPACE__ . '\rewrite_rules' );

/**
 * Register query vars
 *
 * @param array $query_vars Existing query vars.
 * @return array
 */
function query_vars( $query_vars ) {
	$query_vars[] = 'region';

	return $query_vars;
}
add_filter( 'query_vars', __NAMESPACE__ . '\query_vars' );

/**
 * Filter the template
 *
 * @param string $template Template to include.
 * @return string
 */
function template_include( $template ) {
	global $wp_query;

	if ( get_query_var( 'region' ) ) {
		$template = locate_template( 'templates/template-region.php' );
	}

	return $template;
}
add_filter( 'template_include', __NAMESPACE__ . '\template_include' );
