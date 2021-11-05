<?php
/**
 * Single Event Template
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\hack_name_tag;
global $hack_infinity_query;
get_header();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="section">

	<div class="wrap">
		<div class="row">
				<div class="column one-fourth">
					<p class="breadcrumbs">

<?php
	$hack_weekend_type = get_post_meta( get_the_id(), 'weekend_select', true );
?>
<?php
	$hack_speaker = get_post_meta( get_the_id(), 'presenter', true );
?>
<?php
	$hack_host = get_post_meta( get_the_id(), 'hosted_by', true );
?>
	<a href="
	<?php
	echo ( $hack_weekend_type == 'City Lead' ? '/city-lead-program' : '/program' );
	?>
	
	">
	<?php esc_html_e( '< All Events', 'hack' ); ?>
	</a>
		
					</p>
					<div class="event--summary">

					<div class="date-wrapper">
						<?php
								$hack_start_date = get_post_meta( get_the_ID(), 'start_date', true );
								$hack_start_date = strtotime( $hack_start_date );
						?>
							<h3>
								<?php
								echo esc_html( gmdate( 'd', $hack_start_date ) );
								?>
							</h3>
							<span class="bold">
							<?php
								echo esc_html( gmdate( 'F', $hack_start_date ) );
							?>
							</span>
							<span>
								<?php echo esc_html( 'Time: ' . gmdate( 'H:i', $hack_start_date ) ); ?> <?php echo esc_html( get_post_meta( get_the_id(), 'timezone', true ) ); ?>
							</span>
							<a class="text-color" rel="noopener" target="_blank" 
							href="<?php echo esc_html( get_post_meta( get_the_id(), 'dateful_link', true ) ); ?>">
						<?php esc_html_e( 'View My Timezone', 'hack' ); ?>
						</a>
					</div>

								<span>
								<?php esc_html_e( 'Location: ', 'hack' ); ?>
									<?php echo esc_html( get_post_meta( get_the_id(), 'event_location', true ) ); ?>

								</span>
		
								<?php
								echo ( ! $hack_speaker ?
								 ''
								 :
								sprintf(
									'<span>%s</span>',
									esc_html( 'Speaker: ' . $hack_speaker )
								) );
								?>
								<?php
								echo ( ! $hack_host ?
								 ''
								 :
								sprintf(
									'<span>%s</span>',
									esc_html( 'Hosted by: ' . $hack_host )
								) );
								?>
		
								<span>
								<?php esc_html_e( 'Duration: ', 'hack' ); ?>
								<?php echo esc_html( get_post_meta( get_the_id(), 'event_duration', true ) ); ?>
								</span>
		
								<span>
								<?php esc_html_e( 'Cost: Free', 'hack' ); ?>
								</span>
		
								<a class="button" rel="noopener" target="_blank" href="<?php echo esc_html( get_post_meta( get_the_id(), 'event_link', true ) ); ?>">
								<?php esc_html_e( 'Join', 'hack' ); ?>
								</a>
					</div>
				</div>
				<div class="column seven-twelfths offset-1">
					<h2>
						<?php echo esc_html( get_the_title() ); ?>
					</h2>
					<div class="event--content">
						<?php the_content(); ?>
					</div>
				</div>
		</div>
	</div>
</div>

</article>
	<?php get_template_part( 'template-parts/callouts-2' ); ?>

<?php

get_footer();
