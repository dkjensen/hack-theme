<?php
/**
 * The main template file
 *
 * @package Dkjensen\Hack
 */

get_header();

$hack_from_year = gmdate( 'Y' ) - 1;
?>

<div class="section section-stories-hero">
	<div class="wrap">
		<h1><?php esc_html_e( 'Stories from #HACK', 'hack' ); ?></h1>
		<p class="intro-text"><?php esc_html_e( 'The Indigitous team is here to help you kick off your Hackathon. Please reach out to us if you need specific guidance from our team.', 'hack' ); ?></p>
	</div>
</div>
<div class="section section-stories-posts padding-top-0">
	<div class="wrap">
		<div class="row">
			<div class="column one-fourth">
				<?php
				// phpcs:ignore
				for ( $i = 2016; $i <= $hack_from_year; $i++ ) {
					?>

					<div class="section-stories-posts-toggle toggle-trigger" data-section-id="<?php echo esc_attr( $i ); ?>">
						<span><?php echo esc_html( $i ); ?></span>
					</div>

					<?php
				}
				?>
			</div>
			<div class="column two-thirds offset-1">
				<div id="content">

					<?php
					// phpcs:ignore
					for ( $i = 2016; $i <= $hack_from_year; $i++ ) {
						$hack_stories = new \WP_Query(
							array(
								'post_type'      => 'story',
								'posts_per_page' => -1,
								'post_status'    => 'publish',
								'meta_key'       => 'year',
								'meta_value'     => $i,
							)
						);
						?>

						<div class="section-stories-posts-group toggle-content" data-section-id="<?php echo esc_attr( $i ); ?>">
							<?php
							while ( $hack_stories->have_posts() ) {
								$hack_stories->the_post();

								get_template_part( 'template-parts/story' );
							}
							?>
						</div>

						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/testimonials' ); ?>

<?php
get_footer();
