<?php
/**
 * Region template
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\get_hack_locations;
use function Dkjensen\Hack\Functions\get_region_name;

$hack_locations        = get_hack_locations();
$hack_region_locations = $hack_locations[ get_region_name() ] ?? array();

get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="section section-locations-one">
		<div class="wrap">
			<div class="row">
				<div class="column one-third">
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
					
				
				</div>
			</div>
		</div>
	</div>
</article>

<?php
get_footer();
