<?php
/**
 * Events Archive Template
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\hack_name_tag;

get_header();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
					<?php
					while ( have_posts() ) {
						the_post();

						$hack_start_date = get_post_meta( get_the_ID(), 'start_date', true );
						$hack_start_date = strtotime( $hack_start_date );

						?>

						<div class="accordion events">
							<div class="accordion-header">October Friday 15th</div>
							<div class="accordion-content">
						
								<div class="event-item">
									<div class="event-date">
										<span><?php echo esc_html( gmdate( 'D - d', $hack_start_date ) ); ?></span>
										<span><?php echo esc_html( gmdate( 'H:i', $hack_start_date ) ); ?> - <?php echo esc_html( get_post_meta( get_the_ID(), 'timezone', true ) ); ?></span>
									</div>
									<div class="event-meta">
										<?php the_title( '<h3>', '</h3>' ); ?>
										<div class="event-details">
											<?php the_excerpt(); ?>
											<span><?php echo esc_html( get_post_meta( get_the_ID(), 'presenter', true ) ); ?></span>
											<span><?php echo esc_html( get_post_meta( get_the_ID(), 'event_duration', true ) ); ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part( 'template-parts/callouts-2' ); ?>
</article>

<?php

get_footer();
