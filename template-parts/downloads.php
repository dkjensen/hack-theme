<div class="section template-parts-downloads">
	<div class="wrap">
		<div class="row">
			<div class="column one-third">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/about/hack-about-section-11.jpg' ) ); ?>" />
			</div>
			<div class="column two-thirds">
				<h5 class="divider"><?php esc_html_e( 'Downloads', 'hack' ); ?></h5>
				<h2>
					<?php
					/* translators: %s #HACK */
					echo sprintf( esc_html__( 'Want to know more about %s?', 'hack' ), '<span>#HACK</span>' );
					?>
				</h2>
				<div class="row">
					<div class="column seven-twelfths">
						<p><?php esc_html_e( 'Check out our resources or download the report from #HACK2020 for more information. ', 'hack' ); ?></p>
						<br>
						<p>
							<a href="<?php echo esc_url( get_post_type_archive_link( 'resource' ) ); ?>" target="_blank"><?php esc_html_e( 'Resources', 'hack' ); ?></a><br>
							<a href="https://hack.indigitous.org/wp-content/uploads/2021/07/HACK2020-Final-Report.pdf" target="_blank"><i class="fas fa-download"></i> <?php esc_html_e( '#HACK2020 Report', 'hack' ); ?></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
