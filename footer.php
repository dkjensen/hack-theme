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
							<p class="get-connected"><?php esc_html_e( 'Get Connected', 'hack' ); ?></p>
							<a href="https://www.facebook.com/Indigitous" class="site-footer-social--icon" aria-label="Indigitous Facebook"><i class="fab fa-facebook-square"></i></a>
							<a href="https://kbmm.slack.com/signup" class="site-footer-social--icon" aria-label="Indigitous Slack"><i class="fab fa-slack"></i></a>
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
