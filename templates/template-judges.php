<?php
/**
 * Template Name: Judges
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
			<div class="section section-judges-one blue-background-color">
				<div class="wrap">
					<div class="row">
						<div class="column five-sixths offset-1 text-center">
							<h1>
								<?php
								/* translators: %s #HACK */
								echo sprintf( esc_html__( '%s Global Judging Process', 'hack' ), hack_name_tag() );
								?>
							</h1>
							<p class="intro-text"><?php esc_html_e( 'A global community engaging with ideas and each other to advance God’s kingdom through innovation', 'hack' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-judges-two padding-bottom-0">
				<div class="wrap">
					<div class="row">
						<div class="column five-sixths offset-1">
							<div class="section-judges-two-grid">
								<div class="section-judges-two-grid-item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/hack-judges-section-1.jpg' ) ); ?>);">
									<a href="#gd-item-1">
									<span class="section-judges-pg">
										<span class="active"></span>
										<span></span>
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</span>
									<h3><?php esc_html_e( 'Inform', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'A brief overview of what you are trying to solve.', 'hack' ); ?></p>
									</a>
								</div>
								<div class="section-judges-two-grid-item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/hack-judges-section-2.jpg' ) ); ?>);">
									<a href="#gd-item-2">
									<span class="section-judges-pg">
										<span class="active"></span>
										<span class="active"></span>
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</span>
									<h3><?php esc_html_e( 'Vote Local', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'A brief overview of what you are trying to solve.', 'hack' ); ?></p>
									</a>
								</div>
								<div class="section-judges-two-grid-item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/hack-judges-section-3.jpg' ) ); ?>);">
									<a href="#gd-item-3">
									<span class="section-judges-pg">
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span></span>
										<span></span>
										<span></span>
									</span>
									<h3><?php esc_html_e( 'Submit', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'A brief overview of what you are trying to solve.', 'hack' ); ?></p>
									</a>
								</div>
								<div class="section-judges-two-grid-item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/hack-judges-section-4.jpg' ) ); ?>);">
									<a href="#gd-item-4">
									<span class="section-judges-pg">
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span></span>
										<span></span>
									</span>
									<h3><?php esc_html_e( '#4 Vote Regional', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'A brief overview of what you are trying to solve.', 'hack' ); ?></p>
									</a>
								</div>
								<div class="section-judges-two-grid-item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/hack-judges-section-5.jpg' ) ); ?>);">
									<a href="#gd-item-5">
									<span class="section-judges-pg">
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span></span>
									</span>
									<h3><?php esc_html_e( '#5 Final Meeting', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'A brief overview of what you are trying to solve.', 'hack' ); ?></p>
									</a>
								</div>
								<div class="section-judges-two-grid-item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/hack-judges-section-6.jpg' ) ); ?>);">
									<a href="#gd-item-6">
									<span class="section-judges-pg">
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
									</span>
									<h3><?php esc_html_e( '#6 Vote Global', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'A brief overview of what you are trying to solve.', 'hack' ); ?></p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-judges-three">
				<div class="wrap">
					<div class="row">
						<div class="column one-third offset-1">
							<blockquote class="primary-color margin-top-0"><?php esc_html_e( 'We firmly believe that a global judging process helps us achieve our goal for excellence, innovation and that judging is an important part of mass collaboration.', 'hack' ); ?></blockquote>
						</div>
						<div class="column five-twelfths offset-1">
							<p><?php esc_html_e( 'Teams would submit a short video presentation, along with some questions and answers at the end of their #HACK weekend to their city hub.', 'hack' ); ?></p>
							<p><?php esc_html_e( 'The city lead team would select their top project to move onto judging at the regional level. Each City Lead will post their top project summary.', 'hack' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-judges-four gray-300-background-color">
				<div class="wrap">
					<div class="row">
						<div class="column five-sixths offset-1">
							<h2><?php esc_html_e( 'Categories', 'hack' ); ?></h2>
							<p class="intro-text"><?php esc_html_e( 'Your city/country will vote for the projects based on the following categories. Here are our recommended judging criteria for you to select the top solutions of your hackathon. It would be terrific to hand out prizes to the top teams in each category, even if they’re electronic certificates or a small gift.', 'hack' ); ?></p>
							<div class="row">
								<div class="one-third">
									<p><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-bible.svg' ) ); ?>" height="78" /></p>
									<h3 class="primary-color"><?php esc_html_e( 'Kingdom Impact', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Does this solution have a kingdom impact? Does it advance God’s purposes as communicated in the Bible?', 'hack' ); ?></p>
								</div>
								<div class="one-third">
									<p><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-city.svg' ) ); ?>" height="78" /></p>
									<h3 class="primary-color"><?php esc_html_e( 'Innovation', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Is this an original or unique approach? Has the team done something different in how they have addressed the challenge? ', 'hack' ); ?></p>
								</div>
								<div class="one-third">
									<p><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-globe.svg' ) ); ?>" height="78" /></p>
									<h3 class="primary-color"><?php esc_html_e( 'Viability', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'How viable is this in the real world? Is this solution implementable? How hard would it be to scale?', 'hack' ); ?></p>
								</div>
								<div class="one-third">
									<p><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-locations.svg' ) ); ?>" height="78" /></p>
									<h3 class="primary-color"><?php esc_html_e( 'Completeness', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Is the project still conceptual, or has it been more fully developed? Is there a working prototype?', 'hack' ); ?></p>
								</div>
								<div class="one-third">
									<p><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-prize.svg' ) ); ?>" height="78" /></p>
									<h3 class="primary-color"><?php esc_html_e( 'People’s Choice', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Is there a project that is by far the favorite from the group?', 'hack' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-judges-five padding-0">
				<div id="gd-item-1" class="section-judges-five-info" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/hack-judges-section-1.jpg' ) ); ?>);">
					<div class="wrap">
						<div class="row">
							<div class="column one-half shadow">
								<div class="section-judges-five-info-content">
									<span class="section-judges-pg">
										<span class="active"></span>
										<span></span>
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</span>
									<h2><?php esc_html_e( 'Inform Participants', 'hack' ); ?></h2>
									<p class="intro-text"><?php esc_html_e( 'One of the goals for #HACK is to ask all teams to complete a project summary form to present their project and answer a few (1-3) questions.', 'hack' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="gd-item-2" class="section-judges-five-info" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/hack-judges-section-2.jpg' ) ); ?>);">
					<div class="wrap">
						<div class="row">
							<div class="column one-half"></div>
							<div class="column one-half shadow right">
								<div class="section-judges-five-info-content">
									<span class="section-judges-pg">
										<span class="active"></span>
										<span class="active"></span>
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</span>
									<h2><?php esc_html_e( 'Elect Top Local Projects', 'hack' ); ?></h2>
									<p class="intro-text"><?php esc_html_e( 'One of the goals for #HACK is to ask all teams to complete a project summary form to present their project and answer a few (1-3) questions.', 'hack' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="gd-item-3" class="section-judges-five-info" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/hack-judges-section-3.jpg' ) ); ?>);">
					<div class="wrap">
						<div class="row">
							<div class="column one-third"></div>
							<div class="column one-third shadow full">
								<div class="section-judges-five-info-content">
									<span class="section-judges-pg">
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span></span>
										<span></span>
									</span>
									<h2><?php esc_html_e( 'Submit Projects', 'hack' ); ?></h2>
									<p class="intro-text"><?php esc_html_e( 'The top project per city that receives the highest marks in all 4 categories will advance to the regional judging process. ', 'hack' ); ?></p>
								</div>
							</div>
							<div class="column one-third"></div>
						</div>
					</div>
				</div>
				<div id="gd-item-4" class="section-judges-five-info" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/hack-judges-section-4.jpg' ) ); ?>);">
					<div class="wrap">
						<div class="row">
							<div class="column one-half shadow">
								<div class="section-judges-five-info-content">
									<span class="section-judges-pg">
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span></span>
									</span>
									<h2><?php esc_html_e( 'Elect Top Regional Projects', 'hack' ); ?></h2>
									<p class="intro-text"><?php esc_html_e( 'One of the goals for #HACK is to ask all teams to complete a project summary form to present their project and answer a few (1-3) questions.', 'hack' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="gd-item-5" class="section-judges-five-info" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/hack-judges-section-5.jpg' ) ); ?>);">
					<div class="wrap">
						<div class="row">
							<div class="column one-half"></div>
							<div class="column one-half shadow right">
								<div class="section-judges-five-info-content">
									<span class="section-judges-pg">
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
									</span>
									<h2><?php esc_html_e( 'Join Presentation', 'hack' ); ?></h2>
									<p class="intro-text"><?php esc_html_e( 'One of the goals for #HACK is to ask all teams to complete a project summary form to present their project and answer a few (1-3) questions.', 'hack' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="gd-item-6" class="section-judges-five-info" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/hack-judges-section-6.jpg' ) ); ?>);">
					<div class="wrap">
						<div class="row">
							<div class="column one-third"></div>
							<div class="column one-third shadow full">
								<div class="section-judges-five-info-content">
									<span class="section-judges-pg">
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span></span>
										<span></span>
										<span></span>
									</span>
									<h2><?php esc_html_e( 'Global Projects Vote', 'hack' ); ?></h2>
									<p class="intro-text"><?php esc_html_e( 'The top project per city that receives the highest marks in all 4 categories will advance to the regional judging process. ', 'hack' ); ?></p>
								</div>
							</div>
							<div class="column one-third"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-judges-six purple-background-color">
				<div class="wrap">
					<h1><?php esc_html_e( 'Meet The Judges', 'hack' ); ?></h1>
					<div class="row">
						<div class="column one-third">
							<div class="section-judges-six-content">
								<div class="text-center">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/andrew-fang.png' ) ); ?>" width="152" />
									<h4><?php echo esc_html( 'Andrew' ); ?></h4>
									<h6 class="tan-color"><?php esc_html_e( 'North America', 'hack' ); ?></h6>
								</div>
								<p><?php esc_html_e( 'Loves to imagine new ways to empower people towards the great commission beyond the four church walls.', 'hack' ); ?></p>
							</div>
						</div>
						<div class="column one-third">
							<div class="section-judges-six-content">
								<div class="text-center">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/andrew-fang.png' ) ); ?>" width="152" />
									<h4><?php echo esc_html( 'Andrew' ); ?></h4>
									<h6 class="tan-color"><?php esc_html_e( 'North America', 'hack' ); ?></h6>
								</div>
								<p><?php esc_html_e( 'Loves to imagine new ways to empower people towards the great commission beyond the four church walls.', 'hack' ); ?></p>
							</div>
						</div>
						<div class="column one-third">
							<div class="section-judges-six-content">
								<div class="text-center">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/andrew-fang.png' ) ); ?>" width="152" />
									<h4><?php echo esc_html( 'Andrew' ); ?></h4>
									<h6 class="tan-color"><?php esc_html_e( 'North America', 'hack' ); ?></h6>
								</div>
								<p><?php esc_html_e( 'Loves to imagine new ways to empower people towards the great commission beyond the four church walls.', 'hack' ); ?></p>
							</div>
						</div>
						<div class="column one-third">
							<div class="section-judges-six-content">
								<div class="text-center">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/andrew-fang.png' ) ); ?>" width="152" />
									<h4><?php echo esc_html( 'Andrew' ); ?></h4>
									<h6 class="tan-color"><?php esc_html_e( 'North America', 'hack' ); ?></h6>
								</div>
								<p><?php esc_html_e( 'Loves to imagine new ways to empower people towards the great commission beyond the four church walls.', 'hack' ); ?></p>
							</div>
						</div>
						<div class="column one-third">
							<div class="section-judges-six-content">
								<div class="text-center">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/andrew-fang.png' ) ); ?>" width="152" />
									<h4><?php echo esc_html( 'Andrew' ); ?></h4>
									<h6 class="tan-color"><?php esc_html_e( 'North America', 'hack' ); ?></h6>
								</div>
								<p><?php esc_html_e( 'Loves to imagine new ways to empower people towards the great commission beyond the four church walls.', 'hack' ); ?></p>
							</div>
						</div>
						<div class="column one-third">
							<div class="section-judges-six-content">
								<div class="text-center">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/andrew-fang.png' ) ); ?>" width="152" />
									<h4><?php echo esc_html( 'Andrew' ); ?></h4>
									<h6 class="tan-color"><?php esc_html_e( 'North America', 'hack' ); ?></h6>
								</div>
								<p><?php esc_html_e( 'Loves to imagine new ways to empower people towards the great commission beyond the four church walls.', 'hack' ); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php get_template_part( 'template-parts/callouts-2' ); ?>
		</article>

		<?php
	endwhile;
endif;

get_footer();
