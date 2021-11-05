<?php
/**
 * Template Name: Next Step
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\hack_name_tag;

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="section section-nextstep-one blue-background-color">
				<div class="wrap">
					<div class="row">
						<div class="column five-sixths offset-1">
							<h1>
							<?php esc_html_e( 'Next Steps After', 'hack' ); ?>
								<span>
								<?php esc_html_e( '#HACK2021', 'hack' ); ?>
								</span>
							</h1>
							<p>
								<?php esc_html_e( 'Thank you so much for joining #HACK2021. You made a valuable contribution of time and skill to bring the gospel where it needs to go. Looking for the next step to take after #HACK2021? Here are 3 options or, please feel free to ', 'hack' ); ?>
								<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>"><?php esc_html_e( 'contact us.', 'hack' ); ?></a>
								<?php esc_html_e( 'We would love to hear from you.', 'hack' ); ?>
						</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-nextstep-two">
				<div class="wrap">
					<div class="row">

						<div class="column one-third">
							<div class="section-nextstep-two-item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/next-steps/next-step-1.jpg' ) ); ?>)">
								<div class="section-nextstep-two-item-info">
						  <h3><?php esc_html_e( 'Using my skills to share my faith felt good. I\'d like to find out more.', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Interested in sharing the good news? Wondering if you are ready to start? Take this quiz to gauge your readiness.', 'hack' ); ?></p>
									<p><a href="https://indigitous.typeform.com/to/Wo1dj0sS" target="_blank" class="button"><?php esc_html_e( 'Take the Quiz', 'hack' ); ?></a></p>
								</div>
							</div>
						</div>

						<div class="column one-third">
							<div class="section-nextstep-two-item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/next-steps/next-step-2.jpg' ) ); ?>)">
								<div class="section-nextstep-two-item-info">
						  <h3><?php esc_html_e( '#HACK2021 was awesome! I\'d love to find out about more events like this and join #HACK2022.', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'We thought so to thanks to you! Please drop your email below and we\'ll:', 'hack' ); ?></p>
									<ul class="basic-list">
										<li><?php esc_html_e( 'Email you the results of #HACK2021 so you can find out what happened', 'hack' ); ?></li>
										<li><?php esc_html_e( 'Let you know as soon as registration for #HACK2022 opens', 'hack' ); ?></li>
										<li><?php esc_html_e( 'Keep you informed of any other awesome events and similar news', 'hack' ); ?></li>
									</ul>
									<p><a href="https://indigitous.typeform.com/to/e4fM2CQR#source=xxxxx" target="_blank" class="button"><?php esc_html_e( 'Sign up', 'hack' ); ?></a></p>
								</div>
							</div>
						</div>

						<div class="column one-third">
							<div class="section-nextstep-two-item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/next-steps/next-step-3.jpg' ) ); ?>)">
								<div class="section-nextstep-two-item-info">
						  <h3><?php esc_html_e( 'What I learned about Indigitous at #HACK2021 was intriguing, tell me more.', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'We are planning an Indigitous openhouse so you can ask all the questions and find out how you can get involved. Drop your email below and you\'ll be first to receive an invite.', 'hack' ); ?></p>
									<p><a href="https://indigitous.typeform.com/to/Xe2rptf1#source=xxxxx" target="_blank" class="button"><?php esc_html_e( 'I\'m in', 'hack' ); ?></a></p>
								</div>
							</div>
						</div>


			

					</div>
				</div>
			</div>

		<?php // get_template_part( 'template-parts/celebrate-2021' ); ?>
		<?php // get_template_part( 'template-parts/projects-2021' ); ?>
		</article>

		<?php
		endwhile;
		endif;

		get_footer();
