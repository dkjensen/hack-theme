<?php
/**
 * Shortcodes.
 *
 * @package Dkjensen\Hack
 */

namespace Dkjensen\Hack\Functions;

/**
 * Returns the current year
 *
 * @return string
 */
function current_year() {
	return gmdate( 'Y' );
}
add_shortcode( 'current-year', __NAMESPACE__ . '\current_year' );

/**
 * Execute shortcodes in widgets
 */
add_filter( 'widget_text', '\do_shortcode' );
add_filter( 'widget_text_content', 'do_shortcode' );
