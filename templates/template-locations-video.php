<?php
/**
 * Template Name: Locations Video
 *
 * @package Dkjensen\Hack
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="section section-location-video-one blue-background-color padding-bottom-0">
				<div class="wrap">
					<div class="row">
						<div class="column five-sixths offset-1">
							<h1>
								<?php
								echo esc_html__( 'Video Submission', 'hack' );
								?>
							</h1>
							<p><?php esc_html_e( 'Use the form below to submit your location video.', 'hack' ); ?></p>
			  <div class="form-card">
			  <?php the_content(); ?>
			  </div>
						</div>
					</div>
				</div>
			</div>
	  <div class="section-location-video-two"></div>

		</article>

		<?php
	endwhile;
endif;

get_footer();
