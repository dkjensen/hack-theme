<?php
/**
 * The main template file
 *
 * @package Dkjensen\Hack
 */

get_header();
?>

	<div class="section section-404">
		<div class="wrap">
			<h1 class="primary-color"><?php echo esc_html( '404' ); ?></h1>
			<p><?php esc_html_e( 'Oops! You didn’t find the page you were looking for but you did find the lost sheep. You can return home now.', 'hack' ); ?></p>
			<p><a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Home', 'hack' ); ?></a></p>
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/404/hack-404-img.svg' ) ); ?>" width="800" />
		</div>
	</div>

<?php
get_footer();
