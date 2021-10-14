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
								echo esc_html__( 'Best Location Video', 'hack' );
								?>
							</h1>
							<p><?php esc_html_e( 'With over 60 cities taking part of #HACK2021 we want to showcase the variety of locations. To represent your location, please send us a video of you doing anything, literally anything, and your location will be featured in a fun video after #HACK2021.', 'hack' ); ?></p>
			  <ul class="basic-list">
				<li><?php esc_html_e( 'Most creative videos will get special mention at the Global Celebration.' ); ?></li>
				<li><?php esc_html_e( 'The video can feature an individual or a whole team.' ); ?></li>
				<li><?php esc_html_e( 'This is the sound-track we are using: ' ); ?><a href="https://www.epidemicsound.com/track/Z0PXwNiDAA/" class="text-color--primary" target="_blank" style="color: #ee5028;">New Dawn Is Rising</a>.</li>
				<li><?php esc_html_e( 'We need to be able to download your video.' ); ?></li>
			  </ul>
			  <div class="form-card">
			  <?php the_content(); ?>
		<p class="form-disclaimer"><?php esc_html_e( 'By submitting your video you approve its use for Inditigitous/#HACK marketing materials.' ); ?></p>
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
