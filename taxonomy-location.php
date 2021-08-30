<?php
/**
 * Location Template File
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\get_hack_location_image;
use function Dkjensen\Hack\Functions\hack_name_tag;
use function Dkjensen\Hack\Functions\get_hack_locations;

$hack_locations = get_hack_locations();

get_header();
?>

<div class="section section-location-one">

	<div class="wrap">
		<p class="breadcrumbs">
								<a href="/locations/
								<?php
								echo esc_html(
									sanitize_title_with_dashes(
										strtolower(
											get_term_meta( get_queried_object_id(), 'region', true )
										)
									)
								);
								?>
							"><?php echo esc_html( get_term_meta( get_queried_object_id(), 'region', true ) ); ?></a>
								<span>
								> <?php echo get_the_archive_title(); ?>
								</span>
							</p>
		<div class="section-location-one-wrap" style="background-image: url(<?php echo esc_url( get_hack_location_image( get_queried_object_id() ) ); ?>);">
			<div class="section-location-one-wrap--content">
				<h1>
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/' . sanitize_file_name( strtolower( get_term_meta( get_queried_object_id(), 'country_code', true ) ) . '.svg' ) ) ); ?>" width="45" />
					<?php echo get_the_archive_title(); ?>
				</h1>
				<div class="intro-text">
					<?php echo term_description() ? term_description() : apply_filters( 'the_content', esc_html__( 'The Indigitous team is here to help you kick off your Hackathon. Please reach out to us if you need specific guidance from our team.', 'hack' ) ); ?>
				</div>
				<div class="section-location-one-wrap--content-action">
					<a href="<?php echo esc_url( 'https://indigitous.typeform.com/to/QkVDWhea#source=hackwebsite-' . strtolower( get_term_meta( get_queried_object_id(), 'country_code', true ) ) . '-' . sanitize_title_with_dashes( get_the_archive_title() ) ); ?>" target="_blank" class="button">
						<?php
						/* translators: %s #HACK name tag */
						printf( esc_html__( 'Join %s', 'hack' ), hack_name_tag() );
						?>
					</a>
					<h3>
						<?php
							/* translators: %s Name of location (context: Join #HACK In Bangkok) */
							printf( esc_html__( 'In %s', 'hack' ), esc_html( get_the_archive_title() ) );
						?>
					</h3>
				</div>
				<div class="location-meta-row">
					<span class="location-event-tag">
					<?php
					$event_type = get_term_meta( get_queried_object_id(), 'event_type', true );
					$event_type = empty( $event_type ) ? 'Virtual' : $event_type;
					echo $event_type . ' Hack';
					?>
				</span>
				<span class="location-event-tag">
					<?php
					$location_date = get_term_meta( get_queried_object_id(), 'location_date', true );
					$location_date = empty( $location_date ) ? 'Oct 22-24' : $location_date;
					echo $location_date;
					?>
				</span>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/global-participation-2' ); ?>
<?php get_template_part( 'template-parts/callouts-2' ); ?>

<?php
get_footer();
