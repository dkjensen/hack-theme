<?php
/**
 * Card template part
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\hack_post_excerpt;
?>

<article <?php post_class( 'card' ); ?>>
	<div class="card-container">
		<a href="<?php echo esc_url( get_permalink() ); ?>" target="_blank" class="card--image<?php echo ! has_post_thumbnail() ? ' placeholder' : ''; ?>">
			<?php the_post_thumbnail( '16:9' ); ?>
		</a>
		
		<div class="card--meta">
			<?php

			$hack_post_terms = get_the_terms( get_the_ID(), 'resource_type' );

			if ( is_array( $hack_post_terms ) ) {
				foreach ( $hack_post_terms as $hack_post_resource_type ) {
					?>

					<a href="<?php echo esc_url( get_term_link( $hack_post_resource_type->term_id, 'resource_type' ) ); ?>" class="card--meta-term">
						<?php echo wp_kses_post( get_term_meta( $hack_post_resource_type->term_id, 'icon', true ) ); ?>
						<?php echo esc_html( $hack_post_resource_type->name ); ?>
					</a>

					<?php
				}
			}
			?>
		</div>

		<div class="card--content">
			<?php the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" target="_blank">', '</a></h3>' ); ?>
			<?php echo hack_post_excerpt( $post ); ?>
		</div>
		
		<div class="card--actions">
			<?php if ( get_post_meta( get_the_ID(), 'download', true ) ) { ?>
			
				<a href="<?php echo esc_url( get_permalink() ); ?>" class="card--actions-download" target="_blank"><i class="fas fa-download"></i> <?php esc_html_e( 'Download', 'hack' ); ?></a>
				
			<?php } ?>
		
			<a href="#" class="card--actions-share addthis_button_compact" addthis:url="<?php echo esc_url( get_permalink() ); ?>" addthis:title="<?php echo esc_attr( get_the_title() ); ?>" ><i class="fas fa-share-alt"></i> <?php esc_html_e( 'Share', 'hack' ); ?></a>
		</div>
	</div>
</article>
