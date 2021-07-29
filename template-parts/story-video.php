<?php
/**
 * Story Template Part - Video format
 *
 * @package Dkjensen\Hack
 */

use function \Dkjensen\Hack\Functions\get_youtube_video_id;

$hack_youtube_id = get_youtube_video_id( esc_html( get_the_content() ) );
$hack_thumbnail  = ! has_post_thumbnail() && $hack_youtube_id ? esc_url( 'https://img.youtube.com/vi/' . $hack_youtube_id . '/maxresdefault.jpg' ) : get_the_post_thumbnail_url();
?>

<div 
<?php
post_class();

if ( $hack_youtube_id ) :
	?>
	data-lity-target="https://www.youtube.com/embed/<?php echo esc_attr( $hack_youtube_id ); ?>" data-lity<?php endif; ?>
	style="background-image: url(<?php echo esc_attr( $hack_thumbnail ); ?>);">
	<div class="story--content">
		<div class="story--content-header">
			<?php
				$hack_locations = wp_get_post_terms( get_the_ID(), 'location' );
				array_walk(
					$hack_locations,
					function( $location ) {
						$country_code = esc_attr( get_term_meta( $location->term_id, 'country_code', true ) );

						if ( ! $country_code ) {
							return;
						}

						printf(
							'<img src="%s" width="60" title="%s" />',
							esc_url( get_theme_file_uri( 'assets/img/flags/' . $country_code . '.svg' ) ),
							esc_attr( $location->name )
						);
					}
				);
				?>
		</div>
		<span class="story--content-play"></span>
		<h3 class="white-color"><?php the_excerpt(); ?></h3>
	</div>
</div>
