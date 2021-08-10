<?php
/**
 * Template Name: Give
 *
 * @package Dkjensen\Hack
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="section section-give-one">
				<div class="wrap">
					<div class="row">
						<div class="column five-twelfths offset-1">
							<h1><?php esc_html_e( 'Give to', 'hack' ); ?> <span><?php echo esc_html( '#HACK' ); ?></span></h1>
						</div>
					</div>
					<div class="row">
						<div class="column five-twelfths offset-1">
							<div class="intro-text small">
								<p><?php esc_html_e( 'In serving the broader body of Christ through #HACK2021, the Indigitous global team has taken on certain expenses.', 'hack' ); ?></p>
								<p><?php esc_html_e( 'Our costs for this event are around $40,000 USD including project management, marketing, logistics etc…', 'hack' ); ?></p>
								<p><?php esc_html_e( 'If you or your organization wants to help fund seeing 1000+ participants in 40 cities around the world working on projects to bring the gospel where it’s not, we would be most appreciative of your partnership.', 'hack' ); ?></p>
							</div>
						</div>
						<div class="column five-twelfths">
							<div class="box margin-bottom-xxl">
								<h2><?php esc_html_e( 'United States', 'hack' ); ?></h2>
								<h3><?php esc_html_e( 'How to give', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'Donate online with a credit/debit card at cru.org via the Indigitous designation. For bank transfer please contact us so we may assist you.', 'hack' ); ?></p>
								<p class="margin-bottom-xl"><a href="https://give.cru.org/0898328?modal=give-gift&d=0898328" target="_blank" class="button"><?php esc_html_e( 'Credit/Debit', 'hack' ); ?></a></p>

								<h3><?php esc_html_e( 'Bank Transfer', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'Donate online with a credit/debit card at cru.org via the Indigitous designation. For bank transfer please contact us so we may assist you.', 'hack' ); ?></p>
								<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="button"><?php esc_html_e( 'Bank Transfer', 'hack' ); ?></a></p>
							</div>

							<div class="box">
								<h2><?php esc_html_e( 'International', 'hack' ); ?></h2>
								<h3><?php esc_html_e( 'How to give', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'Please contact us to transfer an international donation to support #HACK. We appreciate your charitable giving.', 'hack' ); ?></p>
								<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="button"><?php esc_html_e( 'Contact Us', 'hack' ); ?></a></p>
							</div>
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
