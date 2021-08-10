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
				for ( $i = gmdate( 'Y' ) - 1; $i >= 2016; $i-- ) {
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
					for ( $i = gmdate( 'Y' ); $i >= 2016; $i-- ) {
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

								?>

								<article <?php post_class(); ?>>
									<div class="story-header">
									<?php
									$hack_locations = wp_get_post_terms( get_the_ID(), 'location' );
									$hack_flags     = array();

									array_walk(
										$hack_locations,
										function( $location ) use ( &$hack_flags ) {
											$country_code = esc_attr( get_term_meta( $location->term_id, 'country_code', true ) );

											if ( ! $country_code ) {
												return;
											}

											if ( ! in_array( strtolower( $country_code ), $hack_flags, true ) ) {
												printf(
													'<img src="%s" width="35" title="%s" />',
													esc_url( get_theme_file_uri( 'assets/img/flags/' . strtolower( $country_code ) . '.svg' ) ),
													esc_attr( $location->name )
												);

												$hack_flags[] = strtolower( $country_code );
											}
										}
									);
									?>

									<h3>
										<?php
										$prize = get_post_meta( get_the_ID(), 'price', true );
										if ( $prize && $prize !== (string) '0' ) {
											printf( '<span class="primary-color">%s</span> | ', esc_html( $prize ) );
										}
										?>
										<?php
											$locations = wp_get_post_terms( get_the_ID(), 'location' );

											echo $locations ? $locations[0]->name : '';
										?>
									</h3>
									</div>
									<div class="story-content">
										<?php the_content(); ?>
									</div>
								</article>

								<?php
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
