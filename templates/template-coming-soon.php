<?php
/**
 * Template Name: Coming Soon
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
			<div class="section section-coming-soon-one">
				<div class="wrap">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/coming-soon/hack-logo.png' ) ); ?>" />
					<h1>
						<?php
						/* translators: %s #HACK name tag */
						echo sprintf( esc_html_x( 'Join %s', 'Coming soon page', 'hack' ), hack_name_tag() );
						?>
					</h1>
					<hr />
					<br>
					<div class="row">
						<div class="column one-half">
							<h3 class="primary-color">
								<?php
								/* translators: %s #HACK name tag */
								echo sprintf( esc_html_x( 'Bring %s To Your City', 'Coming soon page', 'hack' ), hack_name_tag() );
								?>
							</h3>
							<p>
								<a href="https://indigitous.typeform.com/to/mojiHQqC" target="_blank" class="button"><?php esc_html_e( 'Lead', 'hack' ); ?></a>
							</p>
						</div>
						<div class="column one-half">
							<h3 class="primary-color">
								<?php
								/* translators: %s #HACK name tag */
								echo sprintf( esc_html_x( '%s is coming to your city', 'Coming soon page', 'hack' ), hack_name_tag() );
								?>
							</h3>
							<p>
								<a href="https://indigitous.typeform.com/to/QkVDWhea" target="_blank" class="button"><?php esc_html_e( 'Participate', 'hack' ); ?></a>
							</p>
						</div>
					</div>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p><?php echo esc_html_x( 'New #HACK website coming soon', 'Coming soon page', 'hack' ); ?></p>
				</div>
			</div>
		</article>

		<?php
	endwhile;
endif;

get_footer();
