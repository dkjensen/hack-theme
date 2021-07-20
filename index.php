<?php
/**
 * The main template file
 *
 * @package Dkjensen\Hack
 */

get_header();
?>

<div class="section section-index-hero purple-background-color">
	<div class="wrap">
		<h1><?php echo wp_kses_post( is_post_type_archive() ? post_type_archive_title( '', false ) : get_the_archive_title() ); ?></h1>
		<p><?php esc_html_e( 'The Indigitous team is here to help you kick off your Hackathon. Please reach out to us if you need specific guidance from our team.', 'hack' ); ?></p>
		<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>"><?php esc_html_e( 'Contact Us', 'hack' ); ?></a></p>
	</div>
</div>
<div class="section section-index-posts">
	<div class="wrap">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/card' );
			}
		} else {
			printf( '<p>%s</p>', esc_html__( 'No results', 'hack' ) );
		}
		?>
	</div>
</div>

<?php
get_footer();
