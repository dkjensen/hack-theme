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
		// case 'online-virtual':
		// $name = 'Online / Virtual';
		// break;
		default:
			$name = '';
	}

	return $name;
}

/**
 * Get the country name
 *
 * @param string $code Two letter country code of the country.
 * @return string
 */
function get_country_name( $code ) {
	$countries = array(
		'AF'         => 'Afghanistan',
		'AX'         => 'Aland Islands',
		'AL'         => 'Albania',
		'DZ'         => 'Algeria',
		'AS'         => 'American Samoa',
		'AD'         => 'Andorra',
		'AO'         => 'Angola',
		'AI'         => 'Anguilla',
		'AQ'         => 'Antarctica',
		'AG'         => 'Antigua And Barbuda',
		'AR'         => 'Argentina',
		'AM'         => 'Armenia',
		'AW'         => 'Aruba',
		'AU'         => 'Australia',
		'AT'         => 'Austria',
		'AZ'         => 'Azerbaijan',
		'BS'         => 'Bahamas',
		'BH'         => 'Bahrain',
		'BD'         => 'Bangladesh',
		'BB'         => 'Barbados',
		'BY'         => 'Belarus',
		'BE'         => 'Belgium',
		'BZ'         => 'Belize',
		'BJ'         => 'Benin',
		'BM'         => 'Bermuda',
		'BT'         => 'Bhutan',
		'BO'         => 'Bolivia',
		'BA'         => 'Bosnia And Herzegovina',
		'BW'         => 'Botswana',
		'BV'         => 'Bouvet Island',
		'BR'         => 'Brazil',
		'IO'         => 'British Indian Ocean Territory',
		'BN'         => 'Brunei Darussalam',
		'BG'         => 'Bulgaria',
		'BF'         => 'Burkina Faso',
		'BI'         => 'Burundi',
		'KH'         => 'Cambodia',
		'CM'         => 'Cameroon',
		'CA'         => 'Canada',
		'CV'         => 'Cape Verde',
		'KY'         => 'Cayman Islands',
		'CF'         => 'Central African Republic',
		'TD'         => 'Chad',
		'CL'         => 'Chile',
		'CN'         => 'China',
		'CX'         => 'Christmas Island',
		'CC'         => 'Cocos (Keeling) Islands',
		'CO'         => 'Colombia',
		'KM'         => 'Comoros',
		'CG'         => 'Congo',
		'CD'         => 'Congo, Democratic Republic',
		'CK'         => 'Cook Islands',
		'CR'         => 'Costa Rica',
		'CI'         => 'Cote D\'Ivoire',
		'HR'         => 'Croatia',
		'CU'         => 'Cuba',
		'CY'         => 'Cyprus',
		'CZ'         => 'Czech Republic',
		'DK'         => 'Denmark',
		'DJ'         => 'Djibouti',
		'DM'         => 'Dominica',
		'DO'         => 'Dominican Republic',
		'EC'         => 'Ecuador',
		'EG'         => 'Egypt',
		'SV'         => 'El Salvador',
		'GQ'         => 'Equatorial Guinea',
		'ER'         => 'Eritrea',
		'EE'         => 'Estonia',
		'ET'         => 'Ethiopia',
		'FK'         => 'Falkland Islands (Malvinas)',
		'FO'         => 'Faroe Islands',
		'FJ'         => 'Fiji',
		'FI'         => 'Finland',
		'FR'         => 'France',
		'GF'         => 'French Guiana',
		'PF'         => 'French Polynesia',
		'TF'         => 'French Southern Territories',
		'GA'         => 'Gabon',
		'GM'         => 'Gambia',
		'GE'         => 'Georgia',
		'DE'         => 'Germany',
		'GH'         => 'Ghana',
		'GI'         => 'Gibraltar',
		'GR'         => 'Greece',
		'GL'         => 'Greenland',
		'GD'         => 'Grenada',
		'GP'         => 'Guadeloupe',
		'GU'         => 'Guam',
		'GT'         => 'Guatemala',
		'GG'         => 'Guernsey',
		'GN'         => 'Guinea',
		'GW'         => 'Guinea-Bissau',
		'GY'         => 'Guyana',
		'HT'         => 'Haiti',
		'HM'         => 'Heard Island & Mcdonald Islands',
		'VA'         => 'Holy See (Vatican City State)',
		'HN'         => 'Honduras',
		'HK'         => 'Hong Kong',
		'HU'         => 'Hungary',
		'IS'         => 'Iceland',
		'IN'         => 'India',
		'ID'         => 'Indonesia',
		'IR'         => 'Iran, Islamic Republic Of',
		'IQ'         => 'Iraq',
		'IE'         => 'Ireland',
		'IM'         => 'Isle Of Man',
		'IL'         => 'Israel',
		'IT'         => 'Italy',
		'JM'         => 'Jamaica',
		'JP'         => 'Japan',
		'JE'         => 'Jersey',
		'JO'         => 'Jordan',
		'KZ'         => 'Kazakhstan',
		'KE'         => 'Kenya',
		'KI'         => 'Kiribati',
		'KR'         => 'Korea',
		'KW'         => 'Kuwait',
		'KG'         => 'Kyrgyzstan',
		'LA'         => 'Lao People\'s Democratic Republic',
		'LV'         => 'Latvia',
		'LB'         => 'Lebanon',
		'LS'         => 'Lesotho',
		'LR'         => 'Liberia',
		'LY'         => 'Libyan Arab Jamahiriya',
		'LI'         => 'Liechtenstein',
		'LT'         => 'Lithuania',
		'LU'         => 'Luxembourg',
		'MO'         => 'Macao',
		'MK'         => 'Macedonia',
		'MG'         => 'Madagascar',
		'MW'         => 'Malawi',
		'MY'         => 'Malaysia',
		'MV'         => 'Maldives',
		'ML'         => 'Mali',
		'MT'         => 'Malta',
		'MH'         => 'Marshall Islands',
		'MQ'         => 'Martinique',
		'MR'         => 'Mauritania',
		'MU'         => 'Mauritius',
		'YT'         => 'Mayotte',
		'MX'         => 'Mexico',
		'FM'         => 'Micronesia, Federated States Of',
		'MD'         => 'Moldova',
		'MC'         => 'Monaco',
		'MN'         => 'Mongolia',
		'ME'         => 'Montenegro',
		'MS'         => 'Montserrat',
		'MA'         => 'Morocco',
		'MZ'         => 'Mozambique',
		'MM'         => 'Myanmar',
		'NA'         => 'Namibia',
		'NR'         => 'Nauru',
		'NP'         => 'Nepal',
		'NL'         => 'Netherlands',
		'AN'         => 'Netherlands Antilles',
		'NC'         => 'New Caledonia',
		'NZ'         => 'New Zealand',
		'NI'         => 'Nicaragua',
		'NE'         => 'Niger',
		'NG'         => 'Nigeria',
		'NU'         => 'Niue',
		'NF'         => 'Norfolk Island',
		'MP'         => 'Northern Mariana Islands',
		'NO'         => 'Norway',
		'OM'         => 'Oman',
		'PK'         => 'Pakistan',
		'PW'         => 'Palau',
		'PS'         => 'Palestinian Territory, Occupied',
		'PA'         => 'Panama',
		'PG'         => 'Papua New Guinea',
		'PY'         => 'Paraguay',
		'PE'         => 'Peru',
		'PH'         => 'Philippines',
		'PN'         => 'Pitcairn',
		'PL'         => 'Poland',
		'PT'         => 'Portugal',
		'PR'         => 'Puerto Rico',
		'QA'         => 'Qatar',
		'RE'         => 'Reunion',
		'RO'         => 'Romania',
		'RU'         => 'Russian Federation',
		'RW'         => 'Rwanda',
		'BL'         => 'Saint Barthelemy',
		'SH'         => 'Saint Helena',
		'KN'         => 'Saint Kitts And Nevis',
		'LC'         => 'Saint Lucia',
		'MF'         => 'Saint Martin',
		'PM'         => 'Saint Pierre And Miquelon',
		'VC'         => 'Saint Vincent And Grenadines',
		'WS'         => 'Samoa',
		'SM'         => 'San Marino',
		'ST'         => 'Sao Tome And Principe',
		'SA'         => 'Saudi Arabia',
		'SN'         => 'Senegal',
		'RS'         => 'Serbia',
		'SC'         => 'Seychelles',
		'SL'         => 'Sierra Leone',
		'SG'         => 'Singapore',
		'SK'         => 'Slovakia',
		'SI'         => 'Slovenia',
		'SB'         => 'Solomon Islands',
		'SO'         => 'Somalia',
		'ZA'         => 'South Africa',
		'GS'         => 'South Georgia And Sandwich Isl.',
		'ES'         => 'Spain',
		'LK'         => 'Sri Lanka',
		'SD'         => 'Sudan',
		'SR'         => 'Suriname',
		'SJ'         => 'Svalbard And Jan Mayen',
		'SZ'         => 'Swaziland',
		'SE'         => 'Sweden',
		'CH'         => 'Switzerland',
		'SY'         => 'Syrian Arab Republic',
		'TW'         => 'Taiwan',
		'TJ'         => 'Tajikistan',
		'TZ'         => 'Tanzania',
		'TH'         => 'Thailand',
		'TL'         => 'Timor-Leste',
		'TG'         => 'Togo',
		'TK'         => 'Tokelau',
		'TO'         => 'Tonga',
		'TT'         => 'Trinidad And Tobago',
		'TN'         => 'Tunisia',
		'TR'         => 'Turkey',
		'TM'         => 'Turkmenistan',
		'TC'         => 'Turks And Caicos Islands',
		'TV'         => 'Tuvalu',
		'UG'         => 'Uganda',
		'UA'         => 'Ukraine',
		'AE'         => 'United Arab Emirates',
		'GB'         => 'United Kingdom',
		'US'         => 'United States',
		'UM'         => 'United States Outlying Islands',
		'UY'         => 'Uruguay',
		'UZ'         => 'Uzbekistan',
		'VU'         => 'Vanuatu',
		'VE'         => 'Venezuela',
		'VN'         => 'Viet Nam',
		'VG'         => 'Virgin Islands, British',
		'VI'         => 'Virgin Islands, U.S.',
		'WF'         => 'Wallis And Futuna',
		'EH'         => 'Western Sahara',
		'YE'         => 'Yemen',
		'ZM'         => 'Zambia',
		'ZW'         => 'Zimbabwe',
	);

	return $countries[ strtoupper( $code ) ] ?? '';
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
			tm.meta_value AS region,
			tm2.meta_value AS country_code,
			tm3.meta_value AS archived
		FROM   {$wpdb->terms} AS t
			INNER JOIN {$wpdb->term_taxonomy} AS tt
					ON t.term_id = tt.term_id
			INNER JOIN {$wpdb->termmeta} AS tm
					ON t.term_id = tm.term_id
						AND tm.meta_key = 'region'
			INNER JOIN {$wpdb->termmeta} AS tm2
					ON t.term_id = tm2.term_id
						AND tm2.meta_key = 'country_code'
			LEFT JOIN {$wpdb->termmeta} AS tm3
					ON t.term_id = tm3.term_id
						AND tm3.meta_key = 'archived'
		WHERE  tt.taxonomy IN ( 'location' )
			AND ( tm3.meta_value != '1' OR tm3.meta_value IS NULL )
		ORDER  BY tm2.meta_value ASC, t.name
	"
	);

	$data = array();

	foreach ( $locations as $location ) {
		$region  = $location->region ?? '';
		$country = $location->country_code ?? '';

		if ( $region && $country ) {
			$data[ $region ][ $country ][] = $location;
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

/**
 * Gets a country cover image
 *
 * @param string $country Country to get image for.
 * @return string
 */
function get_hack_country_image( $country ) {
	if ( file_exists( get_stylesheet_directory() . '/assets/img/location/' . sanitize_file_name( strtolower( $country . '.jpg' ) ) ) ) {
		return get_theme_file_uri( '/assets/img/location/' . sanitize_file_name( strtolower( $country . '.jpg' ) ) );
	}

	return '';
}
