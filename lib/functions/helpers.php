<?php
/**
 * Helper functions.
 *
 * @package Dkjensen\Hack
 */

namespace Dkjensen\Hack\Functions;

/**
 * Return the #HACK name
 *
 * @param boolean $current_year Whether to show the current year.
 * @return string
 */
function hack_name_tag( $current_year = false ) {
	return sprintf( '<span class="hack-name-tag">#HACK%s</span>', esc_html( $current_year ? gmdate( 'Y' ) : '2021' ) );
}
