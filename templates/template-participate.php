<?php
/**
 * Template Name: Participate
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
			<div class="section section-participate-one">
				<div class="wrap">
					<div class="row">
						<div class="column one-half">
							<h6 class="divider"><?php esc_html_e( 'SAVE THE DATE: October 15-17 and 22-24, 2021', 'hack' ); ?></h6>
							<h1>
								<?php
								/* translators: %s #HACK name tag */
								echo sprintf( esc_html__( 'Join Us at %s', 'hack' ), hack_name_tag() );
								?>
							</h1>
							<p>
								<?php esc_html_e( 'You have an opportunity to make an impact for God in your city.  Indigitous wants to empower you to serve your city and tackle those real problems facing your friends, neighbors, and coworkers.', 'hack' ); ?>
							</p>
							<p>
								<a href="https://indigitous.typeform.com/to/QkVDWhea" class="button" target="_blank"><?php esc_html_e( 'Register Now', 'hack' ); ?></a>
							</p>
						</div>
						<div class="column one-half">
							<div class="section-participate-one-graphic--container">
								<img class="section-participate-one-graphic" data-sal="slide-left" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/participate/hack-participate-hero-1.jpg' ) ); ?>" />
								<img class="section-participate-one-graphic" data-sal="slide-down" data-sal-delay="100" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/participate/hack-participate-hero-2.jpg' ) ); ?>" />
								<img class="section-participate-one-graphic" data-sal="slide-right" data-sal-delay="200" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/participate/hack-participate-hero-3.jpg' ) ); ?>" />
								<img class="section-participate-one-graphic" data-sal="slide-up" data-sal-delay="300" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/participate/hack-participate-hero-4.jpg' ) ); ?>" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-participate-two gray-300-background-color">
				<div class="wrap">
					<div class="section-participate-two-works-grid">
						<div class="section-participate-two-works-grid--item">
							<h5 class="divider"><?php esc_html_e( 'Application', 'hack' ); ?></h5>
							<h2 class="yellow-color"><?php esc_html_e( 'How It Works', 'hack' ); ?></h2>
						</div>
						<div class="section-participate-two-works-grid--item yellow-background-color">
								<span class="numbered-outline">1</span>
								<h3><?php esc_html_e( 'Sign Up', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'Complete the signup form and the closest regional lead will reach out to you.', 'hack' ); ?></p>
						</div>
						<div class="section-participate-two-works-grid--item white-background-color">
								<span class="numbered-outline">2</span>
								<h3><?php esc_html_e( 'Interview', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'Your regional lead will approve your application and interview you to hear about your passion, answer questions, and help you think through your event.', 'hack' ); ?></p>
						</div>
						<div class="section-participate-two-works-grid--item blue-background-color">
								<span class="numbered-outline">3</span>
								<h3><?php esc_html_e( 'Coordinate', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'Join other city leads in #HACK2021 planning calls to discuss best practices and learn from those who have led the event in the past.', 'hack' ); ?></p>
						</div>
						<div class="section-participate-two-works-grid--item white-background-color">
								<span class="numbered-outline">4</span>
								<h3><?php esc_html_e( 'Communicate', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'You will have regular communication with your regional lead and with other city leads to support you through the process.', 'hack' ); ?></p>
						</div>
					</div>
					<div class="row">
						<div class="column one-half" data-sal="slide-right">
							<h2>
								<?php
								/* translators: %s #HACK name tag */
								printf( esc_html__( 'Interested in participating at %s in your city?', 'hack' ), hack_name_tag() );
								?>
							</h2>
							<p>
								<a href="https://indigitous.typeform.com/to/QkVDWhea" class="button" target="_blank"><?php esc_html_e( 'Register Now', 'hack' ); ?></a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-participate-three"></div>

			<?php get_template_part( 'template-parts/global-participation-2' ); ?>
			<?php get_template_part( 'template-parts/quotes' ); ?>

			<div class="section section-participate-six gray-300-background-color">
				<div class="wrap text-center">
					<h2><?php esc_html_e( 'The Kingdom of God', 'hack' ); ?> <br><?php esc_html_e( 'Needs your unique contribution', 'hack' ); ?></h2>
					<p class="intro-text"><?php esc_html_e( 'You will share your gifts and perspectives, making new solutions possible that can’t be seen on a smaller scale.', 'hack' ); ?></p>
					<p><a href="https://indigitous.typeform.com/to/QkVDWhea" class="button"><?php esc_html_e( 'Register Now', 'hack' ); ?></a></p>
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/participate/hack-participate-section-7-img.svg' ) ); ?>" width="503" class="margin-top-xl" />
				</div>
			</div>

			<?php get_template_part( 'template-parts/fast-facts' ); ?>
			<?php get_template_part( 'template-parts/celebrate-2020' ); ?>
			<?php get_template_part( 'template-parts/projects' ); ?>
			<?php get_template_part( 'template-parts/testimonials' ); ?>

			<div class="section section-participate-seven">
				<div class="wrap">
					<div class="row">
						<div class="column two-thirds offset-2">
							<h2 class="text-center"><?php esc_html_e( 'Frequently Asked Questions', 'hack' ); ?></h2>

							<?php foreach ( hack_get_faqs( 'participants' ) as $faq ) { ?>

							<div class="accordion">
								<div class="accordion-header">
									<span><?php echo esc_html( $faq['question'] ?? '' ); ?></span>
								</div>
								<div class="accordion-content">
									<?php echo wp_kses_post( $faq['answer'] ?? '' ); ?>
								</div>
							</div>

							<?php } ?>

							<p class="text-right">
								<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'faq' ) ) ); ?>" class="text-color"><?php esc_html_e( 'View More', 'hack' ); ?></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</article>

		<?php
	endwhile;
endif;

get_footer();
