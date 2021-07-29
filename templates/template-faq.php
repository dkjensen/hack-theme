<?php
/**
 * Template Name: FAQ
 *
 * @package Dkjensen\Hack
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="section section-faq-one">
				<div class="wrap">
					<h1><?php esc_html_e( 'Have a', 'hack' ); ?> <span><?php esc_html_e( 'Question', 'hack' ); ?></span><?php echo esc_html( '?' ); ?></h1>
					<p class="intro-text"><?php esc_html_e( 'The Indigitous team is here to help you kick off your Hackathon. Please reach out to us if you need specific guidance from our team.', 'hack' ); ?></p>
					<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>"><?php esc_html_e( 'Contact Us', 'hack' ); ?></a></p>
				</div>
			</div>
			<div class="section section-faq-two padding-top-0">
				<div class="wrap">
					<div class="row">
						<div class="column one-fourth">
							<?php foreach ( hack_get_faqs() as $section => $answers ) { ?>

							<div class="section-faq-two-title" data-section-id="<?php echo esc_attr( $section ); ?>">
								<span><?php echo esc_html( ucfirst( $section ) ); ?></span>
							</div>

							<?php } ?>
						</div>
						<div class="column two-thirds offset-1">
						<?php foreach ( hack_get_faqs() as $section => $faqs ) { ?>

						<div class="section-faq-two-answers" data-section-id="<?php echo esc_attr( $section ); ?>">
							<?php foreach ( $faqs as $faq ) { ?>

								<div class="section-faq-two-answers--answer">
									<h3><?php echo esc_html( $faq['question'] ?? '' ); ?></h3>
									<?php echo wp_kses_post( apply_filters( 'comment_text', $faq['answer'] ?? '' ) ); ?>
								</div>

							<?php } ?>
						</div>

						<?php } ?>
						</div>
					</div>
				</div>
			</div>

			<?php get_template_part( 'template-parts/testimonials' ); ?>
		</article>

		<?php
	endwhile;
endif;

get_footer();
