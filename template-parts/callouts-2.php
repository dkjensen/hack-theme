<?php
use function Dkjensen\Hack\Functions\hack_name_tag;
?>

<div class="section template-parts-callouts-2-hero">
	<div class="wrap text-center">
		<h1>
			<?php
			/* translators: %s #HACK name tag */
			printf( esc_html__( 'Join %s', 'hack' ), hack_name_tag() );
			?>
		</h1>
		<h3><?php esc_html_e( 'There are three ways you can be a part of what God is doing through #HACK.', 'hack' ); ?></h3>
	</div>
</div>
<div class="section template-parts-callouts-2-content">
	<div class="wrap">
		<div class="row">
			<div class="column one-third">
				<div class="template-parts-callouts-2-content-item blue-background-color">
					<h4><?php esc_html_e( 'Bring #HACK2021 to your city and convene hackers to help make Jesus known.', 'hack' ); ?></h4>
					<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="button"><?php esc_html_e( 'About', 'hack' ); ?></a></p>
				</div>
			</div>
			<div class="column one-third">
				<div class="template-parts-callouts-2-content-item yellow-background-color">
					<h4><?php esc_html_e( 'Use your talents for God by working on missional projects to solve the problems facing your community.', 'hack' ); ?></h4>
					<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'impact' ) ) ); ?>" class="button"><?php esc_html_e( 'Impact', 'hack' ); ?></a></p>
				</div>
			</div>
			<div class="column one-third">
				<div class="template-parts-callouts-2-content-item purple-background-color">
					<h4><?php esc_html_e( 'We need partners to help make this event a success. Find out how you can partner with us.', 'hack' ); ?></h4>
					<p><a href="<?php echo esc_url( get_post_type_archive_link( 'resource' ) ); ?>" class="button"><?php esc_html_e( 'Resources', 'hack' ); ?></a></p>
				</div>
			</div>
		</div>
	</div>
</div>
