<?php
/**
 * Template Name: Challenges
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\hack_name_tag;

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="section section-challenges-one blue-background-color">
				<div class="wrap">
					<div class="row">
						<div class="column five-sixths offset-1">
							<h1>
								<?php
								/* translators: %s #HACK */
								echo sprintf( esc_html__( '%s Global Challenges', 'hack' ), '#HACK21' );
								?>
							</h1>
							<p><?php esc_html_e( 'The Indigitous hackathon is a unique opportunity to gather people with unique skill sets for the purpose of responding to the most pressing needs that impact our society.', 'hack' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-challenges-two">
				<div class="wrap">
					<div class="row">
						<?php

						$hack_challenges = new \WP_Query(
							array(
								'post_type'      => 'challenge',
								'posts_per_page' => 3,
								'post_status'    => 'publish',
							)
						);

						while ( $hack_challenges->have_posts() ) {
							$hack_challenges->the_post();

							?>

						<div class="column one-third">
							<div class="section-challenges-two-item">
								<img class="section-challenges-two-item-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-' . get_post_meta( get_the_ID(), 'icon', true ) . '.svg' ) ); ?>" width="56" />
								<h3><?php the_title(); ?></h3>
								<?php the_excerpt(); ?>
								<div class="section-challenges-two-item-info" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/challenges/hack-challenges-item-1.jpg' ) ); ?>);">
									<?php echo wp_kses_post( wpautop( get_post_meta( get_the_ID(), 'short_info', true ) ) ); ?>
									<p><a href="<?php echo esc_url( get_permalink( get_the_ID() ) ); ?>" class="button"><?php esc_html_e( 'Join Challenge', 'hack' ); ?></a></p>

									<div class="section-challenges-two-item-info--footer">
										<?php
										if ( function_exists( '\get_field' ) ) {
											$hack_presented_by = get_field( 'presented_by' );

											if ( ! empty( $hack_presented_by ) ) {
												?>

												<p><?php esc_html_e( 'This Challenge is Presented by:', 'hack' ); ?></p>
												<div class="section-challenges-two-item-info--footer-presenters">

													<?php
													foreach ( $hack_presented_by as $hack_presenter ) {
														printf( '<a href="%s" target="_blank">%s</a>', esc_url( $hack_presenter['website'] ), wp_get_attachment_image( $hack_presenter['logo'] ) );
													}
													?>
												</div>

												<?php
											}
										}
										?>
									</div>
								</div>
							</div>
						</div>

							<?php
						}

						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>

			<?php get_template_part( 'template-parts/contribution' ); ?>
			
			<div class="section section-challenges-three">
				<div class="wrap">
					<div class="section-challenges-three-items">
						<div class="section-challenges-three-items--item blue-background-color" data-sal="slide-down">
							<p><?php esc_html_e( 'Bring #HACK2021 to your city and convene hackers to help make Jesus known.', 'hack' ); ?></p>
							<a href="https://indigitous.typeform.com/to/mojiHQqC" target="_blank" class="button"><?php esc_html_e( 'Lead', 'hack' ); ?></a>
						</div>
						<div class="section-challenges-three-items--item yellow-background-color" data-sal="slide-down" data-sal-delay="100">
							<p><?php esc_html_e( 'Use your talents for God by working on missional projects to solve the problems facing your community.', 'hack' ); ?></p>
							<a href="https://indigitous.typeform.com/to/QkVDWhea" target="_blank" class="button"><?php esc_html_e( 'Participate', 'hack' ); ?></a>
						</div>
						<div class="section-challenges-three-items--item blue-background-color" data-sal="slide-down" data-sal-delay="200">
							<p><?php esc_html_e( 'We need partners to help make this event a success. Find out how you can partner with us.', 'hack' ); ?></p>
							<a href="https://indigitous.typeform.com/to/RQGajmbR" target="_blank" class="button"><?php esc_html_e( 'Partner', 'hack' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</article>

		<?php
	endwhile;
endif;

get_footer();
