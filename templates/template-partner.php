<?php
/**
 * Template Name: Partner
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
			<div class="section section-partner-one">
				<div class="wrap">
					<div class="row">
						<div class="column one-half">
							<h6 class="divider"><?php esc_html_e( 'SAVE THE DATE: October 15-17 and 22-24, 2021', 'hack' ); ?></h6>
							<h1><?php esc_html_e( 'A Global Missional Hackathon', 'hack' ); ?></h1>
							<p>
								<?php echo esc_html_x( 'The Indigitous hackathon is a unique opportunity to gather people with unique skill sets for the purpose of responding to the most pressing needs that impact our society.', 'Partner page', 'hack' ); ?>
							</p>
							<p>
								<a href="https://indigitous.typeform.com/to/RQGajmbR" class="button" target="_blank"><?php esc_html_e( 'Become a Partner', 'hack' ); ?></a>
							</p>
						</div>
						<div class="column one-half">
							<div class="section-partner-one-graphic--container">
								<img class="section-partner-one-graphic" data-sal="slide-left" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-hero-1.png' ) ); ?>" />
								<img class="section-partner-one-graphic" data-sal="slide-down" data-sal-delay="100" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-hero-2.png' ) ); ?>" />
								<img class="section-partner-one-graphic" data-sal="slide-right" data-sal-delay="200" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-hero-3.png' ) ); ?>" />
								<img class="section-partner-one-graphic" data-sal="slide-up" data-sal-delay="300" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-hero-4.png' ) ); ?>" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-partner-two padding-bottom-0 padding-top-0">
				<div class="wrap">
					<div class="section-partner-two-container blue-light-background-color">
						<div class="row">
							<div class="column five-twelfths offset-1">
								<h2>
									<?php
									/* translators: %s #HACK name tag */
									echo sprintf( esc_html_x( '%s Registration', 'Partner page', 'hack' ), hack_name_tag() );
									?>
								</h2>
								<p><?php echo esc_html_x( 'In October 2021, the Indigitous network will convene a global hackathon of 1,000+ Christians in 40+ countries.', 'Partner page', 'hack' ); ?></p>
								<div class="section-partner-two-stats">
									<div class="section-partner-two-stats--stat">
										<div class="section-partner-two-stats--stat-image">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/partner/hack-partner-regional.svg' ) ); ?>" width="32" />
										</div>
										<div class="section-partner-two-stats--stat-count"><?php echo esc_html( '22' ); ?></div>
										<div class="section-partner-two-stats--stat-data"><h3><?php esc_html_e( 'Regional Leads', 'hack' ); ?></h3></div>
									</div>
									<div class="section-partner-two-stats--stat">
										<div class="section-partner-two-stats--stat-image">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/partner/hack-partner-city.svg' ) ); ?>" width="53" />
										</div>
										<div class="section-partner-two-stats--stat-count"><?php echo esc_html( '22' ); ?></div>
										<div class="section-partner-two-stats--stat-data"><h3><?php esc_html_e( 'City Leads', 'hack' ); ?></h3></div>
									</div>
									<div class="section-partner-two-stats--stat">
										<div class="section-partner-two-stats--stat-image">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/partner/hack-partner-locations.svg' ) ); ?>" width="53" />
										</div>
										<div class="section-partner-two-stats--stat-count"><?php echo esc_html( '22' ); ?></div>
										<div class="section-partner-two-stats--stat-data"><h3><?php esc_html_e( 'Locations', 'hack' ); ?></h3></div>
									</div>
								</div>
							</div>
							<div class="column one-third offset-1">
								<div class="section-partner-two-cities white-background-color">
									<h3><?php esc_html_e( 'Participating Cities', 'hack' ); ?></h3>
									<div class="section-partner-two-cities--city">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-flag-eth.svg' ) ); ?>" />
										<span><?php echo esc_html( 'Jakarta, Indonesia' ); ?></span>
									</div>
									<div class="section-partner-two-cities--city">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-flag-eth.svg' ) ); ?>" />
										<span><?php esc_html_e( 'Participants in Ethiopia', 'hack' ); ?></span>
									</div>
									<div class="section-partner-two-cities--city">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-flag-ind.svg' ) ); ?>" />
										<span><?php echo esc_html( 'Jakarta, Indonesia' ); ?></span>
									</div>
									<div class="section-partner-two-cities--city">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-flag-en.svg' ) ); ?>" />
										<span><?php esc_html_e( 'Participants in the USA', 'hack' ); ?></span>
									</div>
									<p><a href="#">+ <?php esc_html_e( 'View More', 'hack' ); ?></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-partner-three">
				<div class="wrap">
					<div class="row">
						<div class="column two-thirds offset-2">
							<h2 class="primary-color"><em><?php esc_html_e( 'What global mission problems can 1,000 Christians with digital talent tackle?', 'hack' ); ?></em></h2>
						</div>
					</div>
					<div class="section-partner-three--items">
						<div class="section-partner-three--items-item">
							<h3 class="primary-color"><?php esc_html_e( '#HACK is...', 'hack' ); ?></h3>
							<p><?php echo esc_html_x( 'Indigitous #HACK is a community of developers, designers, coders, gamers, communicators and entrepreneurs that aim to solve real-world problems faced on the mission field and in our local contexts through technology.', 'Partner page', 'hack' ); ?></p>
						</div>
						<div class="section-partner-three--items-item">
							<h3 class="primary-color"><?php esc_html_e( 'Mobilizing', 'hack' ); ?></h3>
							<p><?php echo esc_html_x( 'What separates Indigitous #HACK from other hackathons, is our goal of mobilizing Christian technologists to honour God through their skills and talents, and learn from one another as they build solutions to challenges faced in the world around them.', 'Partner page', 'hack' ); ?></p>
						</div>
						<div class="section-partner-three--items-item">
							<h3 class="primary-color"><?php esc_html_e( 'Collaborative', 'hack' ); ?></h3>
							<p><?php echo esc_html_x( 'These weekend-long design sprints highlight the collaborative aspect of innovation, of participating together around a common vision of developing solutions to meet the needs of the church and world.', 'Partner page', 'hack' ); ?></p>
						</div>
						<div class="section-partner-three--items-item">
							<h3 class="primary-color"><?php esc_html_e( 'Opportunities', 'hack' ); ?></h3>
							<p><?php echo esc_html_x( 'Historically, hackathons have provided remarkable opportunities for hands-on, creative solving of difficult challenges through technology.', 'Partner page', 'hack' ); ?></p>
						</div>
						<div class="section-partner-three--items-item">
							<h3 class="primary-color"><?php esc_html_e( 'Catalyze', 'hack' ); ?></h3>
							<p><?php echo esc_html_x( 'More than building cool technology prototypes, Indigitous ultimately wants to help catalyze the spread of the gospel where it needs to go.', 'Partner page', 'hack' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-partner-four"></div>
			<div class="section section-partner-five">
				<div class="wrap">
					<div class="row">
						<div class="column one-third">
							<div class="section-partner-five-sidebar blue-background-color">
								<h5 class="divider color-primary"><?php esc_html_e( 'Partnership', 'hack' ); ?></h5>
								<h2><?php esc_html_e( 'Collaborate to Create', 'hack' ); ?></h2>
								<p><?php esc_html_e( 'We want people to know the love and hope that Jesus has for each person. To this end, we are looking for partners interested in the following:', 'hack' ); ?></p>
							</div>
						</div>
						<div class="column seven-twelfths offset-1">
							<div class="section-partner-five-callout" data-sal="slide-left">
								<div class="section-partner-five-callout--img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/partner/hack-partner-globe.svg' ) ); ?>" height="67" /></div>
								<div class="section-partner-five-callout--copy">
									<h3 class="primary-color"><?php esc_html_e( 'Level 1: Global Mission Gaps', 'hack' ); ?></h3>
									<p><?php echo esc_html_x( 'Identifying overarching, global mission gaps helps us focus our efforts in bringing the gospel to where it has yet to go. #HACK2021 is seeking partnering organizations who bear missions gaps issues we can undertake.', 'Partner page', 'hack' ); ?></p>
									<p><?php echo esc_html_x( 'With all selected global missions challenges, we are prepared to help frame the opportunity so teams can prototype innovative digital solutions.', 'Partner page', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-partner-five-callout" data-sal="slide-left">
								<div class="section-partner-five-callout--img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/partner/hack-partner-field.svg' ) ); ?>" height="67" /></div>
								<div class="section-partner-five-callout--copy">
									<h3 class="primary-color"><?php esc_html_e( 'Level 2: Field Challenges', 'hack' ); ?></h3>
									<p><?php echo esc_html_x( 'Field challenges are specific projects that need to be applied in specific contexts. These issues likely require cultural contexts, specific processes or technologies to be successful.', 'Partner page', 'hack' ); ?></p>
									<p><?php echo esc_html_x( 'With all field challenges, we are prepared to help organizations invite teams into their established ministry processes or methods in order to provide innovative solutions to their issues.', 'Partner page', 'hack' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-partner-six">
				<div class="wrap">
					<h1 class="white-color" data-sal="slide-down"><?php esc_html_e( 'The Opportunity', 'hack' ); ?></h1>
					<h3 class="white-color" data-sal="slide-down"><?php echo esc_html_x( 'If your organization has Level 1 or 2 challenges or opportunities, we are interested in partnering with you.', 'Partner page', 'hack' ); ?></h3>
					<p data-sal="slide-down"><a href="https://indigitous.typeform.com/to/RQGajmbR" class="button" target="_blank"><?php esc_html_e( 'Become a Partner', 'hack' ); ?></a></p>
				</div>
			</div>

			<?php get_template_part( 'template-parts/callouts' ); ?>

			<div class="section section-partner-seven padding-bottom-0">
				<div class="wrap">
					<div class="row">
						<div class="column one-third">
							<div class="section-partner-seven-sidebar blue-background-color">
								<h5 class="divider color-primary"><?php esc_html_e( 'Partnership', 'hack' ); ?></h5>
								<h2><?php esc_html_e( 'S.C.I.P.A.B.', 'hack' ); ?></h2>
								<p>
									<?php
									esc_html_e( 'We want people to know the love and hope that Jesus has for each person. To this end, we are looking for partners interested in the following:', 'hack' );
									?>
								</p>
							</div>
						</div>
						<div class="column seven-twelfths offset-1">
							<div class="section-partner-seven-item">
								<span class="section-partner-seven-item--li yellow-background-color"><?php echo esc_html( 'S' ); ?></span>
								<div class="section-partner-seven-item--content">
									<h3><?php esc_html_e( 'Situation', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Identify the issue or problem your organization or focus group is currently facing. State what you know about the context or circumstance that is relevant to your particular issue, e.g. current state of your organization, industry, technology, geography or ministry situation or plans.', 'hack' ); ?></p>

									<p><?php esc_html_e( 'If we are solving a smaller piece of the puzzle, please outline the overarching framework you are developing to address the problem and how our challenge fits into the bigger picture.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-partner-seven-item">
								<span class="section-partner-seven-item--li blue-background-color"><?php echo esc_html( 'C' ); ?></span>
								<div class="section-partner-seven-item--content">
									<h3><?php esc_html_e( 'Complication', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Explain the critical issues (changes, pressures, demands, obstacles, etc) that are impacting your Situation, creating problems, challenges or opportunities.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-partner-seven-item">
								<span class="section-partner-seven-item--li tan-background-color"><?php echo esc_html( 'I' ); ?></span>
								<div class="section-partner-seven-item--content">
									<h3><?php esc_html_e( 'Implication', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Describe the organizational or ministry consequences of failing to act on the problem or opportunity described in the Complication. What will happen if this problem fails to be addressed properly?', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-partner-seven-item">
								<span class="section-partner-seven-item--li purple-background-color"><?php echo esc_html( 'P' ); ?></span>
								<div class="section-partner-seven-item--content">
									<h3><?php esc_html_e( 'Position', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'State clearly and confidently your opinion about what needs to be done to solve the problem of your organization or focus group.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-partner-seven-item">
								<span class="section-partner-seven-item--li blue-light-background-color"><?php echo esc_html( 'A' ); ?></span>
								<div class="section-partner-seven-item--content">
									<h3><?php esc_html_e( 'Action', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Help the #HACK teams understand the tools needed, the questions to consider, or the obstacles to keep in mind as they work towards a solution for your issue.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-partner-seven-item">
								<span class="section-partner-seven-item--li pink-background-color"><?php echo esc_html( 'B' ); ?></span>
								<div class="section-partner-seven-item--content">
									<h3><?php esc_html_e( 'Benefit', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Describe how your recommended Position and Action will address the specific needs of your organization or focus group. State clearly and quantifiably how their contributions will help your organization or focus group in the future.', 'hack' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section section-partner-nine gray-300-background-color">
				<div class="wrap">
					<div class="section-partner-nine-works-grid">
						<div class="section-partner-nine-works-grid--item">
							<h5 class="divider"><?php esc_html_e( 'Application', 'hack' ); ?></h5>
							<h2 class="yellow-color"><?php esc_html_e( 'How It Works', 'hack' ); ?></h2>
						</div>
						<div class="section-partner-nine-works-grid--item yellow-background-color">
								<span class="numbered-outline">1</span>
								<h3><?php esc_html_e( 'Interview', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'Fill in the application form.', 'hack' ); ?></p>
						</div>
						<div class="section-partner-nine-works-grid--item white-background-color">
								<span class="numbered-outline">2</span>
								<h3><?php esc_html_e( 'Coordinate', 'hack' ); ?></h3>
								<p><?php esc_html_e( '#HACK leadership will arrange a call for further discussion.', 'hack' ); ?></p>
						</div>
						<div class="section-partner-nine-works-grid--item white-background-color">
								<span class="numbered-outline">3</span>
								<h3><?php esc_html_e( 'Communicate', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'If your application is selected, we will support you through the process of communicating your challenge to the #HACK teams.', 'hack' ); ?></p>
						</div>
						<div class="section-partner-nine-works-grid--item white-background-color">
								<span class="numbered-outline">4</span>
								<h3><?php esc_html_e( 'Assemble', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'Communicate your challenge during the #HACK weekends.', 'hack' ); ?></p>
						</div>
						<div class="section-partner-nine-works-grid--item white-background-color">
								<span class="numbered-outline">5</span>
								<h3><?php echo hack_name_tag(); ?></h3>
								<p><?php esc_html_e( 'Support the teams over two #HACK weekends as they work through your challenges and answer any questions.', 'hack' ); ?></p>
						</div>
						<div class="section-partner-nine-works-grid--item blue-background-color">
								<span class="numbered-outline">6</span>
								<h3><?php esc_html_e( 'Moving Forward', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'Select the team(s) that provided the most helpful solutions and potentially invite them to continue to build towards an MVP (minimum viable product).', 'hack' ); ?></p>
						</div>
						<div class="section-partner-nine-works-grid--item">
							<h2>
								<?php
								/* translators: %s #HACK name tag */
								printf( esc_html_x( 'Interested in partnering with %s in your city?', 'Partner page', 'hack' ), hack_name_tag() );
								?>
							</h2>
							<p>
								<a href="https://indigitous.typeform.com/to/RQGajmbR" class="button" target="_blank"><?php esc_html_e( 'Register Now', 'hack' ); ?></a>
							</p>
						</div>
					</div>
				</div>
			</div>

			<?php get_template_part( 'template-parts/quotes' ); ?>
			<?php get_template_part( 'template-parts/fast-facts' ); ?>
			<?php get_template_part( 'template-parts/celebrate-2020' ); ?>
			<?php get_template_part( 'template-parts/projects' ); ?>

			<div class="section section-partner-ten">
				<div class="wrap">
					<div class="row">
						<div class="column five-sixths offset-1">
							<h2><?php esc_html_e( 'What global mission problems will 1,000 Christians with digital talent tackle?', 'hack' ); ?></h2>
							<p>
								<a href="https://indigitous.typeform.com/to/RQGajmbR" class="button" target="_blank"><?php esc_html_e( 'Partner Application', 'hack' ); ?></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</article>

		<?php
	endwhile;
endif;

get_footer();
