<?php
/**
 * Template Name: Events
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\hack_name_tag;

global $hack_infinity_query;

get_header();


if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<article>
			<div class="section section-give-one">
				<div class="wrap">
					<div class="row">
						<div class="column six-twelfths">
							<h1><span><?php echo esc_html( '#HACK' ); ?></span><?php esc_html_e( ' 2021 Schedule', 'hack' ); ?> </h1>
						</div>
					</div>
					<div class="row">
						<div class="column five-twelfths">
							<div class="intro-text small">
								<p><?php esc_html_e( ' You will share your gifts and perspectives, making new solutions possible that can’t be seen on a smaller scale.', 'hack' ); ?></p>
							</div>
						</div>
						<div class="column seven-twelfths">
			<p class="strong"><?php esc_html_e( 'Frequently Asked Questions', 'hack' ); ?></p>

			  <?php foreach ( array( hack_get_faqs( 'general' )[1], hack_get_faqs( 'participants' )[1] ) as $faq ) { ?>

			  <div class="accordion events">
				<div class="accordion-header">
				October Friday 15th
				  <!-- <span><?php echo esc_html( $faq['question'] ?? '' ); ?></span> -->
				</div>
				<div class="accordion-content">
				  <!-- <?php echo wp_kses_post( $faq['answer'] ?? '' ); ?> -->
				  <div class="event-item">
					<div class="event-date">
					  <span>18:00</span>
					  <span>CST</span>
					</div>
					<div class="event-meta">
					  <h3>Opening Statements - Zoom</h3>
					  <div class="event-details">
						<span>Ann Chow</span>
						<span>30Min</span>
					  </div>
					</div>
				  </div>
				</div>
			  </div>

			  <?php } ?>

			  <?php
				$hack_events = new \WP_Query(
					array(
						'post_type'      => 'event',
						'post_status'    => 'publish',
						'posts_per_page' => '-1',
					)
				);
			  while ( $hack_events->have_posts() ) {
				  $hack_events->the_post();
					?>
				<div class="accordion events">
				<div class="accordion-header">
				October Friday 15th

				</div>
				<div class="accordion-content">
				  
				  <div class="event-item">
				  <div class="event-date">
					<span>18:00</span>
					<span>CST</span>
				  </div>
				  <div class="event-meta">
					<h3>Opening Statements - Zoom</h3>
					<div class="event-details">
					<span>Ann Chow</span>
					<span>30Min</span>
					</div>
				  </div>
				  </div>
				</div>
				</div>
				  <?php
					the_title( '<h1>', '</h1>' );
					the_excerpt();
					$hack_start_date = get_post_meta( get_the_ID(), 'start_date', true );
					// 06-21-2011 01:11:11
					if ( $hack_start_date ) {
						$hack_start_date_timestamp = strtotime( $hack_start_date ); // 1610100192 unix timestamp
						echo esc_html( 'm/d/Y', $hack_start_date_timestamp ); // 6-12-2021 https://www.php.net/manual/en/datetime.format.php
					}
					// echo $hack_start_date;
			  }
			  wp_reset_postdata();
				?>

						</div>
					</div>
				</div>
			</div>

			<?php get_template_part( 'template-parts/callouts-2' ); ?>
		</article>

		<?php
	endwhile;
endif;


get_footer();
