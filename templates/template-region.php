<?php
/**
 * Region template
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\get_hack_locations;
use function Dkjensen\Hack\Functions\get_region_name;
use function Dkjensen\Hack\Functions\get_country_name;
use function Dkjensen\Hack\Functions\get_hack_country_image;

$hack_locations        = get_hack_locations();
$hack_region_locations = $hack_locations[ get_region_name() ] ?? array();

get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="section section-region-one">
		<div class="wrap">
			<div class="row">
				<div class="column one-third">
					<p class="breadcrumbs">
						<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'locations' ) ) ); ?>"><?php esc_html_e( 'Locations', 'hack' ); ?></a>
						<span>
						> <?php echo esc_html( get_region_name() ); ?>
						</span>
					</p>
					<h2 class="margin-bottom-xs"><?php echo esc_html( get_region_name() ); ?></h2>
					<p class="intro-text">
						<?php
						/* translators: %d Number of locations */
						echo esc_html( sprintf( _n( '%s location', '%s locations', count( $hack_region_locations ), 'hack' ), number_format_i18n( count( $hack_region_locations ) ) ) );
						?>
					</p>
					<p class="margin-top-l margin-bottom-l">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/locations/hack-location-' . sanitize_title_with_dashes( $region ) . '-map.svg' ) ); ?>" />
					</p>
					<p class="intro-text"><?php esc_html_e( 'It’s happening! More locations are being added every day as hosts and participants sign up. Browse the current locations to see where #HACK2021 will take place.', 'hack' ); ?></p>
					<p class="intro-text">
						<?php esc_html_e( 'Don’t see your city?', 'hack' ); ?> <br>
						<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'lead' ) ) ); ?>" class="text-color"><?php esc_html_e( 'Bring #HACK2021 to your city', 'hack' ); ?></a>
					</p>
				</div>
				<div class="column seven-twelfths offset-1">
					<?php
					// phpcs:ignore
					foreach( $hack_locations as $region => $countries ) {
						if ( $region === get_region_name() ) {
							foreach ( $countries as $country_code => $locations ) {
								?>

							<div class="accordion">
								<div class="accordion-header">
									<span>
										<?php

										$flag = get_theme_file_uri( 'assets/img/flags/' . strtolower( $country_code ) . '.svg' );

										if ( count( $locations ) > 1 ) {
											printf( '<img src="%s" width="40" />%s', esc_url( $flag ), esc_html( get_country_name( $country_code ) ) );
										} else {
											printf( '<a href="%s"><img src="%s" width="40" />%s</a>', esc_url( get_term_link( absint( $locations[0]->term_id ), 'location' ) ), esc_url( $flag ), esc_html( get_country_name( $country_code ) ) );
										}

										?>
										</span>
								</div>
								<?php if ( count( $locations ) > 1 ) { ?>

								<div class="accordion-content">
									<div class="row">
										<?php
										foreach ( $locations as $location ) {
											printf( '<div class="column one-half"><div><a href="%s">%s</a></div></div>', get_term_link( absint( $location->term_id ), 'location' ), $location->name );
										}
										?>
									</div>
								</div>

								<?php } ?>
							</div>

								<?php
							}
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</article>

<?php
get_footer();
