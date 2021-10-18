<?php
/**
 * Queries functions.
 *
 * @package Dkjensen\Hack
 */

namespace Dkjensen\Hack\Functions;

/**
 * Modify resources posts per page query
 *
 * @param WP_Query $query The query to modify.
 * @return void
 */
function resources_query( $query ) {
	if ( \is_admin() ) {
		return;
	}
	if ( $query->is_main_query() && isset( $query->query_vars['post_type'] ) && 'resource' === $query->query_vars['post_type'] ) {
		$query->set( 'posts_per_page', 24 );
	}
}
add_action( 'pre_get_posts', __NAMESPACE__ . '\resources_query' );
