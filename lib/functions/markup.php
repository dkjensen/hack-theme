<?php
/**
 * Markup functions.
 *
 * @package Dkjensen\Hack
 */

namespace Dkjensen\Hack\Functions;

/**
 * Enqueued assets
 *
 * @return void
 */
function body_classes( $classes ) {
	$template = \get_page_template_slug();

	if ( in_array( $template, array( 'templates/template-about.php', 'templates/template-home.php', 'templates/template-impact.php', 'templates/template-faq.php' ) ) || is_archive() || is_home() || post_password_required() || is_404() ) {
		$classes[] = 'transparent-header';
	}

	return $classes;
}
add_filter( 'body_class', __NAMESPACE__ . '\body_classes' );

/**
 * Excerpt more
 *
 * @param string $more Default.
 * @return string
 */
function excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', __NAMESPACE__ . '\excerpt_more' );

/**
 * Custom password protected page form
 *
 * @param string $output Default form.
 * @return void
 */
function the_password_form( $output ) {
	global $post;

	$_post = get_post( $post );
	$label = 'pwbox-' . ( empty( $_post->ID ) ? wp_rand() : $_post->ID );
	?>

	<div class="section section-password-protected">
		<div class="wrap">
			<?php the_title( '<h1>', '</h1>' ); ?>
			<p><?php echo esc_html_x( 'Please enter password regional manager provided to access the downloads', 'Password protected page', 'hack' ); ?></p>

			<form action="<?php echo esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ); ?>" class="post-password-form" method="post">
				<div class="form-input">
					<label><?php esc_html_e( 'Password', 'hack' ); ?></label>
					<div>
						<input type="password" name="post_password" id="<?php echo esc_attr( $label ); ?>" />
					</div>
				</div>
				<p>
					<input type="submit" name="Submit" value="<?php esc_attr_e( 'Access', 'hack' ); ?>" />
				</p>
			</form>

			<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>"><?php echo esc_html_x( 'Forgot password?', 'Password protected page', 'hack' ); ?></a></p>
		</div>
	</div>

	<?php

}
add_filter( 'the_password_form', __NAMESPACE__ . '\the_password_form' );

/**
 * Remove "Protected:" prefix from password protected pages
 *
 * @return string
 */
function protected_title_format() {
	return '%s';
}
add_filter( 'protected_title_format', __NAMESPACE__ . '\protected_title_format' );
