<?php
/**
 * Template Name: Thank You
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

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="section section-thank-you-one">

		<div class="wrap">
			<div class="row">
				<div class="column one-fourth">
					<div class="card">
						<div class="card--content">
							<img class="message-spring-logo" alt="Message Spring App" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/thank-you/message-spring.png' ) ); ?>" />

							<img class="message-spring-qr" alt="Message Spring App - QR Code" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/thank-you/message-spring-qr.png' ) ); ?>" />

							<div class="app-badge-wrapper">
								<a class="" aria-label="Message Spring App - Download Badge" href="<?php echo esc_html_e( 'https://apps.apple.com/us/app/messagespring/id1360404589?itsct=apps_box_link&itscg=30200' ); ?>" target="_blank" rel="noopener">
									<img class="app-badge" alt="Message Spring App - Download Badges" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/thank-you/download-iphone.png' ) ); ?>" />
								</a>
								<a class="" aria-label="Message Spring App - Download Badge" href="<?php echo esc_html_e( 'https://play.google.com/store/apps/details?id=cloud.iyc.notifyme' ); ?>" target="_blank" rel="noopener">
									<img class="app-badge" alt="Message Spring App - Download Badges" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/thank-you/download-google-play.png' ) ); ?>" />
								</a>
							</div>

						</div>
					</div>
				</div>
				<div class="column seven-twelfths offset-1">
				<h1><?php esc_html_e( 'Thank You', 'hack' ); ?> </h1>
				<p>
						<?php
						esc_html_e(
							'We are excited that you are planning on joining us.
 							For clearer communication, we are using MessageSpring for #HACK2021.',
							'hack'
						);
						?>
				</p>

				<ul>
					<li><?php esc_html_e( 'Receive notifications in the language of your choice', 'hack' ); ?></li>
					<li><?php esc_html_e( 'Have direct communications with the Indigitous team helping to organize #HACK2021', 'hack' ); ?></li>
					<li><?php esc_html_e( 'Manage all your settings and preferences', 'hack' ); ?></li>
					<li><?php esc_html_e( 'If you’ve already downloaded the app search Indigitous #HACK2021 or use our ', 'hack' ); ?>
						<a class="primary-color" href="<?php echo esc_html_e( 'https://notifyme.onelink.me/glgO/46cbde48?place_id=4316' ); ?>" target="_blank" rel="noopener">
							<?php esc_html_e( 'Link', 'hack' ); ?></a>.
					</li>
					<li><?php esc_html_e( 'Stay tuned for more communication from us.', 'hack' ); ?></li>
				</ul>

				<p class="sub-text">
					<?php esc_html_e( 'If you’d rather not download the app, that’s okay too. You’ll still receive the messages and communications we send out via email but you won’t be able to reply directly - in other words, communication will be primarily one way - from us to you.', 'hack' ); ?>
				</p>

				<p>
					<a class="button" href="<?php echo esc_html_e( 'https://notifyme.onelink.me/glgO/46cbde48?place_id=4316' ); ?>" target="_blank" rel="noopener">
					<?php esc_html_e( 'Download', 'hack' ); ?>
					</a>
					<span class="sub-text ml-20">
					<?php esc_html_e( 'Mobile Only', 'hack' ); ?>
				</span>
				</p>

				</div>
			</div>
		</div>


			</div>

			<?php get_template_part( 'template-parts/testimonials' ); ?>

			<div class="section section-thank-you-two padding-0">
				<div class="wrap">
					<h5 class="text-center margin-top-xxl margin-bottom-l"><?php esc_html_e( 'You might also be interested in', 'hack' ); ?>&hellip;</h5>
				</div>
			</div>

			<div class="section section-thank-you-three gray-300-background-color">
				<div class="wrap">
					<div class="text-center margin-bottom-xxl">
						<h2><?php esc_html_e( 'Stories From #HACK', 'hack' ); ?></h2>
						<p class="intro-text"><?php esc_html_e( 'God has done amazing things through #HACK participants who devoted their weekends to working on missional projects. Here are some of the exciting solutions.', 'hack' ); ?></p>
					</div>
					<div id="content" class="site-content">
						<?php
						if ( $hack_infinity_query->have_posts() ) {
							while ( $hack_infinity_query->have_posts() ) {
								$hack_infinity_query->the_post();

								get_template_part( 'template-parts/card-story', get_post_format() );

							}

							printf( '<div id="infinite-handle"><span><a href="%s">%s</a></span></div>', esc_url( get_post_type_archive_link( 'story' ) ), esc_html__( 'View More Stories', 'hack' ) );
						}
						?>
					</div>
				</div>
			</div>

			<?php get_template_part( 'template-parts/callouts-2' ); ?>
		</article>

		<?php
	endwhile;
endif;

get_footer();
