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
		<h3><?php esc_html_e( 'Join #HACK2021. Whether you\'re a leader, talent looking for a way to use your skills, or an organization seeking Kingdom collaboration, there is a place at #HACK for you.', 'hack' ); ?></h3>
	</div>
</div>
<div class="section template-parts-callouts-2-content">
	<div class="wrap">
		<div class="row">
			<div class="column one-third">
				<div class="template-parts-callouts-2-content-item blue-background-color">
					<h4><?php esc_html_e( 'Since 2016, the Indigitous #HACK has served as a rallying point for those who have talents in the digital space.', 'hack' ); ?></h4>
					<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ); ?>" class="button"><?php esc_html_e( 'About', 'hack' ); ?></a></p>
				</div>
			</div>
			<div class="column one-third">
				<div class="template-parts-callouts-2-content-item yellow-background-color">
					<h4><?php esc_html_e( 'Read just a glimpse of what God has done through Indigitous #HACK.', 'hack' ); ?></h4>
					<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'impact' ) ) ); ?>" class="button"><?php esc_html_e( 'Impact', 'hack' ); ?></a></p>
				</div>
			</div>
			<div class="column one-third">
				<div class="template-parts-callouts-2-content-item purple-background-color">
					<h4><?php esc_html_e( 'Check out the resources for #HACK. Everything you need for your event.', 'hack' ); ?></h4>
					<p><a href="<?php echo esc_url( get_post_type_archive_link( 'resource' ) ); ?>" class="button"><?php esc_html_e( 'Resources', 'hack' ); ?></a></p>
				</div>
			</div>
		</div>
	</div>
</div>
