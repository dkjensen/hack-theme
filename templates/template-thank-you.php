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
			<div class="section section-thank-you-one padding-0">
				<div class="wrap text-center">
					<h1><?php esc_html_e( 'Thank You', 'hack' ); ?></h1>
					<p class="intro-text"><?php esc_html_e( 'We appreciate your time to signup, check your inbox for next steps regarding #HACK.', 'hack' ); ?></p>
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
