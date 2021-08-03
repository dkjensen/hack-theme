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
				<a href="<?php echo esc_url( home_url() ); ?>" class="custom-logo-link" rel="home">
					<img class="custom-logo" alt="#HACK2021" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-logo.svg' ) ); ?>" />
				</a>
			</div><!-- .site-branding -->

			<?php
			/*
			<a href="#" class="language-switcher-toggle">
				<?php echo apply_filters( 'wpml_current_language', null ); ?>
			</a>
			<div class="language-switcher">
				<div class="language-switcher-container">
					<div class="language-switcher-title"><?php esc_html_e( 'Select your Language', 'hack' ); ?></div>
					<?php echo do_shortcode( '[wpml_language_switcher flags=0 translated=true]' ); ?>
				</div>
			</div>
			*/
			?>

			<?php if ( has_nav_menu( 'primary' ) ) : ?>

			<nav id="site-navigation" class="main-navigation">
				<button class="hamburger hamburger--collapse menu-toggle" aria-controls="primary-menu" aria-expanded="false" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
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
