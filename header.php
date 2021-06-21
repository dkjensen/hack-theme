<?php
/**
 * The header for our theme.
 *
 * @package Dkjensen\Hack
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hack' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="wrap">
			<div class="site-branding">
				<?php the_custom_logo(); ?>
			</div><!-- .site-branding -->

			<?php if ( has_nav_menu( 'menu-1' ) ) : ?>

			<nav id="site-navigation" class="main-navigation">
				<button class="hamburger hamburger--collapse menu-toggle" aria-controls="primary-menu" aria-expanded="false" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'menu-1',
						'container'       => 'nav',
						'menu_id'         => 'primary-menu',
						'menu_class'      => 'menu nav-primary',
					)
				);
				?>
			</nav><!-- #site-navigation -->

			<?php endif; ?>
		</div><!-- .wrap -->
	</header><!-- #masthead -->
