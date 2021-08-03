<?php
/**
 * Pagination functions
 *
 * @package Dkjensen\Hack
 */

namespace Dkjensen\Hack\Functions;

/**
 * Numeric pagination
 *
 * @return void
 */
function hack_pagination() {
	global $wp_query;

	$total        = $wp_query->max_num_pages;
	$current_page = get_query_var( 'paged' );

	if ( $total > 1 ) {
		if ( ! $current_page ) {
			$current_page = 1;
		}

		$format = empty( get_option( 'permalink_structure' ) ) ? '&page=%#%' : 'page/%#%/';

		echo '<div class="pagination">';

        // phpcs:ignore
		echo paginate_links(
			array(
				'base'      => get_pagenum_link( 1 ) . '%_%',
				'format'    => $format,
				'current'   => $current_page,
				'total'     => $total,
				'end_size'  => 0,
				'prev_text' => '&lsaquo;',
				'next_text' => '&rsaquo;',
				'mid_size'  => 1,
				'type'      => 'list',
			)
		);

		echo '</div>';
	}
}
