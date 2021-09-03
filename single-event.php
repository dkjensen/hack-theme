<?php
/**
 * Single Event Template
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\hack_name_tag;
global $hack_infinity_query;
get_header();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="section section-location-one">

	<div class="wrap">
		<div class="row">
				<div class="column five-twelfths">
					<p class="breadcrumbs">
						<a href="/program">< <?php esc_html_e( 'All Events', 'hack' ); ?></a>
					</p>
					<div class="event--summary">
						<h3>
							<?php
							$hack_start_date = get_post_meta( get_the_ID(), 'start_date', true );
							$hack_start_date = strtotime( $hack_start_date );
							echo esc_html( gmdate( 'M, D - d', $hack_start_date ) );
							?>
							 - 
							<?php echo esc_html( gmdate( 'H:i', $hack_start_date ) ); ?> <?php echo esc_html( get_post_meta( get_the_id(), 'timezone', true ) ); ?>
						</h3>
						<h4>
						<?php echo esc_html( get_post_meta( get_the_id(), 'event_location', true ) ); ?>
					</h4>
						<p>
						<?php esc_html_e( 'Presnted By: ', 'hack' ); ?>
						<?php echo esc_html( get_post_meta( get_the_id(), 'presenter', true ) ); ?>
						</p>

						<p>
						<?php esc_html_e( 'Event Duration: ', 'hack' ); ?>
						<?php echo esc_html( get_post_meta( get_the_id(), 'event_duration', true ) ); ?>
						</p>

						<p>
						<?php esc_html_e( 'Event Cost: Free', 'hack' ); ?>
						</p>

						<a class="button" rel="noopener" target="_blank" href="<?php echo esc_html( get_post_meta( get_the_id(), 'event_link', true ) ); ?>">
						<?php esc_html_e( 'Attend Event', 'hack' ); ?>
						</a>
					</div>
				</div>
				<div class="column seven-twelfths">
					<h2>
						<?php echo esc_html( get_the_title() ); ?>
					</h2>
					<div class="event--content">
						<?php the_content(); ?>
					</div>
				</div>
		</div>
	</div>
</div>

</article>
	<?php get_template_part( 'template-parts/callouts-2' ); ?>

<?php

get_footer();
