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

<div class="section section-location-one">

	<div class="wrap">
		<p class="breadcrumbs">
	  <a href="/events"><?php esc_html_e( 'Events', 'hack' ); ?></a>
	  <span>
	  > <?php echo get_the_archive_title(); ?>
	  </span>
	</p>
		  <?php echo esc_html( get_term_meta( get_queried_object_id(), 'presenter', true ) ); ?>
	
	</div>
</div>

	<?php get_template_part( 'template-parts/callouts-2' ); ?>

<?php

get_footer();
