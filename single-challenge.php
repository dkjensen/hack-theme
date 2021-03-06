<?php
/**
 * Challenge Template File
 *
 * @package Dkjensen\Hack
 */

$hack_challenge_hero = wp_get_attachment_image_url( get_term_meta( get_queried_object_id(), 'featured_image', true ), 'full' );

get_header();

while ( have_posts() ) {
	the_post();

	?>

<div class="wrap">
	<p class="breadcrumbs">
		<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'challenges' ) ) ); ?>">
		<?php esc_html_e( 'Challenges', 'hack' ); ?>
		</a>
		<span>
		> <?php echo esc_html( the_title() ); ?>
		</span>
	</p>
</div>

	<div class="section section-challenge-one" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url( null, 'full' ) ); ?>">
		<div class="wrap">
			<div class="section-challenge-one-title">
				<?php the_title( '<h1>', '</h1>' ); ?>
				<h2><?php echo esc_html( get_post_meta( get_the_id(), 'header_subtitle', true ) ); ?></h2>
				<p><?php echo esc_html( get_post_meta( get_the_id(), 'header_paragraph', true ) ); ?></p>
			</div>
			<div class="section-challenge-one-presenters">
			<?php
			if ( function_exists( '\get_field' ) ) {
				$hack_presented_by = get_field( 'presented_by' );

				if ( ! empty( $hack_presented_by ) ) {
					?>

						<p><?php esc_html_e( 'This Challenge is Presented by:', 'hack' ); ?></p>
						<div class="section-challenge-one-presenters--items">
							<?php
							foreach ( $hack_presented_by as $hack_presenter ) {
								printf( '<a href="%s" target="_blank">%s</a>', esc_url( $hack_presenter['website'] ), wp_get_attachment_image( $hack_presenter['logo'], 'full' ) );
							}
							?>
							</div>
						<?php
				}
			}
			?>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="wrap">
			<?php the_content(); ?>
		</div>
	</div>

	<?php
}

get_template_part( 'template-parts/quotes' );

get_footer();
