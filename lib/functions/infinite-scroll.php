<?php
/**
 * Infinite scroll functions.
 *
 * @package Dkjensen\Hack
 */

namespace Dkjensen\Hack\Functions;

$hack_infinity_query = null;

function infinite_scroll_query() {
	global $hack_infinity_query;

	if ( is_page( 'impact' ) ) {
		add_filter( 'infinite_scroll_archive_supported', '__return_true', 50 );

		$hack_infinity_query = new \WP_Query(
			array(
				'post_type'       => 'story',
				'post_status'     => 'publish',
			)
		);
	}
}
add_action( 'template_redirect', __NAMESPACE__ . '\infinite_scroll_query', 0 );


function infinite_scroll_query_object( $query ) {
	global $hack_infinity_query;

	if ( is_a( $hack_infinity_query, 'WP_Query' ) ) {
		return $hack_infinity_query;
	}

	return $query;
}
add_filter( 'infinite_scroll_query_object', __NAMESPACE__ . '\infinite_scroll_query_object' );
