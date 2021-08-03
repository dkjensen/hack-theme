<?php
/**
 * Template Name: About
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
			<div class="section section-about-one blue-background-color padding-bottom-0">
				<div class="wrap">
					<div class="row">
						<div class="column five-sixths offset-1">
							<h1>
								<?php
								/* translators: %s #HACK */
								echo sprintf( esc_html__( 'About %s', 'hack' ), '<span>#HACK</span>' );
								?>
							</h1>
							<p><?php esc_html_e( 'Since 2016, the Indigitous #HACK has served as a rallying point for those who have talents in the digital space.', 'hack' ); ?></p>
							<iframe data-sal="slide-up" width="560" height="315" src="https://www.youtube.com/embed/AeFjeyzEU4Y?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-about-two">
				<div class="wrap">
					<div class="row">
						<div class="column one-third offset-1">
							<blockquote data-sal="slide-right" class="primary-color"><?php esc_html_e( 'A global hackathon to bring the Gospel to where it’s not.', 'hack' ); ?></blockquote>
						</div>
						<div class="column one-half offset-1">
							<h3><?php esc_html_e( 'What is a hackathon?', 'hack' ); ?></h3>
							<p><?php esc_html_e( 'A hackathon is a hands-on event for programmers, developers, engineers, UX designers, project managers, and others to unleash their creativity through technology. For the duration of the event, usually a day or weekend, people with technical backgrounds come together, form teams around a problem, and collaboratively  develop a solution.', 'hack' ); ?></p>

							<p><?php esc_html_e( 'What separates the Indigitous #HACK from other hackathons is that our participants are focused on spreading the Gospel across all the nations. We learn from one another as we address interconnected and related challenges.', 'hack' ); ?></p>
						</div>
					</div>
				</div>
			</div>

			<?php get_template_part( 'template-parts/callouts' ); ?>

			<div class="section section-about-four">
				<div class="wrap">
					<div class="row">
						<div class="column one-fourth">
							<h2 class="white-background-color"><?php esc_html_e( 'About #HACK', 'hack' ); ?></h2>
						</div>
						<div class="column seven-twelfths">
							<p>
								<?php esc_html_e( 'Indigitous co-founder Simon Seow was inspired to start #HACK after taking part in the Hack4Missions event at the 2015 Urbana Student Missions Conference. With the help of Nicholas Skytland and Alicia Llewellyn, founders of various NASA hackathons - including the Space Apps Challenge and the National Day of Civic Hacking - Indigitous launched #HACK in November 2016. Since then, hackers around the world have gathered every year to collaborate on missional projects aimed at solving problems affecting their communities. In 2020, lockdowns caused by the global pandemic resulted in #HACK moving online for our first virtual hackathon.', 'hack' ); ?>
							</p>
							<p>&nbsp;</p>
						</div>
					</div>
					<div class="row">
						<div class="column three-fourths offset-3">
							<div class="timeline">
								<div class="timeline-item">
									<div class="timeline-item--container" data-sal="slide-left">
										<div class="timeline-item--date badge">
											<?php printf( '<span>%s</span>%s', esc_html( '#HACK' ), esc_html( '2016' ) ); ?>
										</div>
										<div class="timeline-item--stats">
											<div class="timeline-item--stats-stat">
												<span>1,426</span>
												<?php esc_html_e( 'Participants', 'hack' ); ?>
											</div>
											<div class="timeline-item--stats-stat">
												<span>28</span>
												<?php esc_html_e( 'Locations', 'hack' ); ?>
											</div>
											<div class="timeline-item--report">
												<a href="https://hack.indigitous.org/wp-content/uploads/2021/07/HACK2016_FinalReport.pdf" target="_blank"><i class="fas fa-download"></i> <?php esc_html_e( 'Download Report', 'hack' ); ?></a>
											</div>
										</div>
										<div class="timeline-item--image">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/about/timeline-item-1-img.png' ) ); ?>" />
										</div>
									</div>
								</div>
								<div class="timeline-item">
									<div class="timeline-item--container" data-sal="slide-left">
										<div class="timeline-item--date badge">
											<?php printf( '<span>%s</span>%s', esc_html( '#HACK' ), esc_html( '2017' ) ); ?>
										</div>
										<div class="timeline-item--stats">
											<div class="timeline-item--stats-stat">
												<span>2,100</span>
												<?php esc_html_e( 'Participants', 'hack' ); ?>
											</div>
											<div class="timeline-item--stats-stat">
												<span>70</span>
												<?php esc_html_e( 'Locations', 'hack' ); ?>
											</div>
											<div class="timeline-item--report">
												<a href="https://hack.indigitous.org/wp-content/uploads/2021/07/HACK2017_FinalReport.pdf" target="_blank"><i class="fas fa-download"></i> <?php esc_html_e( 'Download Report', 'hack' ); ?></a>
											</div>
										</div>
										<div class="timeline-item--image">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/about/timeline-item-2-img.png' ) ); ?>" />
										</div>
									</div>
								</div>
								<div class="timeline-item">
									<div class="timeline-item--container" data-sal="slide-left">
										<div class="timeline-item--date badge">
											<?php printf( '<span>%s</span>%s', esc_html( '#HACK' ), esc_html( '2018' ) ); ?>
										</div>
										<div class="timeline-item--stats">
											<div class="timeline-item--stats-stat">
												<span>600+</span>
												<?php esc_html_e( 'Participants', 'hack' ); ?>
											</div>
											<div class="timeline-item--stats-stat">
												<span>30+</span>
												<?php esc_html_e( 'Locations', 'hack' ); ?>
											</div>
										</div>
										<div class="timeline-item--image">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/about/timeline-item-3-img.png' ) ); ?>" />
										</div>
									</div>
								</div>
								<div class="timeline-item">
									<div class="timeline-item--container" data-sal="slide-left">
										<div class="timeline-item--date badge">
											<?php printf( '<span>%s</span>%s', esc_html( '#HACK' ), esc_html( '2019' ) ); ?>
										</div>
										<div class="timeline-item--stats">
											<div class="timeline-item--stats-stat">
												<span>1,088</span>
												<?php esc_html_e( 'Participants', 'hack' ); ?>
											</div>
											<div class="timeline-item--stats-stat">
												<span>37</span>
												<?php esc_html_e( 'Locations', 'hack' ); ?>
											</div>
											<div class="timeline-item--report">
												<a href="https://hack.indigitous.org/wp-content/uploads/2021/07/HACK2019_FinalReport.pdf" target="_blank"><i class="fas fa-download"></i> <?php esc_html_e( 'Download Report', 'hack' ); ?></a>
											</div>
										</div>
										<div class="timeline-item--image">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/about/timeline-item-4-img.png' ) ); ?>" />
										</div>
									</div>
								</div>
								<div class="timeline-item">
									<div class="timeline-item--container" data-sal="slide-left">
										<div class="timeline-item--date badge badge">
											<?php printf( '<span>%s</span>%s', esc_html( '#HACK' ), esc_html( '2020' ) ); ?>
										</div>
										<div class="timeline-item--stats">
											<div class="timeline-item--stats-stat">
												<span>1,088</span>
												<?php esc_html_e( 'Participants', 'hack' ); ?>
											</div>
											<div class="timeline-item--stats-stat">
												<span>141</span>
												<?php esc_html_e( 'Locations', 'hack' ); ?>
											</div>
											<div class="timeline-item--report">
												<a href="https://hack.indigitous.org/wp-content/uploads/2021/07/HACK2020_FinalReport.pdf" target="_blank"><i class="fas fa-download"></i> <?php esc_html_e( 'Download Report', 'hack' ); ?></a>
											</div>
										</div>
										<div class="timeline-item--image">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/about/timeline-item-5-img.png' ) ); ?>" />
										</div>
									</div>
								</div>
								<div class="timeline-item">
									<div class="timeline-item--container current" data-sal="slide-left">
										<div class="timeline-item--date">
											<?php printf( '<span>%s</span>%s', esc_html( '#HACK' ), esc_html( '2021' ) ); ?>
										</div>
										<div class="timeline-item--stats">
											<p><?php esc_html_e( 'The world’s largest global missional hackathon returns this October.', 'hack' ); ?></p>
											<div class="timeline-item--report">
												<a href="https://indigitous.typeform.com/to/QkVDWhea" class="button margin-right-s" target="_blank"><?php esc_html_e( 'Participate', 'hack' ); ?></a>
												<a href="https://indigitous.typeform.com/to/mojiHQqC" class="button margin-right-s" target="_blank"><?php esc_html_e( 'Lead', 'hack' ); ?></a>
												<a href="https://indigitous.typeform.com/to/RQGajmbR" class="button" target="_blank"><?php esc_html_e( 'Partner', 'hack' ); ?></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-about-five">
				<div class="wrap">
					<div class="row">
						<div class="column one-half">
							<h2><?php esc_html_e( 'The Impact', 'hack' ); ?></h2>
							<p class="intro-text"><?php esc_html_e( '#HACK is more than just an event. Those who take part make a difference, using their skills to advance God’s Kingdom through mission-focused projects and innovation.', 'hack' ); ?></p>
							<p><br><a href="#" class="button"><?php esc_html_e( '#HACK Impact', 'hack' ); ?></a></p>
							<div class="section-about-five-stats">
								<div class="section-about-five-stats--stat">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-participate.svg' ) ); ?>" />
									<div class="section-about-five-stats--stat-content">
										<span><?php echo esc_html( '4,300' ); ?></span>
										<?php esc_html_e( 'Participants', 'hack' ); ?>
									</div>
								</div>
								<div class="section-about-five-stats--stat">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-globe.svg' ) ); ?>" />
									<div class="section-about-five-stats--stat-content">
										<span><?php echo esc_html( '41' ); ?></span>
										<?php esc_html_e( 'Countries', 'hack' ); ?>
									</div>
								</div>
								<div class="section-about-five-stats--stat">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-city.svg' ) ); ?>" />
									<div class="section-about-five-stats--stat-content">
										<span><?php echo esc_html( '210' ); ?></span>
										<?php esc_html_e( 'Cities', 'hack' ); ?>
									</div>
								</div>
								<?php
								/*
								<div class="section-about-five-stats--stat">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-project.svg' ) ); ?>" />
									<div class="section-about-five-stats--stat-content">
										<span><?php echo esc_html( '436' ); ?></span>
										<?php esc_html_e( 'Projects', 'hack' ); ?>
									</div>
								</div>
								*/
								?>
							</div>
						</div>
						<div class="column one-half">
							<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/about/hack-about-section-5.png' ) ); ?>" width="505" />
						</div>
					</div>
				</div>
			</div>
			<div class="section section-about-six blue-background-color">
				<div class="wrap">
					<div class="row">
						<div class="column one-half">
							<h5 class="divider color-primary"><?php esc_html_e( 'The Team', 'hack' ); ?></h5>
							<h2><?php esc_html_e( 'Who makes #HACK possible?', 'hack' ); ?></h2>
							<p><?php esc_html_e( '#HACK couldn’t happen without our dedicated Regional and City Leads who mobilize participants, volunteers, and sponsors in each location.', 'hack' ); ?></p>
						</div>
					</div>
					<div class="team">
						<div class="team-member">
							<div class="team-member-photo">
								<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/russ-martin.png' ) ); ?>" />
							</div>
							<div class="team-member-label">
								<h3><?php echo esc_html( 'Russ' ); ?></h3>
								<h6><?php esc_html_e( 'Co-Founder, Indigitous', 'hack' ); ?></h6>
							</div>
							<div class="team-member-bio">
								<?php esc_html_e( '”What I love about our #HACK events is a global community coming together, from diverse places, contexts and interests, to collaboratively work on one thing, helping bring the gospel deeper and wider where it needs to go.”', 'hack' ); ?>
							</div>
						</div>
						<div class="team-member">
							<div class="team-member-photo">
								<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/simon-seow.jpg' ) ); ?>" />
							</div>
							<div class="team-member-label">
								<h3><?php echo esc_html( 'Simon' ); ?></h3>
								<h6><?php esc_html_e( 'Co-Founder, Indigitous', 'hack' ); ?></h6>
							</div>
							<div class="team-member-bio">
								<?php esc_html_e( '"It’s been such a joy for me over the past 7 years to have watched many eyes ‘light up’ when they discovered how God desires to use their digital skills, talents and experiences to make a difference for Him, and for them to acknowledge that He has uniquely written digital in their stories for such a time as this - to make Him known among the nations!"', 'hack' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-about-seven">
				<div class="wrap">
					<h2><?php esc_html_e( '#HACK Highlights', 'hack' ); ?></h2>
					<p class="intro-text"><?php esc_html_e( 'God has done amazing things through #HACK participants who devoted their weekends to working on missional projects. Here are some of the exciting solutions.', 'hack' ); ?></p>
					<div class="row">
						<div class="column twelve-twelfths">
							<div class="section-about-seven-slider hack-slick" data-slick-id="seven" data-slick='{"dots": false, "fade": true, "arrows": true, "asNavFor": ".section-about-seven-slider-locations"}'>
								<div class="section-about-seven-slider--item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/about/hack-about-section-7-ca.jpg' ) ); ?>)">
									<div class="section-about-seven-slider--item-copy" data-sal="fade">
										<div class="section-about-seven-slider--item-copy-title">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ca.svg' ) ); ?>" width="77" />
											<h2><?php esc_html_e( 'Canada', 'hack' ); ?></h2>
										</div>
										<p><?php esc_html_e( 'In 2016 at the first Indigitous #HACK, a team in Waterloo, Canada created a suicide prevention website. If you had Googled “how to kill yourself” at that time, the top search results were advice on ways to do it. The #HACK team created a website to offer hope and connect people with the help they need and used SEO to make the site one of the top results.', 'hack' ); ?></p>
										<div class="slick-carousel-pagination" data-slick-id="seven" data-label="<?php esc_attr_e( 'Highlight', 'hack' ); ?>"><div></div></div>
									</div>
								</div>
								<div class="section-about-seven-slider--item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/about/hack-about-section-7-th.jpg' ) ); ?>)">
									<div class="section-about-seven-slider--item-copy" data-sal="fade">
										<div class="section-about-seven-slider--item-copy-title">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/th.svg' ) ); ?>" width="77" />
											<h2><?php esc_html_e( 'Thailand', 'hack' ); ?></h2>
										</div>
										<p><?php esc_html_e( 'A team in Chiang Mai, Thailand developed a way for illiterate people to learn how to read the Bible. Bible Karaoke uses a video that highlights each word of the Bible as it is spoken by an audio track. Through repetition, people who use Bible Karaoke will eventually be able to read the Bible on their own.', 'hack' ); ?></p>
										<div class="slick-carousel-pagination" data-slick-id="seven" data-label="<?php esc_attr_e( 'Highlight', 'hack' ); ?>"><div></div></div>
									</div>
								</div>
								<div class="section-about-seven-slider--item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/about/hack-about-section-7-id.jpg' ) ); ?>)">
									<div class="section-about-seven-slider--item-copy" data-sal="fade">
										<div class="section-about-seven-slider--item-copy-title">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/id.svg' ) ); ?>" width="77" />
											<h2><?php esc_html_e( 'Indonesia', 'hack' ); ?></h2>
										</div>
										<p><?php esc_html_e( 'There are over 700 languages in Indonesia, and the Bible is only available in 100 of them. To help increase biblical literacy, a team of hackers in Indonesia developed a program to automate the creation of a customizable study Bible in tribal languages.', 'hack' ); ?></p>
										<div class="slick-carousel-pagination" data-slick-id="seven" data-label="<?php esc_attr_e( 'Highlight', 'hack' ); ?>"><div></div></div>
									</div>
								</div>
								<div class="section-about-seven-slider--item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/about/hack-about-section-7-ph.jpg' ) ); ?>)">
									<div class="section-about-seven-slider--item-copy" data-sal="fade">
										<div class="section-about-seven-slider--item-copy-title">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ph.svg' ) ); ?>" width="77" />
											<h2><?php esc_html_e( 'Philippines', 'hack' ); ?></h2>
										</div>
										<p><?php esc_html_e( 'In Region 6 of Iloilo, Philippines, there are 349 orphans and more than 1,000 churches. Participants at #HACK Iloilo created a platform to connect orphans with adoptive foster parents. “If just one family from each church were to rise up, we can provide a home for each child,” said Pastor Mark about the project.', 'hack' ); ?></p>
										<div class="slick-carousel-pagination" data-slick-id="seven" data-label="<?php esc_attr_e( 'Highlight', 'hack' ); ?>"><div></div></div>
									</div>
								</div>
								<div class="section-about-seven-slider--item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/about/hack-about-section-7-gb.jpg' ) ); ?>)">
									<div class="section-about-seven-slider--item-copy" data-sal="fade">
										<div class="section-about-seven-slider--item-copy-title">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/gb.svg' ) ); ?>" width="77" />
											<h2><?php esc_html_e( 'United Kingdom', 'hack' ); ?></h2>
										</div>
										<p><?php esc_html_e( 'In 2019, hackers in London, UK focused on projects to provide aid to low-income individuals in their communities. Find the Need is a platform that helps church congregations find areas of deprivation around their church and relevant ministries that can help. With Bankuet, hackers helped food banks get the donations they need by building an API-driven food bank stock inventory system.', 'hack' ); ?></p>
										<div class="slick-carousel-pagination" data-slick-id="seven" data-label="<?php esc_attr_e( 'Highlight', 'hack' ); ?>"><div></div></div>
									</div>
								</div>
								<div class="section-about-seven-slider--item" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'assets/img/about/hack-about-section-7-us.jpg' ) ); ?>)">
									<div class="section-about-seven-slider--item-copy" data-sal="fade">
										<div class="section-about-seven-slider--item-copy-title">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/us.svg' ) ); ?>" width="77" />
											<h2><?php esc_html_e( 'United States', 'hack' ); ?></h2>
										</div>
										<p><?php esc_html_e( 'The Rohingya people group have been displaced from their homeland and now live in more than 30 countries. Because their language is small, there are no existing Bible app translations for it. To reach this group, hackers in three U.S. cities (Chicago, Orlando, and Phoenix) created an app that allows them to hear the Gospel in their heart language.', 'hack' ); ?></p>
										<div class="slick-carousel-pagination" data-slick-id="seven" data-label="<?php esc_attr_e( 'Highlight', 'hack' ); ?>"><div></div></div>
									</div>
								</div>
							</div>
							<div class="section-about-seven-slider-locations-container">
								<div class="section-about-seven-slider-locations hack-slick" data-slick='{"asNavFor": ".section-about-seven-slider", "infinite": true, "focusOnSelect": true, "slidesToShow": 6, "variableWidth": true}'>
									<div class="section-about-seven-slider-locations--location">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ca.svg' ) ); ?>" />
										<h3><?php esc_html_e( 'Canada', 'hack' ); ?></h3>
									</div>
									<div class="section-about-seven-slider-locations--location">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/th.svg' ) ); ?>" />
										<h3><?php esc_html_e( 'Thailand', 'hack' ); ?></h3>
									</div>
									<div class="section-about-seven-slider-locations--location">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/id.svg' ) ); ?>" />
										<h3><?php esc_html_e( 'Indonesia', 'hack' ); ?></h3>
									</div>
									<div class="section-about-seven-slider-locations--location">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ph.svg' ) ); ?>" />
										<h3><?php esc_html_e( 'Philippines', 'hack' ); ?></h3>
									</div>
									<div class="section-about-seven-slider-locations--location">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/gb.svg' ) ); ?>" />
										<h3><?php esc_html_e( 'United Kingdom', 'hack' ); ?></h3>
									</div>
									<div class="section-about-seven-slider-locations--location">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/us.svg' ) ); ?>" />
										<h3><?php esc_html_e( 'United States', 'hack' ); ?></h3>
									</div>
								</div>
								<p>
									<strong><a href="<?php echo esc_url( get_post_type_archive_link( 'story' ) ); ?>" class="text-color"><?php esc_html_e( 'Read More Stories from #HACK', 'hack' ); ?></a></strong>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-about-eight">
				<div class="wrap">
					<h1>
						<?php
						/* translators: %s #HACK name tag */
						echo sprintf( esc_html__( 'Join %s', 'hack' ), hack_name_tag() );
						?>
					</h1>
					<h3><?php esc_html_e( 'The world’s largest global missional hackathon returns this October. There are three ways you can be a part of what God is doing through #HACK.', 'hack' ); ?></h3>
				</div>
			</div>
			<div class="section section-about-nine">
				<div class="wrap">
					<div class="section-about-nine-items">
						<div class="section-about-nine-items--item blue-background-color" data-sal="slide-down">
							<p><?php esc_html_e( 'Bring #HACK2021 to your city.', 'hack' ); ?></p>
							<a href="https://indigitous.typeform.com/to/mojiHQqC" target="_blank" class="button"><?php esc_html_e( 'Lead', 'hack' ); ?></a>
						</div>
						<div class="section-about-nine-items--item yellow-background-color" data-sal="slide-down" data-sal-delay="100">
							<p><?php esc_html_e( 'Use your skills to bring the gospel where it is not.', 'hack' ); ?></p>
							<a href="https://indigitous.typeform.com/to/QkVDWhea" target="_blank" class="button"><?php esc_html_e( 'Participate', 'hack' ); ?></a>
						</div>
						<div class="section-about-nine-items--item blue-background-color" data-sal="slide-down" data-sal-delay="200">
							<p><?php esc_html_e( 'We need partners to help make this event a success.', 'hack' ); ?></p>
							<a href="https://indigitous.typeform.com/to/RQGajmbR" target="_blank" class="button"><?php esc_html_e( 'Partner', 'hack' ); ?></a>
						</div>
					</div>
				</div>
			</div>

			<?php get_template_part( 'template-parts/partners' ); ?>

			<div class="section section-about-eleven padding-0">
				<div class="wrap">
					<div class="team">
						<div class="team-member reversed">
							<div class="team-member-photo">
								<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/liam-savage.jpg' ) ); ?>" />
							</div>
							<div class="team-member-label">
								<h3><?php echo esc_html( 'Liam Savage' ); ?></h3>
								<h6><?php esc_html_e( 'Director of Innovation at OneHope', 'hack' ); ?></h6>
							</div>
							<div class="team-member-bio">
								<?php esc_html_e( '“#HACK is an incredible opportunity to sharpen your skills by working on real challenges at the intersection between the global church and technology. I look forward to it every year and love the friends I’ve made each time I go.”', 'hack' ); ?>
							</div>
						</div>
						<div class="team-member reversed">
							<div class="team-member-photo">
								<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/team/ken-cochrum.png' ) ); ?>" />
							</div>
							<div class="team-member-label">
								<h3><?php echo esc_html( 'Ken Cochrum' ); ?></h3>
								<h6><?php esc_html_e( 'Executive Vice President of Field Ministries at East-West', 'hack' ); ?></h6>
							</div>
							<div class="team-member-bio">
								<?php esc_html_e( '“Indigitous #HACK is an opportunity to unleash the huge potential in a generation of technologists to improve our world. The event gives a community of passionate people a chance to use their God-given gifts and experiences to help individuals and organizations serve others better.”', 'hack' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php get_template_part( 'template-parts/testimonials' ); ?>
			<?php get_template_part( 'template-parts/downloads' ); ?>
		</article>

		<?php
	endwhile;
endif;

get_footer();
