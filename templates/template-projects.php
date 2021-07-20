<?php
/**
 * Template Name: Projects
 *
 * @package Dkjensen\Hack
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="section section-projects-one">
				<div class="wrap">
					<h1><span><?php echo esc_html( '#HACK' ); ?></span> <?php esc_html_e( 'Projects', 'hack' ); ?></h1>
					<p><?php echo esc_html_x( 'A global hackathon to bring the Gospel to where it’s not.', 'Projects page', 'hack' ); ?></p>
				</div>
			</div>
			<div class="section section-projects-two">
				<div class="wrap">
					<div class="row">
						<div class="column two-thirds offset-2">
							<h3><?php echo esc_html_x( 'This is the race we are running.', 'Projects page', 'hack' ); ?></h3>
							<h2><?php echo esc_html_x( 'We want to help bring the gospel to those who need to hear.', 'Projects page', 'hack' ); ?></h2>
						</div>
					</div>
					<div class="row">
						<div class="column one-fourth">
							<h3><?php echo esc_html_x( 'Bible or scripture engagement', 'Projects page', 'hack' ); ?></h3>
						</div>
						<div class="column one-fourth">
							<h3><?php echo esc_html_x( 'Entrepreneurship & innovation', 'Projects page', 'hack' ); ?></h3>
						</div>
						<div class="column one-fourth">
							<h3><?php echo esc_html_x( 'Missions information', 'Projects page', 'hack' ); ?></h3>
						</div>
						<div class="column one-fourth">
							<h3><?php echo esc_html_x( 'Your passion', 'Projects page', 'hack' ); ?></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-projects-three">
				<div class="wrap">
					<h1><?php echo esc_html_x( 'Priority Projects', 'Projects page', 'hack' ); ?></h1>
					<div class="hack-projects-grid" data-attributes='{}'></div>
				</div>
			</div>
		</article>

		<?php
	endwhile;
endif;

get_footer();
