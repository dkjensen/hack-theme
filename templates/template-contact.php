<?php
/**
 * Template Name: Contact
 *
 * @package Dkjensen\Hack
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="section section-contact-one">
				<div class="wrap">
					<div class="row">
						<div class="column two-thirds offset-2">
							<h1 class="primary-color"><?php echo esc_html_x( 'Want to talk?', 'Contact page', 'hack' ); ?></h1>
							<p><?php echo esc_html_x( 'The Indigitous team is here to help you kick off your Hackathon. Please reach out to us if you need specific guidance from our team.', 'Contact page', 'hack' ); ?></p>
						</div>
					</div>
					<div class="row">
						<div class="column one-third offset-2">
							<?php the_content(); ?>
						</div>
						<div class="column one-third offset-1">
							<div class="team">
								<div class="team-member full-width">
									<div class="team-member-photo">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/ann-chow.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Ann Chow' ); ?></h3>
										<h6><?php echo esc_html_x( 'Project Manager', 'Team Member Title', 'hack' ); ?></h6>
										<p><a href="mailto:hack@indigitous.org"><?php echo esc_html( 'hack@indigitous.org' ); ?></a></p>
									</div>
								</div>
							</div>
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
