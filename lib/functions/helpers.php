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

/**
 * Bypass password protected excerpt display
 *
 * @param int|WP_Post|null $post The post to get excerpt from.
 * @return string
 */
function hack_post_excerpt( $post ) {
	$post = get_post( $post );
	$text = $post->post_content;

	$text = strip_shortcodes( $text );
	$text = excerpt_remove_blocks( $text );

	/** This filter is documented in wp-includes/post-template.php */
	$text = apply_filters( 'the_content', $text );
	$text = str_replace( ']]>', ']]&gt;', $text );

	/* translators: Maximum number of words used in a post excerpt. */
	$excerpt_length = (int) _x( '55', 'excerpt_length' );

	/**
	 * Filters the maximum number of words in a post excerpt.
	 *
	 * @since 2.7.0
	 *
	 * @param int $number The maximum number of words. Default 55.
	 */
	$excerpt_length = (int) apply_filters( 'excerpt_length', $excerpt_length );

	/**
	 * Filters the string in the "more" link displayed after a trimmed excerpt.
	 *
	 * @since 2.9.0
	 *
	 * @param string $more_string The string shown within the more link.
	 */
	$excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
	$text         = wp_trim_words( $text, $excerpt_length, $excerpt_more );

	$excerpt = apply_filters( 'get_the_excerpt', $text, $post );

	return $excerpt;
}

/**
 * Extract YouTube video ID from content
 *
 * @param string $content Content to search.
 * @return bool|string
 */
function get_youtube_video_id( $content ) {
	preg_match( '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/\s]{11})%i', esc_html( get_the_content() ), $match );

	if ( ! empty( $match[1] ) ) {
		return $match[1];
	}

	return false;
}
