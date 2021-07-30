<?php
/**
 * Global participation section
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\hack_name_tag;
?>

<div class="section template-parts-global-participation blue-background-color">
	<div class="wrap">
		<h3 class="text-center"><?php esc_html_e( 'Global Participation of #HACK2020', 'hack' ); ?></h3>
		<div class="row">
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ar.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '20' ); ?></span>
						<p><?php esc_html_e( 'Argentina', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/de.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '20' ); ?></span>
						<p><?php esc_html_e( 'Germany', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/id.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '114' ); ?></span>
						<p><?php esc_html_e( 'Indonesia', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/th.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '22' ); ?></span>
						<p><?php esc_html_e( 'Thailand', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/au.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '23' ); ?></span>
						<p><?php esc_html_e( 'Australia', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/hk.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '15' ); ?></span>
						<p><?php esc_html_e( 'Hong Kong', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/za.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '23' ); ?></span>
						<p><?php esc_html_e( 'South Africa`', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ug.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '17' ); ?></span>
						<p><?php esc_html_e( 'Uganda', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ph.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '67' ); ?></span>
						<p><?php esc_html_e( 'Philippines', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/sg.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '68' ); ?></span>
						<p><?php esc_html_e( 'Singapore', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/us.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '141' ); ?></span>
						<p><?php esc_html_e( 'USA', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ke.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '12' ); ?></span>
						<p><?php esc_html_e( 'Kenya', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ci.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '70' ); ?></span>
						<p><?php esc_html_e( 'Ivory Coast', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/pa.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '10' ); ?></span>
						<p><?php esc_html_e( 'Panama', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/in.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '17' ); ?></span>
						<p><?php esc_html_e( 'India', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ng.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '78' ); ?></span>
						<p><?php esc_html_e( 'Nigeria', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/mz.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '37' ); ?></span>
						<p><?php esc_html_e( 'Mozabique', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/et.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '145' ); ?></span>
						<p><?php esc_html_e( 'Ethiopia', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/tg.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '24' ); ?></span>
						<p><?php esc_html_e( 'Togo', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/cm.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '17' ); ?></span>
						<p><?php esc_html_e( 'Cameroon', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ls.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '4' ); ?></span>
						<p><?php esc_html_e( 'Lesotho', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/cd.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '6' ); ?></span>
						<p><?php esc_html_e( 'DRC', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/zm.svg' ) ); ?>" width="50" />
					</div>
					<div class="media-text--content">
						<span><?php echo esc_html( '8' ); ?></span>
						<p><?php esc_html_e( 'Zambia', 'hack' ); ?></p>
					</div>
				</div>
			</div>
			<div class="column one-fourth view-all">
				<p>
					<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'locations' ) ) ); ?>">
						<?php
						/* translators: %s #HACK name tag */
						echo sprintf( esc_html__( 'View %s', 'hack' ), hack_name_tag() );
						?>
						<br> 
						<?php esc_html_e( 'Locations', 'hack' ); ?>
					</a>
				</p>
			</div>
		</div>
	</div>
</div>
