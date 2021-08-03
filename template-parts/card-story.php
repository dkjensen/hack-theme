<div <?php post_class( 'card-story' ); ?><?php /* data-lity-target="#story-content-<?php echo esc_attr( get_the_ID() ); ?>" data-lity*/ ?>>
	<div class="card-story--content">
		<div class="card-story--content-header">
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
							'<img src="%s" width="60" title="%s" />',
							esc_url( get_theme_file_uri( 'assets/img/flags/' . strtolower( $country_code ) . '.svg' ) ),
							esc_attr( $location->name )
						);

						$hack_flags[] = strtolower( $country_code );
					}
				}
			);
			?>
		</div>
		<h3><?php the_excerpt(); ?></h3>
		<div class="card-story--content-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
	</div>
	<div id="story-content-<?php echo esc_attr( get_the_ID() ); ?>" class="card-story--content-rendered">
		<div class="card-story--content-rendered-header">
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
