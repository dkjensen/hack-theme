<div class="section template-parts-global-participation-2 blue-background-color">
	<div class="wrap">
		<div class="row">
			<div class="column one-half offset-3">
				<h5 class="divider text-center primary-color">
					<?php esc_html_e( 'Global Participation of #HACK', 'hack' ); ?>
				</h5>
				<h2 class="text-center">
					<span><?php echo esc_html( '#HACK2021' ); ?></span> <?php esc_html_e( 'will be hosted in these locations and more', 'hack' ); ?>
				</h2>
			</div>
		</div>
	</div>
	<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/participate/hack-participate-earth.svg' ) ); ?>" class="template-parts-global-participation-2-map" />

	<?php if ( ! is_page( 'participate' ) ) { ?>

	<div class="wrap">
		<div class="row">
			<div class="column five-sixths offset-1">
				<div class="row template-parts-global-participation-2-items">
					<div class="column one-fifth">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/au.svg' ) ); ?>" class="margin-bottom-xxs" width="72" />
						<h6 class="text-color"><?php esc_html_e( 'Australia', 'hack' ); ?></h6>
					</div>
					<div class="column one-fifth">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/au.svg' ) ); ?>" class="margin-bottom-xxs" width="72" />
						<h6 class="text-color"><?php esc_html_e( 'New Zealand', 'hack' ); ?></h6>
					</div>
					<div class="column one-fifth">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/hk.svg' ) ); ?>" class="margin-bottom-xxs" width="72" />
						<h6 class="text-color"><?php esc_html_e( 'Hong Kong', 'hack' ); ?></h6>
					</div>
					<div class="column one-fifth">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ph.svg' ) ); ?>" class="margin-bottom-xxs" width="72" />
						<h6 class="text-color"><?php esc_html_e( 'Philippines', 'hack' ); ?></h6>
					</div>
					<div class="column one-fifth">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/id.svg' ) ); ?>" class="margin-bottom-xxs" width="72" />
						<h6 class="text-color"><?php esc_html_e( 'Indonesia', 'hack' ); ?></h6>
					</div>
					<div class="column one-fifth">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/pk.svg' ) ); ?>" class="margin-bottom-xxs" width="72" />
						<h6 class="text-color"><?php esc_html_e( 'Pakistan', 'hack' ); ?></h6>
					</div>
					<div class="column one-fifth">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/us.svg' ) ); ?>" class="margin-bottom-xxs" width="72" />
						<h6 class="text-color"><?php esc_html_e( 'United States', 'hack' ); ?></h6>
					</div>
					<div class="column one-fifth">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/de.svg' ) ); ?>" class="margin-bottom-xxs" width="72" />
						<h6 class="text-color"><?php esc_html_e( 'Germany', 'hack' ); ?></h6>
					</div>
					<div class="column one-fifth">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ca.svg' ) ); ?>" class="margin-bottom-xxs" width="72" />
						<h6 class="text-color"><?php esc_html_e( 'Canada', 'hack' ); ?></h6>
					</div>
					<div class="column one-fifth">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ar.svg' ) ); ?>" class="margin-bottom-xxs" width="72" />
						<h6 class="text-color"><?php esc_html_e( 'Argentina', 'hack' ); ?></h6>
					</div>
					<div class="column one-fifth">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/th.svg' ) ); ?>" class="margin-bottom-xxs" width="72" />
						<h6 class="text-color"><?php esc_html_e( 'Thailand', 'hack' ); ?></h6>
					</div>
					<div class="column one-fifth">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/tr.svg' ) ); ?>" class="margin-bottom-xxs" width="72" />
						<h6 class="text-color"><?php esc_html_e( 'Turkey', 'hack' ); ?></h6>
					</div>
					<div class="column one-fifth">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/cm.svg' ) ); ?>" class="margin-bottom-xxs" width="72" />
						<h6 class="text-color"><?php esc_html_e( 'Cameroon', 'hack' ); ?></h6>
					</div>
					<div class="column one-fifth">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ug.svg' ) ); ?>" class="margin-bottom-xxs" width="72" />
						<h6 class="text-color"><?php esc_html_e( 'Uganda', 'hack' ); ?></h6>
					</div>
					<div class="column one-fifth">
						<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'lead' ) ) ); ?>"><?php esc_html_e( 'Don’t see your city? Lead one in your city', 'hack' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php } ?>
</div>
