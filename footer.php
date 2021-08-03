<?php
/**
 * The template for displaying the footer
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\hack_name_tag;

?>

	<footer id="colophon" class="site-footer">
		<div class="site-footer-call-to-action primary-background-color">
			<div class="wrap">
				<div class="site-footer-call-to-action--content">
					<h1 class="white-color" data-sal="slide-right">
					<?php
						/* translators: %s #HACK name tag */
						printf( esc_html__( 'Join %s', 'hack' ), hack_name_tag() );
					?>
					</h1>
					<?php
					if ( has_nav_menu( 'footer-join' ) ) {
						wp_nav_menu( array( 'theme_location' => 'footer-join' ) );
					}
					?>
				</div>
			</div><!-- .wrap -->
		</div><!-- .site-footer-call-to-action -->
		<div class="site-footer-primary section">
			<div class="wrap">
				<div class="row">
					<div class="column one-half">
						<?php dynamic_sidebar( 'footer' ); ?>
					</div>
					<div class="column one-sixth">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
					<div class="column one-sixth">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
					<div class="column one-sixth">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</div>
				</div>
				<div class="row">
					<div class="column full-width">
						<div class="site-footer-social">
							<h5><?php esc_html_e( 'Get Connected', 'hack' ); ?></h5>
							<a href="https://www.facebook.com/Indigitous" class="site-footer-social--icon"><i class="fab fa-facebook-square"></i></a>
							<a href="https://kbmm.slack.com/signup" class="site-footer-social--icon"><i class="fab fa-slack"></i></a>
						</div>
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="column one-half">
						<?php dynamic_sidebar( 'below-footer' ); ?>
					</div>
					<div class="column one-half">
						<?php dynamic_sidebar( 'below-footer-2' ); ?>
					</div>
				</div>
			</div><!-- .wrap -->
		</div><!-- .site-footer-primary -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
