<?php
/**
 * Template Name: Events - lead
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\hack_name_tag;

get_header();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="section" style="padding-top:16rem;">
	<div class="wrap">
		<div class="row">
			<div class="column six-twelfths">
				<h1><span><?php echo esc_html( '#HACK' ); ?></span><?php esc_html_e( ' 2021 City Lead Program', 'hack' ); ?> </h1>
			</div>
		</div>
		<div class="row">
			<div class="column five-twelfths">
			<img class="img-width-80" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/events/hack-lead.jpg' ) ); ?>" />
				<div class="intro-text small">
					<p><?php esc_html_e( ' You will share your gifts and perspectives, making new solutions possible that can’t be seen on a smaller scale.', 'hack' ); ?></p>
				</div>
			</div>
			<div class="column seven-twelfths">
				<?php
					$hack_events_dates = array();
					$hack_events_query = new \WP_Query(
						array(
							'post_type'      => 'event',
							'posts_per_page' => -1,
							'meta_key'       => 'start_date',
							'orderby'        => 'meta_value',
							'order'          => 'ASC',
							'meta_query'     => array(
								'relation'     => 'OR',
								'compare'      => '<=',
								array(
									'key'     => 'weekend_select',
									'value'   => 'City Lead',
									'compare' => '=',
								),
								array(
									'key'     => 'weekend_select',
									'value'   => 'Both',
									'compare' => '=',
								),
							),
						)
					);

					foreach ( $hack_events_query->posts as $hack_event ) {
						$start_date = get_post_meta( $hack_event->ID, 'start_date', true );

						if ( $start_date ) {
							$start_date = gmdate( 'Y-m-d', strtotime( $start_date ) );

							$hack_events_dates[ $start_date ][] = $hack_event;
						}
					}

					foreach ( $hack_events_dates as $date => $events ) {
						?>

						<div class="accordion events">
							<div class="accordion-header">
								<?php echo esc_html( gmdate( 'F l jS', strtotime( $date ) ) ); ?>
							</div>
							<div class="accordion-content">
								<?php
								foreach ( $events as $event ) {
									$hack_start_date = get_post_meta( $event->ID, 'start_date', true );
									$hack_start_date = strtotime( $hack_start_date );
									?>

									<a href="<?php echo esc_html( get_permalink( $event->ID ) ); ?>" class="event-item">
										<div class="event-date">
											<span>
											<?php echo esc_html( gmdate( 'H:i', $hack_start_date ) ); ?></span>
											<span><?php echo esc_html( get_post_meta( $event->ID, 'timezone', true ) ); ?></span>
										</div>
										<div class="event-meta">
											<h3>
												<?php echo esc_html( get_the_title( $event->ID ) ); ?>
											</h3>
											<div class="event-details">
												<span>
													<?php echo esc_html( get_post_meta( $event->ID, 'presenter', true ) ); ?> - <?php echo esc_html( get_post_meta( $event->ID, 'event_duration', true ) ); ?>
												</span>
											</div>
										</div>
										<svg xmlns="http://www.w3.org/2000/svg" width="12.644" height="20.835" viewBox="0 0 12.644 20.835">
											<path id="Icon_awesome-chevron-right" data-name="Icon awesome-chevron-right" d="M14.242,13.875,4.969,23.147a1.145,1.145,0,0,1-1.619,0L2.269,22.066a1.145,1.145,0,0,1,0-1.617l7.349-7.383L2.267,5.682a1.145,1.145,0,0,1,0-1.617L3.35,2.983a1.145,1.145,0,0,1,1.619,0l9.272,9.272A1.145,1.145,0,0,1,14.242,13.875Z" transform="translate(-1.933 -2.648)" fill="rgba(29,13,1,0.98)"/>
										</svg>
									</a>

									<?php
								}
								?>
							</div>
						</div>

						<?php
					}
					?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part( 'template-parts/callouts-2' ); ?>
</article>

<?php

get_footer();
