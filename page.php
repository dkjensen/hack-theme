<?php
/**
 * The main template file
 *
 * @package Dkjensen\Hack
 */

get_header();
?>

	<div class="wrap">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();

				the_content();
			}
		}
		?>
	</div>

<?php
get_footer();
