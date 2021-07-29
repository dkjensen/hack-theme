<div <?php post_class(); ?><?php /* data-lity-target="#story-content-<?php echo esc_attr( get_the_ID() ); ?>" data-lity*/ ?>>
	<div class="story--content">
		<div class="story--content-header">
			<?php
				$hack_locations = wp_get_post_terms( get_the_ID(), 'location' );
				array_walk(
					$hack_locations,
					function( $location ) {
						$country_code = esc_attr( get_term_meta( $location->term_id, 'country_code', true ) );

						if ( ! $country_code ) {
							return;
						}

						printf(
							'<img src="%s" width="60" title="%s" />',
							esc_url( get_theme_file_uri( 'assets/img/flags/' . $country_code . '.svg' ) ),
							esc_attr( $location->name )
						);
					}
				);
				?>
		</div>
		<h3><?php the_excerpt(); ?></h3>
		<div class="story--content-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
	</div>
	<div id="story-content-<?php echo esc_attr( get_the_ID() ); ?>" class="story--content-rendered">
		<div class="story--content-rendered-header">
			<?php the_title( '<h1>', '</h1>' ); ?>
			<?php
				$hack_locations = wp_get_post_terms( get_the_ID(), 'location' );
				array_walk(
					$hack_locations,
					function( $location ) {
						$country_code = esc_attr( get_term_meta( $location->term_id, 'country_code', true ) );

						if ( ! $country_code ) {
							return;
						}

						printf(
							'<img src="%s" width="60" title="%s" />',
							esc_url( get_theme_file_uri( 'assets/img/flags/' . $country_code . '.svg' ) ),
							esc_attr( $location->name )
						);
					}
				);
				?>
		</div>
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
	</div>
</div>
