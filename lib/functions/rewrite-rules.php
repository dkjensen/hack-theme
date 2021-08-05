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
	$resource_data = get_post_type_object( 'resource' );

	add_rewrite_rule( '^locations/([a-z0-9\-]+)/?$', 'index.php?region=$matches[1]', 'top' );

	if ( ! empty( $resource_data->has_archive ) ) {
		add_rewrite_rule( '^' . $resource_data->has_archive . '/leads/?$', 'index.php?post_type=resource&leads=1', 'top' );
		add_rewrite_rule( '^' . $resource_data->has_archive . '/leads/page/([0-9]{1,})/?$', 'index.php?post_type=resource&paged=$matches[1]&leads=1', 'top' );
	}
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
	$query_vars[] = 'leads';

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
	if ( get_query_var( 'region' ) ) {
		$template = locate_template( 'templates/template-region.php' );
	}

	return $template;
}
add_filter( 'template_include', __NAMESPACE__ . '\template_include' );

/**
 * Filter resource visibility to only city leads or not
 *
 * @param WP_Query $wp_query Query to modify.
 * @return void
 */
function filter_resource_visibility( $wp_query ) {
	if ( ( defined( 'DOING_AJAX' ) && DOING_AJAX ) || is_admin() || ! $wp_query->is_main_query() || 'resource' !== $wp_query->query_vars['post_type'] ) {
		return;
	}

	$leads = get_query_var( 'leads' );

	$meta_query = (array) $wp_query->get( 'meta_query' );

	if ( $leads ) {
		$meta_query[] = array(
			'key'     => 'visibility',
			'value'   => '1',
			'compare' => '=',
		);
	} else {
		$meta_query['relation'] = 'OR';

		$meta_query[] = array(
			'key'     => 'visibility',
			'value'   => '0',
			'compare' => '=',
		);

		$meta_query[] = array(
			'key'     => 'visibility',
			'value'   => '0',
			'compare' => 'NOT EXISTS',
		);
	}

	$wp_query->set( 'meta_query', $meta_query );
}
add_action( 'pre_get_posts', __NAMESPACE__ . '\filter_resource_visibility' );
