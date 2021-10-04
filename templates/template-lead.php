<?php
/**
 * Template Name: Lead
 *
 * @package Dkjensen\Hack
 */

use function Dkjensen\Hack\Functions\hack_name_tag;
use function Dkjensen\Hack\Functions\get_location_region_link;

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="section section-lead-one">
				<div class="wrap">
					<div class="row">
						<div class="column one-half">
							<h6 class="divider"><?php esc_html_e( 'SAVE THE DATE: October 15-17 and 22-24, 2021', 'hack' ); ?></h6>
							<h1>
								<?php
								/* translators: %s #HACK name tag */
								echo sprintf( esc_html__( 'Bring %s To Your City', 'hack' ), hack_name_tag() );
								?>
							</h1>
							<p>
								<?php esc_html_e( 'You have an opportunity to make an impact for God in your city.  Indigitous wants to empower you to serve your city and tackle those real problems facing your friends, neighbors, and coworkers.', 'hack' ); ?>
							</p>
							<p>
								<a href="https://indigitous.typeform.com/to/mojiHQqC" class="button" target="_blank"><?php esc_html_e( 'Register Now', 'hack' ); ?></a>
							</p>
						</div>
						<div class="column one-half">
							<div class="section-lead-one-graphic--container">
								<img class="section-lead-one-graphic" data-sal="slide-left" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-hero-1.png' ) ); ?>" />
								<img class="section-lead-one-graphic" data-sal="slide-down" data-sal-delay="100" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-hero-2.png' ) ); ?>" />
								<img class="section-lead-one-graphic" data-sal="slide-right" data-sal-delay="200" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-hero-3.png' ) ); ?>" />
								<img class="section-lead-one-graphic" data-sal="slide-up" data-sal-delay="300" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-hero-4.png' ) ); ?>" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-lead-two gray-300-background-color">
				<div class="wrap">
					<div class="section-lead-two-works-grid">
						<div class="section-lead-two-works-grid--item">
							<h5 class="divider"><?php esc_html_e( 'Application', 'hack' ); ?></h5>
							<h2 class="yellow-color"><?php esc_html_e( 'How It Works', 'hack' ); ?></h2>
						</div>
						<div class="section-lead-two-works-grid--item yellow-background-color">
								<span class="numbered-outline">1</span>
								<h3><?php esc_html_e( 'Sign Up', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'Complete the signup form and the closest regional lead will reach out to you.', 'hack' ); ?></p>
						</div>
						<div class="section-lead-two-works-grid--item white-background-color">
								<span class="numbered-outline">2</span>
								<h3><?php esc_html_e( 'Interview', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'Your regional lead will approve your application and interview you to hear about your passion, answer questions, and help you think through your event.', 'hack' ); ?></p>
						</div>
						<div class="section-lead-two-works-grid--item white-background-color">
								<span class="numbered-outline">3</span>
								<h3><?php esc_html_e( 'Coordinate', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'Join other city leads in #HACK2021 planning calls to discuss best practices and learn from those who have led the event in the past.', 'hack' ); ?></p>
						</div>
						<div class="section-lead-two-works-grid--item white-background-color">
								<span class="numbered-outline">4</span>
								<h3><?php esc_html_e( 'Communicate', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'You will have regular communication with your regional lead and with other city leads to support you through the process.', 'hack' ); ?></p>
						</div>
						<div class="section-lead-two-works-grid--item white-background-color">
								<span class="numbered-outline">5</span>
								<h3><?php esc_html_e( 'Assemble', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'Form a design team and plan your own customized #HACK2021 event.', 'hack' ); ?></p>
						</div>
						<div class="section-lead-two-works-grid--item blue-background-color">
								<span class="numbered-outline">6</span>
								<h3><?php echo hack_name_tag(); ?></h3>
								<p><?php esc_html_e( 'Convene hackers in your city during one weekend in October to collaborate on missional projects.', 'hack' ); ?></p>
						</div>
						<div class="section-lead-two-works-grid--item white-background-color">
								<span class="numbered-outline">7</span>
								<h3><?php esc_html_e( 'Community', 'hack' ); ?></h3>
								<p><?php esc_html_e( 'Invite attendees to continue engagement with the local Indigitous community.', 'hack' ); ?></p>
						</div>
					</div>
					<div class="row">
						<div class="column one-half" data-sal="slide-right">
							<h2>
								<?php
								/* translators: %s #HACK name tag */
								printf( esc_html__( 'Interested in leading %s in your city?', 'hack' ), hack_name_tag() );
								?>
							</h2>
							<p>
								<a href="https://indigitous.typeform.com/to/mojiHQqC" class="button" target="_blank"><?php esc_html_e( 'Register Now', 'hack' ); ?></a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-lead-three"></div>
			<div class="section section-lead-four">
				<div class="wrap">
					<div class="row">
						<div class="column one-third">
							<div class="section-lead-four-sidebar blue-background-color">
								<h5 class="divider color-primary"><?php esc_html_e( 'Qualifications', 'hack' ); ?></h5>
								<h2><?php esc_html_e( 'A Leader Like You', 'hack' ); ?></h2>
								<p>
									<?php
									/* translators: %s #HACK name tag */
									printf( esc_html__( 'Indigitous needs leaders like you to bring %s to your city. With #HACK, you can convene technologists, creatives, and mission workers to collaborate on projects that will help make Jesus known in your neighborhoods and meet the needs specific to your community.', 'hack' ), hack_name_tag() );
									?>
								</p>
							</div>
							<?php /* translators: %s #HACK name tag */ ?>
							<blockquote class="has-quotes text-center primary-color"><?php printf( esc_html__( 'God has given you what you need to lead %s in your city.', 'hack' ), hack_name_tag() ); ?></blockquote>
						</div>
						<div class="column seven-twelfths offset-1">
							<div class="section-lead-four-callout" data-sal="slide-left">
								<div class="section-lead-four-callout--img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-bible.svg' ) ); ?>" width="67" /></div>
								<div class="section-lead-four-callout--copy">
									<h3 class="primary-color"><?php esc_html_e( 'Mature', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'You are strong in your biblical Christian faith.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-lead-four-callout" data-sal="slide-left">
								<div class="section-lead-four-callout--img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-creative.svg' ) ); ?>" width="54" /></div>
								<div class="section-lead-four-callout--copy">
									<h3 class="primary-color"><?php esc_html_e( 'Technologist or Creative', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'You’re a member of the tech or creative industry who understands technical development.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-lead-four-callout" data-sal="slide-left">
								<div class="section-lead-four-callout--img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-lead.svg' ) ); ?>" width="67" /></div>
								<div class="section-lead-four-callout--copy">
									<h3 class="primary-color"><?php esc_html_e( 'Leader', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'You understand how to run a hackathon or are willing to learn.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-lead-four-callout" data-sal="slide-left">
								<div class="section-lead-four-callout--img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-coordinate.svg' ) ); ?>" width="67" /></div>
								<div class="section-lead-four-callout--copy">
									<h3 class="primary-color"><?php esc_html_e( 'Organized', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'You’re able to gather a local team to manage logistics, keep a tight schedule, coordinate various elements of a hackathon, and communicate with participants.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-lead-four-callout" data-sal="slide-left">
								<div class="section-lead-four-callout--img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-project.svg' ) ); ?>" width="67" /></div>
								<div class="section-lead-four-callout--copy">
									<h3 class="primary-color"><?php esc_html_e( 'Committed', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'You can commit to 2 monthly calls and regular communication with the Regional Lead until 30 October 2021.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-lead-four-callout" data-sal="slide-left">
								<div class="section-lead-four-callout--img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-heart-hands.svg' ) ); ?>" width="67" /></div>
								<div class="section-lead-four-callout--copy">
									<h3 class="primary-color"><?php esc_html_e( 'Servant-hearted', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'You value hospitality, encouragement, and prayer.', 'hack' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php get_template_part( 'template-parts/quotes' ); ?>

			<div class="section section-lead-six">
				<div class="wrap">
					<div class="row">
						<div class="column one-third">
							<div class="section-lead-six-sidebar gray-300-background-color full-width-mobile">
								<h5 class="divider" data-sal="slide-right"><?php esc_html_e( 'Your Team', 'hack' ); ?></h5>
								<h2 class="primary-color" data-sal="slide-right"><?php esc_html_e( 'Introducing Our Regional Leads', 'hack' ); ?></h2>
								<p data-sal="slide-right">
									<?php esc_html_e( 'This team will support you throughout the process of organizing #HACK in your city.', 'hack' ); ?>
								</p>
							</div>
						</div>
						<div class="column seven-twelfths offset-1">
							<div class="team">
								<div class="team-member">
									<div class="team-member-photo">
										<a href="<?php echo esc_url( get_location_region_link( 'north-america' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/russ-martin.png' ) ); ?>" /></a>
									</div>
									<div class="team-member-label">
										<h3><a href="<?php echo esc_url( get_location_region_link( 'north-america' ) ); ?>"><?php echo esc_html( 'Russ' ); ?></a></h3>
										<h6><?php esc_html_e( 'Co-Founder, Indigitous', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php esc_html_e( 'Loves building platforms, learning about the blockchain/crypto space and investing in virtual real estate.', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/ann-chow.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Ann' ); ?></h3>
										<h6><?php esc_html_e( 'Project Lead For #HACK', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php esc_html_e( 'Loves gathering followers of Jesus together for partnership, innovation and collaboration.', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<a href="<?php echo esc_url( get_location_region_link( 'africa' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/emmanuel-christian.png' ) ); ?>" /></a>
									</div>
									<div class="team-member-label">
										<h3><a href="<?php echo esc_url( get_location_region_link( 'africa' ) ); ?>"><?php echo esc_html( 'Emmanuel' ); ?></a></h3>
										<h6><?php esc_html_e( 'Africa, English & Portuguese', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php esc_html_e( 'Passionate about all things faith and technology.', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<a href="<?php echo esc_url( get_location_region_link( 'africa' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/senay-kumelachew.png' ) ); ?>" /></a>
									</div>
									<div class="team-member-label">
										<h3><a href="<?php echo esc_url( get_location_region_link( 'africa' ) ); ?>"><?php echo esc_html( 'Senay' ); ?></a></h3>
										<h6><?php esc_html_e( 'Africa, English & Portuguese', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php esc_html_e( 'Passionate Digital Ministry.', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<a href="<?php echo esc_url( get_location_region_link( 'africa' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/yomi.png' ) ); ?>" /></a>
									</div>
									<div class="team-member-label">
										<h3><a href="<?php echo esc_url( get_location_region_link( 'africa' ) ); ?>"><?php echo esc_html( 'Yomi' ); ?></a></h3>
										<h6><?php esc_html_e( 'Africa, English & Portuguese', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php esc_html_e( 'Loves connecting people to Jesus through digital strategies.', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<a href="<?php echo esc_url( get_location_region_link( 'africa' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/charles-kondi.png' ) ); ?>" /></a>
									</div>
									<div class="team-member-label">
										<h3><a href="<?php echo esc_url( get_location_region_link( 'africa' ) ); ?>"><?php echo esc_html( 'Charles' ); ?></a></h3>
										<h6><?php esc_html_e( 'Africa, French', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php esc_html_e( 'Enjoys being at the intersection of mission, youth, leadership and digital.', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<a href="<?php echo esc_url( get_location_region_link( 'apac' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/sitthavee-teerakulchon.png' ) ); ?>" /></a>
									</div>
									<div class="team-member-label">
										<h3><a href="<?php echo esc_url( get_location_region_link( 'apac' ) ); ?>"><?php echo esc_html( 'Sitthavee (Son)' ); ?></a></h3>
										<h6><?php esc_html_e( 'APAC', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php esc_html_e( 'A Christian entrepreneur who wants to leverage the power of technology to create a better world.', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<a href="<?php echo esc_url( get_location_region_link( 'europe' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/melissa-rike.png' ) ); ?>" /></a>
									</div>
									<div class="team-member-label">
										<h3><a href="<?php echo esc_url( get_location_region_link( 'europe' ) ); ?>"><?php echo esc_html( 'Melissa' ); ?></a></h3>
										<h6><?php esc_html_e( 'Europe', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php esc_html_e( 'Passionate about digital missions and helping people be a part of the mission.', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<a href="<?php echo esc_url( get_location_region_link( 'latin-america' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/melissa-revelles.png' ) ); ?>" /></a>
									</div>
									<div class="team-member-label">
										<h3><a href="<?php echo esc_url( get_location_region_link( 'latin-america' ) ); ?>"><?php echo esc_html( 'Melissa' ); ?></a></h3>
										<h6><?php esc_html_e( 'Latin America', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php esc_html_e( 'Loves connecting people to Jesus through digital strategies.', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<a href="<?php echo esc_url( get_location_region_link( 'apac' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/siby-paul.png' ) ); ?>" /></a>
									</div>
									<div class="team-member-label">
										<h3><a href="<?php echo esc_url( get_location_region_link( 'apac' ) ); ?>"><?php echo esc_html( 'Siby' ); ?></a></h3>
										<h6><?php esc_html_e( 'South Asia', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php esc_html_e( 'Follower of the Nazarene.', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<a href="<?php echo esc_url( get_location_region_link( 'north-america' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/yan.png' ) ); ?>" /></a>
									</div>
									<div class="team-member-label">
										<h3><a href="<?php echo esc_url( get_location_region_link( 'north-america' ) ); ?>"><?php echo esc_html( 'Yan' ); ?></a></h3>
										<h6><?php esc_html_e( 'North America', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php esc_html_e( 'An interdisciplinary designer with 10+ years of experience in product design & strategy, project management, and workshop design and facilitation.', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<a href="<?php echo esc_url( get_location_region_link( 'north-america' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/andrew-fang.png' ) ); ?>" /></a>
									</div>
									<div class="team-member-label">
										<h3><a href="<?php echo esc_url( get_location_region_link( 'north-america' ) ); ?>"><?php echo esc_html( 'Andrew' ); ?></a></h3>
										<h6><?php esc_html_e( 'North America', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php esc_html_e( 'Loves to imagine new ways to empower people towards the great commission beyond the four church walls.', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<a href="<?php echo esc_url( get_location_region_link( 'apac' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/sammy-fung.png' ) ); ?>" /></a>
									</div>
									<div class="team-member-label">
										<h3><a href="<?php echo esc_url( get_location_region_link( 'apac' ) ); ?>"><?php echo esc_html( 'Sammy' ); ?></a></h3>
										<h6><?php esc_html_e( 'APAC', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php esc_html_e( 'A tech community builder and a follower of God’s calling on his life. ', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<a href="<?php echo esc_url( get_location_region_link( 'apac' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/danny-kwan.png' ) ); ?>" /></a>
									</div>
									<div class="team-member-label">
										<h3><a href="<?php echo esc_url( get_location_region_link( 'apac' ) ); ?>"><?php echo esc_html( 'Danny' ); ?></a></h3>
										<h6><?php esc_html_e( 'APAC', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php esc_html_e( 'Interested in technology and theology.', 'hack' ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-lead-seven">
				<div class="wrap">
					<h1 class="white-color" data-sal="slide-down">
						<?php
						/* translators: %s #HACK name tag */
						echo sprintf( esc_html__( 'Lead %s in your city', 'hack' ), hack_name_tag() );
						?>
					</h1>
					<p data-sal="slide-down"><a href="https://indigitous.typeform.com/to/mojiHQqC" class="button" target="_blank"><?php esc_html_e( 'Register Now', 'hack' ); ?></a></p>
				</div>
			</div>
			<?php get_template_part( 'template-parts/fast-facts' ); ?>
			<?php get_template_part( 'template-parts/celebrate-2020' ); ?>
			<?php get_template_part( 'template-parts/projects' ); ?>
			<?php get_template_part( 'template-parts/testimonials' ); ?>
		</article>

		<?php
	endwhile;
endif;

get_footer();
