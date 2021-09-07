<?php
/**
 * The main template file
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\hack_pagination;

get_header();
?>
<?php
$is_lead = get_query_var( 'leads' );
?>

<div class="
	<?php
	echo ( ! $is_lead ?
		'section section-index-hero purple-background-color'
			:
		'section section-index-hero yellow-background-color' );
	?>
	">
<div class="wrap">
		
		<h1>
		<?php
		echo wp_kses_post( is_post_type_archive() ? post_type_archive_title( '', false ) : get_the_archive_title() );
		echo ( ! $is_lead ? '' : ' for #HACK Leads' );
		?>
		</h1>
		<p><?php esc_html_e( 'Check out the resources for #HACK. If you are are looking for something specific or need additional assistance please reach out to the Indigitous team.', 'hack' ); ?></p>
		<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>"><?php esc_html_e( 'Contact Us', 'hack' ); ?></a></p>
	</div>
</div>
<div class="section section-index-posts">
	<div class="wrap">
		<div id="content" class="site-content">
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
		<?php hack_pagination(); ?>
	</div>
</div>

<?php
get_footer();
