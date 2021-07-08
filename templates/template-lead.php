<?php
/**
 * Template Name: Lead
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
			<div class="section section-lead-one">
				<div class="wrap">
					<div class="row">
						<div class="column one-half">
							<h6 class="divider"><?php echo esc_html_x( 'SAVE THE DATE: October 15-17 and 22-24, 2021', 'City lead page', 'hack' ); ?></h6>
							<h1>
								<?php
								/* translators: %s #HACK name tag */
								echo sprintf( esc_html_x( 'Bring %s To Your City', 'City lead page', 'hack' ), hack_name_tag() );
								?>
							</h1>
							<p>
								<?php echo esc_html_x( 'You have an opportunity to make an impact for God in your city.  Indigitous wants to empower you to serve your city and tackle those real problems facing your friends, neighbors, and coworkers.', 'City lead page', 'hack' ); ?>
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
								printf( esc_html_x( 'Interested in leading %s in your city?', 'City lead page', 'hack' ), hack_name_tag() );
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
							<blockquote class="primary-color"><?php printf( esc_html__( 'God has given you what you need to lead %s in your city.', 'hack' ), hack_name_tag() ); ?></blockquote>
						</div>
						<div class="column seven-twelfths offset-1">
							<div class="section-lead-four-callout" data-sal="slide-left">
								<div class="section-lead-four-callout--img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-mature.svg' ) ); ?>" /></div>
								<div class="section-lead-four-callout--copy">
									<h3 class="primary-color"><?php esc_html_e( 'Mature', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'You are strong in your biblical Christian faith.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-lead-four-callout" data-sal="slide-left">
								<div class="section-lead-four-callout--img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-technologist-creative.svg' ) ); ?>" /></div>
								<div class="section-lead-four-callout--copy">
									<h3 class="primary-color"><?php esc_html_e( 'Technologist or Creative', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'You’re a member of the tech or creative industry who understands technical development.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-lead-four-callout" data-sal="slide-left">
								<div class="section-lead-four-callout--img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-leader.svg' ) ); ?>" /></div>
								<div class="section-lead-four-callout--copy">
									<h3 class="primary-color"><?php esc_html_e( 'Leader', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'You understand how to run a hackathon or are willing to learn.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-lead-four-callout" data-sal="slide-left">
								<div class="section-lead-four-callout--img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-organized.svg' ) ); ?>" /></div>
								<div class="section-lead-four-callout--copy">
									<h3 class="primary-color"><?php esc_html_e( 'Organized', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'You’re able to gather a local team to manage logistics, keep a tight schedule, coordinate various elements of a hackathon, and communicate with participants.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-lead-four-callout" data-sal="slide-left">
								<div class="section-lead-four-callout--img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-committed.svg' ) ); ?>" /></div>
								<div class="section-lead-four-callout--copy">
									<h3 class="primary-color"><?php esc_html_e( 'Committed', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'You can commit to 2 monthly calls and regular communication with the Regional Lead until 30 October 2021.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="section-lead-four-callout" data-sal="slide-left">
								<div class="section-lead-four-callout--img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-servant.svg' ) ); ?>" /></div>
								<div class="section-lead-four-callout--copy">
									<h3 class="primary-color"><?php esc_html_e( 'Servant-hearted', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'You value hospitality, encouragement, and prayer.', 'hack' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-lead-five padding-0">
				<div class="section-lead-five-slider hack-slick" data-slick='{"dots": true, "arrows": false}'  style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-slide-1.jpg' ) ); ?>);">
					<div class="section-lead-five-slider--item">
						<div class="wrap">
							<blockquote>
								<?php
								esc_html_e( 'The journey we went on for the weekend was itself a series of miracles. On the event weekend, the Holy Spirit moved among the developers and teams.', 'hack' );
								?>
							</blockquote>
							<h3 class="yellow-color"><?php echo esc_html( '#HACK City Lead' ); ?></h3>
						</div>
					</div>
					<div class="section-lead-five-slider--item">
						<div class="wrap">
							<blockquote>
								<?php
								esc_html_e( 'Seeing so many people passionate about using and sharing their gifts for God’s kingdom brings tears of joy to my eyes.', 'hack' );
								?>
							</blockquote>
							<h3 class="yellow-color"><?php echo esc_html( '#HACK City Lead' ); ?></h3>
						</div>
					</div>
					<div class="section-lead-five-slider--item">
						<div class="wrap">
							<blockquote>
								<?php
								esc_html_e( 'HACK allowed me to see that we can make big things in a small amount of time with the Lord if we are available.', 'hack' );
								?>
							</blockquote>
							<h3 class="yellow-color"><?php echo esc_html( 'Tresor, N’Djamena' ); ?></h3>
						</div>
					</div>
					<div class="section-lead-five-slider--item">
						<div class="wrap">
							<blockquote>
								<?php
								esc_html_e( 'It was awesome to see how total strangers came together and worked together as if they had been a team for years. It was awesome to see the Lord at work through ordinary people using their skills for His glory.', 'hack' );
								?>
							</blockquote>
							<h3 class="yellow-color"><?php echo esc_html( 'Jonah, Pretoria' ); ?></h3>
						</div>
					</div>
					<div class="section-lead-five-slider--item">
						<div class="wrap">
							<blockquote>
								<?php
								esc_html_e( '#HACK is a great way to get the IT community together and do something to help others and missions.', 'hack' );
								?>
							</blockquote>
							<h3 class="yellow-color"><?php echo esc_html( 'Rick, Chiang Mai' ); ?></h3>
						</div>
					</div>
					<div class="section-lead-five-slider--item">
						<div class="wrap">
							<blockquote>
								<?php
								esc_html_e( 'We’re grateful to be present, to be working for God side by side.', 'hack' );
								?>
							</blockquote>
							<h3 class="yellow-color"><?php echo esc_html( 'Iñaki, Buenos Aires' ); ?></h3>
						</div>
					</div>
					<div class="section-lead-five-slider--item">
						<div class="wrap">
							<blockquote>
								<?php
								esc_html_e( 'We got to see a room full of people begin to see their skillset as being part of the church body.', 'hack' );
								?>
							</blockquote>
							<h3 class="yellow-color"><?php echo esc_html( 'James, London' ); ?></h3>
						</div>
					</div>
					<div class="section-lead-five-slider--item">
						<div class="wrap">
							<blockquote>
								<?php
								esc_html_e( 'It was amazing to see mission-minded, servant-hearted volunteers commit so much time, working into the night to see the job done!', 'hack' );
								?>
							</blockquote>
							<h3 class="yellow-color"><?php echo esc_html( 'Winnie, Raleigh' ); ?></h3>
						</div>
					</div>
					<div class="section-lead-five-slider--item">
						<div class="wrap">
							<blockquote>
								<?php
								esc_html_e( 'God showed that He is still the one bringing people together to fulfill the mission.', 'hack' );
								?>
							</blockquote>
							<h3 class="yellow-color"><?php echo esc_html( 'Jonah, Iloilo' ); ?></h3>
						</div>
					</div>
				</div>
			</div>
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
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/russ-martin.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Russ' ); ?></h3>
										<h6><?php echo esc_html_x( 'Co-Founder, Indigitous', 'Team Member Title', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php echo esc_html_x( 'Loves building platforms, learning about the blockchain/crypto space and investing in virtual real estate.', 'Team Member Bio', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/ann-chow.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Ann' ); ?></h3>
										<h6><?php echo esc_html_x( 'Project Lead For #HACK', 'Team Member Title', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php echo esc_html_x( 'Loves gathering followers of Jesus together for partnership, innovation and collaboration.', 'Team Member Bio', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/emmanuel-christian.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Emmanuel' ); ?></h3>
										<h6><?php echo esc_html_x( 'Africa, English & Portuguese', 'Team Member Title', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php echo esc_html_x( 'Passionate about all things faith and technology.', 'Team Member Bio', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/senay-kumelachew.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Senay' ); ?></h3>
										<h6><?php echo esc_html_x( 'Africa, English & Portuguese', 'Team Member Title', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php echo esc_html_x( 'Passionate Digital Ministry.', 'Team Member Bio', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/yomi.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Yomi' ); ?></h3>
										<h6><?php echo esc_html_x( 'Africa, English & Portuguese', 'Team Member Title', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php echo esc_html_x( 'Loves connecting people to Jesus through digital strategies.', 'Team Member Bio', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/charles-kondi.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Charles' ); ?></h3>
										<h6><?php echo esc_html_x( 'Africa, French', 'Team Member Title', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php echo esc_html_x( 'Enjoys being at the intersection of mission, youth, leadership and digital.', 'Team Member Bio', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/sitthavee-teerakulchon.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Sitthavee (Son)' ); ?></h3>
										<h6><?php echo esc_html_x( 'APAC', 'Team Member Title', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php echo esc_html_x( 'A Christian entrepreneur who wants to leverage the power of technology to create a better world.', 'Team Member Bio', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/melissa-rike.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Melissa' ); ?></h3>
										<h6><?php echo esc_html_x( 'Europe', 'Team Member Title', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php echo esc_html_x( 'Passionate about digital missions and helping people be a part of the mission.', 'Team Member Bio', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/melissa-revelles.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Melissa' ); ?></h3>
										<h6><?php echo esc_html_x( 'Latin America', 'Team Member Title', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php echo esc_html_x( 'Loves connecting people to Jesus through digital strategies.', 'Team Member Bio', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/siby-paul.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Siby' ); ?></h3>
										<h6><?php echo esc_html_x( 'South Asia', 'Team Member Title', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php echo esc_html_x( 'Follower of the Nazarene.', 'Team Member Bio', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/andrew-fang.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Andrew' ); ?></h3>
										<h6><?php echo esc_html_x( 'USA', 'Team Member Title', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php echo esc_html_x( 'Loves to imagine new ways to empower people towards the great commission beyond the four church walls.', 'Team Member Bio', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/sammy-fung.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Sammy' ); ?></h3>
										<h6><?php echo esc_html_x( 'APAC', 'Team Member Title', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php echo esc_html_x( 'A tech community builder and a follower of God’s calling on his life. ', 'Team Member Bio', 'hack' ); ?>
									</div>
								</div>
								<div class="team-member">
									<div class="team-member-photo">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/danny-kwan.png' ) ); ?>" />
									</div>
									<div class="team-member-label">
										<h3><?php echo esc_html( 'Danny' ); ?></h3>
										<h6><?php echo esc_html_x( 'APAC', 'Team Member Title', 'hack' ); ?></h6>
									</div>
									<div class="team-member-bio">
										<?php echo esc_html_x( 'Interested in technology and theology.', 'Team Member Bio', 'hack' ); ?>
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
						echo sprintf( esc_html_x( 'Lead %s in your city', 'City lead page', 'hack' ), hack_name_tag() );
						?>
					</h1>
					<p data-sal="slide-down"><a href="https://indigitous.typeform.com/to/mojiHQqC" class="button" target="_blank"><?php esc_html_e( 'Register Now', 'hack' ); ?></a></p>
				</div>
			</div>
			<div class="section section-lead-eight">
				<div class="wrap">
					<div class="row">
						<div class="column one-third align-center">
							<h5 class="divider" data-sal="slide-right"><?php esc_html_e( 'Fast Facts', 'hack' ); ?></h5>
							<h2 class="primary-color" data-sal="slide-right"><?php esc_html_e( 'What is #HACK?', 'hack' ); ?></h2>
							<div class="slick-carousel-pagination" data-sal="slide-right" data-slick-id="eight" data-label="<?php echo esc_attr_x( 'Fact', 'Text Before Slider Pagination', 'hack' ); ?>"><div></div></div>
						</div>
						<div class="column two-thirds">
							<div class="section-lead-eight-slider hack-slick" data-slick-id="eight" data-slick='{"arrows": true, "slidesToShow": 2, "responsive": [{"breakpoint": 768, "settings": {"slidesToShow": 1}}], "variableWidth": true, "draggable": true, "infinite": false, "clickProgress": true}'>
								<div class="section-lead-eight-slider--item">
									<div class="blue-background-color">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-globe.svg' ) ); ?>" />
										<p><?php esc_html_e( 'The hackathon at the 2015 Urbana Student Missions Conference inspired Indigitous co-founder Simon Seow to start our own #HACK.', 'hack' ); ?></p>
									</div>
								</div>
								<div class="section-lead-eight-slider--item">
									<div class="blue-light-background-color">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-rocket-ship.svg' ) ); ?>" />
										<p><?php esc_html_e( '#HACK was launched in 2016 with the help of Nicholas Skytland and Alicia Llewellyn, founders of various NASA hackathons, including the Space Apps Challenge and the National Day of Civic Hacking.', 'hack' ); ?></p>
									</div>
								</div>
								<div class="section-lead-eight-slider--item">
									<div class="blue-background-color">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-calendar.svg' ) ); ?>" />
										<p><?php esc_html_e( 'This is the sixth edition of Indigitous’ global missional hackathon.', 'hack' ); ?></p>
									</div>
								</div>
								<div class="section-lead-eight-slider--item">
									<div class="blue-light-background-color">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-globe.svg' ) ); ?>" />
										<p><?php esc_html_e( 'Join the world’s largest global missional collaboration.', 'hack' ); ?></p>
									</div>
								</div>
								<div class="section-lead-eight-slider--item">
									<div class="blue-background-color">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-city.svg' ) ); ?>" />
										<p><?php esc_html_e( 'Since 2016, 210 cities have hosted a #HACK. Bring the hackathon to your city.', 'hack' ); ?></p>
									</div>
								</div>
								<div class="section-lead-eight-slider--item">
									<div class="blue-light-background-color">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-people.svg' ) ); ?>" />
										<p><?php esc_html_e( 'More than 4,300 hackers have participated in #HACK, sometimes working with people on the other side of the world.', 'hack' ); ?></p>
									</div>
								</div>
								<div class="section-lead-eight-slider--item">
									<div class="blue-background-color">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-code.svg' ) ); ?>" />
										<p><?php esc_html_e( '316 missional projects have been started at #HACK events, all aimed at furthering the Great Commission.', 'hack' ); ?></p>
									</div>
								</div>
								<div class="section-lead-eight-slider--item">
									<div class="blue-light-background-color">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-location.svg' ) ); ?>" />
										<p><?php esc_html_e( '41 #HACK locations have sustained active Indigitous communities after the event.', 'hack' ); ?></p>
									</div>
								</div>
								<div class="section-lead-eight-slider--item">
									<div class="white-color primary-background-color">
										<h2><?php esc_html_e( 'Find Out More', 'hack' ); ?></h2>
										<p><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="button light"><?php esc_html_e( 'About #HACK', 'hack' ); ?></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section padding-0 section-lead-nine">
				<div class="wrap">
					<div class="section gray-300-background-color">
						<h5 class="divider align-center"><?php esc_html_e( 'Celebrate #HACK2020', 'hack' ); ?></h5>
						<h2 class="primary-color"><?php esc_html_e( 'What God Did at #HACK2020', 'hack' ); ?></h2>
						<div class="row">
							<div class="column one-sixth offset-1">
								<div class="section-lead-nine--data-img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-first.svg' ) ); ?>" /></div>
								<h3><?php esc_html_e( '1st Remote Hack', 'hack' ); ?></h3>
							</div>
							<div class="column one-sixth">
								<div class="section-lead-nine--data-img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-participants.svg' ) ); ?>" /></div>
								<h3>1,088 <br><?php esc_html_e( 'Participants', 'hack' ); ?></h3>
							</div>
							<div class="column one-sixth">
								<div class="section-lead-nine--data-img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-network.svg' ) ); ?>" /></div>
								<h3>141 <br><?php esc_html_e( 'Locations', 'hack' ); ?></h3>
							</div>
							<div class="column one-third">
								<div class="section-lead-nine--data-child">
									<div class="section-lead-nine--data-child-img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-flag-eth.svg' ) ); ?>" /></div>
									<div class="section-lead-nine--data-child-info">
										<strong>145</strong> <?php esc_html_e( 'Participants in Ethiopia', 'hack' ); ?>
									</div>
								</div>
								<div class="section-lead-nine--data-child">
									<div class="section-lead-nine--data-child-img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-flag-ind.svg' ) ); ?>" /></div>
									<div class="section-lead-nine--data-child-info">
										<strong>141</strong> <?php esc_html_e( 'Participants in Indonesia', 'hack' ); ?>
									</div>
								</div>
								<div class="section-lead-nine--data-child">
									<div class="section-lead-nine--data-child-img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-flag-en.svg' ) ); ?>" /></div>
									<div class="section-lead-nine--data-child-info">
										<strong>114</strong> <?php esc_html_e( 'Participants in the USA', 'hack' ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-lead-ten">
				<div class="wrap">
					<div class="section-lead-ten-slider hack-slick" data-slick-id="ten" data-slick='{"fade": true}'>
							<div class="section-lead-ten-slider--item">
								<div class="row">
									<div class="column two-thirds">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/SU9XOUaqRg0?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="badge">
											<div class="badge--inside">
												<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-logo.png' ) ); ?>" />
												<?php esc_html_e( 'Top Overall Project', 'hack' ); ?>
												<span><?php echo esc_html( '2020' ); ?></span>
											</div>
										</div>
									</div>
									<div class="column one-third">
										<div class="section-lead-ten-slider--item-content" data-sal="slide-left">
											<div class="section-lead-ten-slider--item-content-title">
												<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-flag-au.svg' ) ); ?>" />
												<h3><?php echo esc_html( 'SwitchOff' ); ?></h3>
											</div>
											<p>
												<strong><?php esc_html_e( '#HACK2020 Project', 'hack' ); ?></strong><br>
												<strong class="primary-color"><?php esc_html_e( 'Top Overall Project', 'hack' ); ?></strong>
											</p>
											<p>
												<?php esc_html_e( 'This plugin helps people take time away from their devices and discover life beyond their screens.', 'hack' ); ?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="section-lead-ten-slider--item">
								<div class="row">
									<div class="column two-thirds">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/95qK2AEpRUI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="badge">
											<div class="badge--inside">
												<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-logo.png' ) ); ?>" />
												<?php esc_html_e( 'Most Kingdom Impact', 'hack' ); ?>
												<span><?php echo esc_html( '2020' ); ?></span>
											</div>
										</div>
									</div>
									<div class="column one-third">
										<div class="section-lead-ten-slider--item-content" data-sal="slide-left">
											<div class="section-lead-ten-slider--item-content-title">
												<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-flag-phi.svg' ) ); ?>" />
												<h3><?php echo esc_html( 'Hanap-Buhay' ); ?></h3>
											</div>
											<p>
												<strong><?php esc_html_e( '#HACK2020 Project', 'hack' ); ?></strong><br>
												<strong class="primary-color"><?php esc_html_e( 'Most Kingdom Impact', 'hack' ); ?></strong>
											</p>
											<p>
												<?php esc_html_e( 'This website helps the unemployed get spiritual and practical help to find work and fight depression.', 'hack' ); ?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="section-lead-ten-slider--item">
								<div class="row">
									<div class="column two-thirds">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/mCEu63_rckg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="badge">
											<div class="badge--inside">
												<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-logo.png' ) ); ?>" />
												<?php esc_html_e( 'Most Innovative', 'hack' ); ?>
												<span><?php echo esc_html( '2020' ); ?></span>
											</div>
										</div>
									</div>
									<div class="column one-third">
										<div class="section-lead-ten-slider--item-content" data-sal="slide-left">
											<div class="section-lead-ten-slider--item-content-title">
												<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-flag-ind.svg' ) ); ?>" />
												<h3><?php echo esc_html( 'Simple Suku Study Bible Maker' ); ?></h3>
											</div>
											<p>
												<strong><?php esc_html_e( '#HACK2020 Project', 'hack' ); ?></strong><br>
												<strong class="primary-color"><?php esc_html_e( 'Most Innovative', 'hack' ); ?></strong>
											</p>
											<p>
												<?php esc_html_e( 'The program automates the creation of a customizable study Bible in Indonesia’s 700 languages.', 'hack' ); ?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="section-lead-ten-slider--item">
								<div class="row">
									<div class="column two-thirds">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/mwcKE29IP_k?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="badge">
											<div class="badge--inside">
												<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-logo.png' ) ); ?>" />
												<?php esc_html_e( 'Most Viable', 'hack' ); ?>
												<span><?php echo esc_html( '2020' ); ?></span>
											</div>
										</div>
									</div>
									<div class="column one-third">
										<div class="section-lead-ten-slider--item-content" data-sal="slide-left">
											<div class="section-lead-ten-slider--item-content-title">
												<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-flag-en.svg' ) ); ?>" />
												<h3><?php echo esc_html( 'Ro Bible Study Story App' ); ?></h3>
											</div>
											<p>
												<strong><?php esc_html_e( '#HACK2020 Project', 'hack' ); ?></strong><br>
												<strong class="primary-color"><?php esc_html_e( 'Most Viable', 'hack' ); ?></strong>
											</p>
											<p>
												<?php esc_html_e( 'This app allows a displaced people group to hear the Gospel in their heart language, for which there are no printed Bible translations.', 'hack' ); ?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="section-lead-ten-slider--item">
								<div class="row">
									<div class="column two-thirds">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/b_kSh2f_BWI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="badge">
											<div class="badge--inside">
												<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-logo.png' ) ); ?>" />
												<?php esc_html_e( 'People’s Choice', 'hack' ); ?>
												<span><?php echo esc_html( '2020' ); ?></span>
											</div>
										</div>
									</div>
									<div class="column one-third">
										<div class="section-lead-ten-slider--item-content" data-sal="slide-left">
											<div class="section-lead-ten-slider--item-content-title">
												<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-flag-eth.svg' ) ); ?>" />
												<h3><?php echo esc_html( 'Gemenaye Vent Chatbot' ); ?></h3>
											</div>
											<p>
												<strong><?php esc_html_e( '#HACK2020 Project', 'hack' ); ?></strong><br>
												<strong class="primary-color"><?php esc_html_e( 'People’s Choice', 'hack' ); ?></strong>
											</p>
											<p>
												<?php esc_html_e( 'This Telegram chatbot allows people to share anonymously, connect with mentors, and build relationships as they grow in their faith.', 'hack' ); ?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					<div class="slick-carousel-pagination" data-slick-id="ten" data-label="<?php echo esc_attr_x( 'Project', 'Text Before Slider Pagination', 'hack' ); ?>"><div></div></div>
				</div>
			</div>
			<?php
			/*
			<div class="section padding-0 section-lead-eleven">
				<div class="wrap">
					<div class="section-lead-eleven-slider hack-slick" data-slick-id="eleven" data-slick='{"dots": false, "arrows": true, "asNavFor": ".section-lead-eleven-slider-captions"}'>
						<div class="section-lead-eleven-slider--item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-section-11-1.jpg' ) ); ?>)"></div>
						<div class="section-lead-eleven-slider--item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/hack-lead-section-11-1.jpg' ) ); ?>)"></div>
					</div>
					<div class="section-lead-eleven-slider-captions-container">
						<div class="row">
							<div class="column one-half">
								<div class="section-lead-eleven-slider-captions hack-slick" data-slick='{"asNavFor": ".section-lead-eleven-slider", "fade": true}'>
									<div class="caption"><?php echo esc_html_x( '#HACK2020 in Ivory Coast', 'Lead Page Slider Caption', 'hack' ); ?></div>
									<div class="caption"><?php echo esc_html_x( '#HACK2020 in Ivory Coast 2', 'Lead Page Slider Caption', 'hack' ); ?></div>
								</div>
							</div>
							<div class="column one-half">
								<div class="slick-carousel-pagination" data-slick-id="eleven" data-label="<?php echo esc_attr_x( 'Image', 'Text Before Slider Pagination', 'hack' ); ?>"><div></div></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			*/
			?>
			<?php get_template_part( 'template-parts/testimonials' ); ?>
		</article>

		<?php
	endwhile;
endif;

get_footer();
