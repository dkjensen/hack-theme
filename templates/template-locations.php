<?php
/**
 * Template Name: Locations
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\get_location_region_link;
use function Dkjensen\Hack\Functions\get_hack_locations;

$hack_locations = get_hack_locations();

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="section section-locations-one">
				<div class="wrap">
					<div class="row">
						<div class="column one-third">
							<h1 class="margin-bottom-xs"><?php esc_html_e( 'Locations', 'hack' ); ?></h1>
							<p class="intro-text"><?php esc_html_e( 'The Indigitous team is here to help you kick off your Hackathon. Please reach out to us if you need specific guidance from our team.', 'hack' ); ?></p>
							<p class="intro-text">
								<?php esc_html_e( 'Don’t see your city?', 'hack' ); ?> <br>
								<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'lead' ) ) ); ?>" class="text-color"><?php esc_html_e( 'Bring #HACK2021 to your city', 'hack' ); ?></a>
							</p>

							<?php
                            // phpcs:ignore
                            foreach( $hack_locations as $region => $_hack_locations ) {
								?>

								<div class="accordion data-section-id="<?php echo esc_attr( $region ); ?>">
									<div class="accordion-header"><?php echo esc_html( $region ); ?></div>
									<div class="accordion-content">
										<?php
										foreach ( $_hack_locations as $hack_location ) {
											$hack_location_link = get_term_link( $hack_location->slug, 'location' );

											if ( ! is_wp_error( $hack_location_link ) ) {
												printf( '<h3><a href="%s">- %s</a></h3>', esc_url( $hack_location_link ), esc_html( $hack_location->name ) );
											}
										}
										?>
									</div>
								</div>

								<?php
							}
							?>
						</div>
						<div class="column seven-twelfths offset-1">
							<?php
                            // phpcs:ignore
							foreach ( $hack_locations as $region => $_hack_locations ) {
								$hack_location_count = count( $_hack_locations );
								?>

								<div class="section-locations-one-target" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/locations/hack-location-' . sanitize_title_with_dashes( $region ) . '-map.svg' ) ); ?>">
									<a href="<?php echo esc_url( get_location_region_link( $region ) ); ?>" class="section-locations-one-target--link"></a>
									<h2><?php echo esc_html( $region ); ?></h2>
									<p>
										<?php
										/* translators: %d Number of locations */
										echo esc_html( sprintf( _n( '%s location', '%s locations', $hack_location_count, 'hack' ), number_format_i18n( $hack_location_count ) ) );
										?>
									</p>
								</div>

								<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</article>

		<?php
	endwhile;
endif;

get_footer();
