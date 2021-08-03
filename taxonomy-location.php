<?php
/**
 * Location Template File
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\get_hack_location_image;
use function Dkjensen\Hack\Functions\hack_name_tag;

get_header();
?>

<div class="section section-location-one">
	<div class="wrap">
		<div class="section-location-one-wrap" style="background-image: url(<?php echo esc_url( get_hack_location_image( get_queried_object_id() ) ) ?>);">
			<div class="section-location-one-wrap--content">
				<h1>
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/' . sanitize_file_name( strtolower( get_term_meta( get_queried_object_id(), 'country_code', true ) ) . '.svg' ) ) ); ?>" width="45" />
					<?php echo get_the_archive_title(); ?>
				</h1>
				<div class="intro-text">
					<?php echo term_description() ? term_description() : apply_filters( 'the_content', esc_html__( 'The Indigitous team is here to help you kick off your Hackathon. Please reach out to us if you need specific guidance from our team.', 'hack' ) ); ?>
				</div>
				<div class="section-location-one-wrap--content-action">
					<a href="<?php echo esc_url( get_term_meta( get_queried_object_id(), 'registration_url', true ) ); ?>" target="_blank" class="button">
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
			</div>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/global-participation-2' ); ?>

<div class="section section-location-two">
	<div class="wrap text-center">
		<h1>
			<?php
			/* translators: %s #HACK name tag */
			printf( esc_html__( 'Join %s', 'hack' ), hack_name_tag() );
			?>
		</h1>
		<h3><?php esc_html_e( 'There are three ways you can be a part of what God is doing through #HACK.', 'hack' ); ?></h3>
	</div>
</div>

<div class="section section-location-three">
	<div class="wrap">
		<div class="row">
			<div class="column one-third">
				<div class="section-location-three-item blue-background-color">
					<h4><?php esc_html_e( 'Bring #HACK2021 to your city and convene hackers to help make Jesus known.', 'hack' ); ?></h4>
					<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="button"><?php esc_html_e( 'About', 'hack' ); ?></a></p>
				</div>
			</div>
			<div class="column one-third">
				<div class="section-location-three-item yellow-background-color">
					<h4><?php esc_html_e( 'Use your talents for God by working on missional projects to solve the problems facing your community.', 'hack' ); ?></h4>
					<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'impact' ) ) ); ?>" class="button"><?php esc_html_e( 'Impact', 'hack' ); ?></a></p>
				</div>
			</div>
			<div class="column one-third">
				<div class="section-location-three-item purple-background-color">
					<h4><?php esc_html_e( 'We need partners to help make this event a success. Find out how you can partner with us.', 'hack' ); ?></h4>
					<p><a href="<?php echo esc_url( get_post_type_archive_link( 'resource' ) ); ?>" class="button"><?php esc_html_e( 'Resources', 'hack' ); ?></a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
