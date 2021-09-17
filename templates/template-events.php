<?php
/**
 * Template Name: Events
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\hack_name_tag;

get_header();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="section purple-background-color" style="padding-top:8rem;">
		<div class="wrap">
			<div class="row">
				<div class="column single-column">
					<h1 class="text-center"><span><?php echo esc_html( '#HACK' ); ?></span><?php esc_html_e( ' 2021 Program', 'hack' ); ?> </h1>
					<div class="intro-text small text-center">
						<p><?php esc_html_e( 'Here is the program for #HACK2021. We are excited you can join us for this global hackathon for missions. If you have any questions please get in touch.', 'hack' ); ?></p>
						<p><a class="text-color" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>"><?php esc_html_e( 'Contact Us', 'hack' ); ?></a></p>
					</div>
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
										'value'   => 'Participant',
										'compare' => '=',
									),
									array(
										'key'     => 'weekend_select',
										'value'   => 'Participant',
										'compare' => 'NOT EXISTS',
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

							<div class="accordion events white-background-color">
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
												<?php
												echo esc_html( get_the_title( $event->ID ) );
												?>
												</h3>
												<div class="event-details">
													<span>
														<?php echo esc_html( get_post_meta( $event->ID, 'presenter', true ) ); ?> - <?php echo esc_html( get_post_meta( $event->ID, 'event_duration', true ) ); ?>
													</span>
													<span class="event-button">												
													<?php esc_html_e( 'Attend', 'hack' ); ?>
													</span>
												</div>
											</div>	
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
