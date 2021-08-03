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

	$excerpt_length = 55;

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

/**
 * Get the link for a given region
 *
 * @param string $region Region to get link for
 * @return string
 */
function get_location_region_link( $region ) {
	$region = sanitize_title_with_dashes( $region );

	return home_url( 'locations/' . $region . '/' );
}

/**
 * Get the region name
 *
 * @param string $slug Slug of the region.
 * @return string
 */
function get_region_name( $slug = '' ) {
	if ( ! $slug ) {
		$slug = get_query_var( 'region' );
	}

	switch ( $slug ) {
		case 'apac':
			$name = 'APAC';
			break;
		case 'africa':
			$name = 'Africa';
			break;
		case 'europe':
			$name = 'Europe';
			break;
		case 'latin-america':
			$name = 'Latin America';
			break;
		case 'north-america':
			$name = 'North America';
			break;
		case 'south-asia':
			$name = 'South Asia';
			break;
		default:
			$name = '';
	}

	return $name;
}

/**
 * Get formatted array of regions => locations
 *
 * @return array
 */
function get_hack_locations() {
	global $wpdb;

	$cache = wp_cache_get( 'hack_locations' );

	if ( false !== $cache ) {
		return $cache;
	}

	$locations = $wpdb->get_results(
		"
		SELECT t.*,
			tt.*,
			tm.meta_value AS region
		FROM   {$wpdb->terms} AS t
			INNER JOIN {$wpdb->term_taxonomy} AS tt
					ON t.term_id = tt.term_id
			INNER JOIN {$wpdb->termmeta} AS tm
					ON t.term_id = tm.term_id
						AND tm.meta_key = 'region'
		WHERE  tt.taxonomy IN ( 'location' )
		ORDER  BY t.name ASC 
	"
	);

	$data = array();

	foreach ( $locations as $location ) {
		$region = $location->region ?? '';

		if ( $region ) {
			$data[ $region ][] = $location;
		}
	}

	ksort( $data );

	wp_cache_set( 'hack_locations', $data );

	return $data;
}

/**
 * Gets a location cover image
 *
 * @param int|string $location Location to get image for.
 * @return string
 */
function get_hack_location_image( $location ) {
	$location = get_term( $location, 'location' );

	$featured_image = get_term_meta( $location->term_id, 'featured_image', true );

	if ( $featured_image ) {
		return wp_get_attachment_image_url( $featured_image, 'full' );
	}

	$country = get_term_meta( $location->term_id, 'country_code', true );

	if ( file_exists( get_stylesheet_directory() . '/assets/img/location/' . sanitize_file_name( strtolower( $country . '-' . $location->slug . '.jpg' ) ) ) ) {
		return get_theme_file_uri( '/assets/img/location/' . sanitize_file_name( strtolower( $country . '-' . $location->slug . '.jpg' ) ) );
	} elseif ( file_exists( get_stylesheet_directory() . '/assets/img/location/' . sanitize_file_name( strtolower( $country . '.jpg' ) ) ) ) {
		return get_theme_file_uri( '/assets/img/location/' . sanitize_file_name( strtolower( $country . '.jpg' ) ) );
	}

	return '';
}
