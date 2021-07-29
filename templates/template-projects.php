<?php
/**
 * Template Name: Projects
 *
 * @package Dkjensen\Hack
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="section section-projects-one">
				<div class="wrap">
					<h1><?php esc_html_e( '#HACK Projects', 'hack' ); ?></h1>
					<p class="intro-text"><?php esc_html_e( 'The Indigitous hackathon is a unique opportunity to gather people with unique skill sets for the purpose of responding to the most pressing needs that impact our society.', 'hack' ); ?></p>
				</div>
			</div>
			<div class="section section-projects-two">
				<div class="wrap">
					<div class="row">
						<div class="column one-third">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/projects/hack-projects-globe.svg' ) ); ?>" width="70" />
								</div>
								<div class="media-text--content">
									<h3 class="primary-color"><?php esc_html_e( 'Global Challenges', 'hack' ); ?></h3>
								</div>
							</div>
							<p><?php esc_html_e( 'Identifying overarching, global mission gaps helps us focus our efforts in bringing the gospel to where it has yet to go. #HACK2021 is seeking partnering organisations who bear missions gaps issues we can undertake.', 'hack' ); ?></p>
 
							<p><?php esc_html_e( 'With all selected global missions challenges, we are prepared to help frame the opportunity so teams can prototype innovative digital solutions.', 'hack' ); ?></p>
							<p><a href="https://indigitous.typeform.com/to/RQGajmbR" class="button" target="_blank"><?php esc_html_e( 'Become a Partner', 'hack' ); ?></a></p>
						</div>
						<div class="column one-third">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/projects/hack-projects-globe.svg' ) ); ?>" width="70" />
								</div>
								<div class="media-text--content">
									<h3 class="primary-color"><?php esc_html_e( 'Local Challenges', 'hack' ); ?></h3>
								</div>
							</div>
							<p><?php esc_html_e( 'Identifying overarching, global mission gaps helps us focus our efforts in bringing the gospel to where it has yet to go. #HACK2021 is seeking partnering organisations who bear missions gaps issues we can undertake.', 'hack' ); ?></p>
 
							<p><?php esc_html_e( 'With all selected global missions challenges, we are prepared to help frame the opportunity so teams can prototype innovative digital solutions.', 'hack' ); ?></p>
							<p><a href="#">+ <?php esc_html_e( 'View More', 'hack' ); ?></a></p>
						</div>
						<div class="column one-third">
							<blockquote class="primary-color"><?php esc_html_e( 'Identifying overarching, global mission gaps helps us focus our efforts in bringing the gospel to where it has yet to go.', 'hack' ); ?></blockquote>
							<p><a href="#">+ <?php esc_html_e( 'View More', 'hack' ); ?></a></p>
						</div>
					</div>
				</div>
			</div>

			<?php get_template_part( 'template-parts/callouts' ); ?>
		</article>

		<?php
	endwhile;
endif;

get_footer();
