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
							<p class="intro-text"><?php esc_html_e( 'Working together to sharpen our efforts and increase the impact of #HACK2021.', 'hack' ); ?></p>
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
									<h3><?php esc_html_e( '#1 Challenge Accepted', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Work with your team during the #HACK weekend to craft a solution or project.', 'hack' ); ?></p>
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
									<h3><?php esc_html_e( '#2 Submit', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Submit the project or solution to be reviewed by your local mentors. This submission will include a project summary and a 3 minute video.', 'hack' ); ?></p>
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
									<h3><?php esc_html_e( '#3 City Review', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'The top project per city that receives the highest marks in all 5 categories will advance to the regional judging process.', 'hack' ); ?></p>
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
									<h3><?php esc_html_e( '#4 Regional Review', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Your video and project summary will be reviewed on the regional level.', 'hack' ); ?></p>
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
									<h3><?php esc_html_e( '#5 Global Review', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Top projects from the regional review will be submitted to our global judges.', 'hack' ); ?></p>
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
									<h3><?php esc_html_e( '#6 Celebration', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Global winners will be announced at our Celebration.', 'hack' ); ?></p>
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
							<blockquote class="primary-color margin-top-0"><?php esc_html_e( 'The #HACK2021 Global Judging Process is a core part of our mass collaboration because our desired outcome is impact.', 'hack' ); ?></blockquote>
						</div>
						<div class="column five-twelfths offset-1">
							<p><span class="bold"><?php esc_html_e( 'Judging', 'hack' ); ?></span><?php esc_html_e( ' is a core part of a mass collaboration because our desired outcome is impact. Judging is not meant in this context to encourage competition, but instead to sharpen the efforts of all participants and increase the impact of their work. The desired outcome is better work and a better story to tell about our collaborative work.', 'hack' ); ?></p>
							<p><span class="bold"><?php esc_html_e( 'Recognition', 'hack' ); ?></span><?php esc_html_e( ' is a focus because it reminds us of the unique contribution we all make to the larger body - each is valuable!', 'hack' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-judges-four gray-300-background-color">
				<div class="wrap">
					<div class="row">
						<div class="column five-sixths offset-1">
							<h2><?php esc_html_e( 'Categories', 'hack' ); ?></h2>
							<p class="intro-text"><?php esc_html_e( ' Your location will vote for the projects based on the following categories. Here are some criteria that may be used to evaluate the solution or project you submitted.', 'hack' ); ?></p>
							<div class="row">
								<div class="one-third">
									<p><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/medallion/medallion_kingdomimpact.png' ) ); ?>" height="120" /></p>
									<h3 class="primary-color"><?php esc_html_e( 'Kingdom Impact', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Does this solution have a kingdom impact? Does it advance God’s purposes as communicated in the Bible?', 'hack' ); ?></p>
								</div>
								<div class="one-third">
									<p><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/medallion/medallion_innovation.png' ) ); ?>" height="120" /></p>
									<h3 class="primary-color"><?php esc_html_e( 'Innovation', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Is this an original or unique approach? Has the team done something different in how they have addressed the challenge? ', 'hack' ); ?></p>
								</div>
								<div class="one-third">
									<p><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/medallion/medallion_viability.png' ) ); ?>" height="120" /></p>
									<h3 class="primary-color"><?php esc_html_e( 'Viability', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'How viable is this in the real world? Is this solution implementable? How hard would it be to scale?', 'hack' ); ?></p>
								</div>
								<div class="one-third">
									<p><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/medallion/medallion_completeness.png' ) ); ?>" height="120" /></p>
									<h3 class="primary-color"><?php esc_html_e( 'Completeness', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Is the project still conceptual, or has it been more fully developed? Is there a working prototype?', 'hack' ); ?></p>
								</div>
								<div class="one-third">
									<p><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/medallion/medallion_peopleschoice.png' ) ); ?>" height="120" /></p>
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
									<div class="">
										<div class="">
											<h2><?php esc_html_e( '#1 Challenge Accepted ', 'hack' ); ?></h2>
											<p class="intro-text"><?php esc_html_e( 'Work with your team during the #HACK weekend to craft a solution or project.', 'hack' ); ?></p>
										</div>
										<div class="">
											<p class="color-white"><?php esc_html_e( 'Work with your team during the #HACK weekend to craft a solution or project.' ); ?></p>
											<p class="color-white"><?php esc_html_e( 'Check out the global challenges from:' ); ?></p>
											<ul class="basic-list">
												<li><a href="https://hack.indigitous.org/en/challenge/world-vision/">World Vision</a></li>
												<li><a href="https://hack.indigitous.org/en/challenge/american-bible-society/">American Bible Society</a></li>
												<li><a href="https://hack.indigitous.org/en/challenge/coalition-of-the-willing/">Coalition of the Willing</a></li>
											</ul>
											<p class="color-white"><?php esc_html_e( 'Bring your own or ask the organizers at your location to help you settle on a challenge for #HACK2021.' ); ?></p>
										</div>
									</div>
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
									<h2><?php esc_html_e( '#2 Submit', 'hack' ); ?></h2>
									<p class="intro-text"><?php esc_html_e( 'Submit the project or solution to be reviewed by your local mentor', 'hack' ); ?></p>
									<p class="intro-text"><?php esc_html_e( 'You will be asked to submit a project summary form that includes:', 'hack' ); ?></p>
									<ul class="basic-list mb-20">
										<li><?php esc_html_e( 'Names of your team members' ); ?></li>
										<li><?php esc_html_e( 'Overall challenge' ); ?></li>
										<li><?php esc_html_e( 'Project summary' ); ?></li>
										<li><?php esc_html_e( 'Any additional project data' ); ?></li>
										<li><?php esc_html_e( 'Project impact' ); ?></li>
										<li><?php esc_html_e( 'Demonstration' ); ?></li>
										<li><?php esc_html_e( 'Future Steps' ); ?></li>
										<li><?php esc_html_e( '3-minute video' ); ?></li>
									</ul>
									<div class="bg-color-white">
											<div class="accordion border-none video-tips">
												<div class="accordion-header">
												<?php esc_html_e( '3-Minute Video Tips' ); ?>
												</div>
												<div class="accordion-content">

												<div class="video-tip">
													<div class="vt-header">
														<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/orange-check-box.svg' ) ); ?>" alt=""><span><?php esc_html_e( 'Overview' ); ?></span>
													</div>
													<div class="vt-content">
														<p><?php esc_html_e( 'A brief overview of what you are trying to solve.' ); ?></p>
													</div>
												</div>

												<div class="video-tip">
													<div class="vt-header">
														<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/orange-check-box.svg' ) ); ?>" alt=""><span><?php esc_html_e( 'Demonstration' ); ?></span>
													</div>
													<div class="vt-content">
														<p><?php esc_html_e( 'The demonstration of what you did and what it can do (this is most important, otherwise judges will assume you did not create anything).' ); ?></p>
													</div>
												</div>

												<div class="video-tip">
													<div class="vt-header">
														<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/orange-check-box.svg' ) ); ?>" alt=""><span><?php esc_html_e( 'Impact' ); ?></span>
													</div>
													<div class="vt-content">
														<p><?php esc_html_e( 'The solution’s impact: why does it matter?' ); ?></p>
													</div>
												</div>

												<div class="video-tip">
													<div class="vt-header">
														<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/orange-check-box.svg' ) ); ?>" alt=""><span><?php esc_html_e( 'Vision' ); ?></span>
													</div>
													<div class="vt-content">
														<p><?php esc_html_e( 'Your project’s recommended next steps (shows your vision to move this forward)' ); ?></p>
													</div>
												</div>

												</div>
											</div>
										</div>
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
										<span></span>
										<span></span>
										<span></span>
									</span>
									<h2><?php esc_html_e( '#3 City Review', 'hack' ); ?></h2>
									<p class="intro-text"><?php esc_html_e( 'The top project per city that receives the highest marks in all 5 categories will advance to the regional judging process. These categories include:', 'hack' ); ?></p>
									<ol class="basic-list">
										<li><?php esc_html_e( 'Kingdom Impact' ); ?></li>
										<li><?php esc_html_e( 'Inovation' ); ?></li>
										<li><?php esc_html_e( 'Viability' ); ?></li>
										<li><?php esc_html_e( 'Completeness' ); ?></li>
										<li><?php esc_html_e( 'People’s Choice' ); ?></li>
									</ol>
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
										<span></span>
										<span></span>
									</span>
									<h2><?php esc_html_e( '#4 Regional Review', 'hack' ); ?></h2>
									<p class="intro-text"><?php esc_html_e( 'Your video and project summary will be reviewed on the regional level.', 'hack' ); ?></p>
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
										<span></span>
									</span>
									<h2><?php esc_html_e( '#5 Global Review', 'hack' ); ?></h2>
									<p class="intro-text"><?php esc_html_e( 'Top projects from the regional review will be submitted to our global judges.', 'hack' ); ?></p>
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
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
									</span>
									<h2><?php esc_html_e( '#6 Celebration', 'hack' ); ?></h2>
									<p class="intro-text">
										<?php esc_html_e( 'Global celebrated at our', 'hack' ); ?>
										<a href="https://hack.indigitous.org/en/meetup/global-celebration-1/" >Global Celebration</a>
										<?php esc_html_e( ' on November 5th, 2021. See you all there.', 'hack' ); ?>
								</p>
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
								<div class="accordion judges">
									<div class="accordion-header">
									<div class="text-center">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-christeen-rico.jpg' ) ); ?>" width="152" />
									<h4><?php echo esc_html( 'Christeen Rico' ); ?></h4>
									<h6 class="tan-color"><?php esc_html_e( 'USA/Philippines', 'hack' ); ?></h6>
									<p class="text-left"><?php esc_html_e( 'Christeen serves on the Advisory Board of Faith and Work Movement Global, the Office of Innovation at Biola University, the Lausanne Movement Global Workplace Ministry, and is the founder of the Dream Bigger Manila entrepreneurship program for Filipino youth.' ); ?></p>
											<p class="toggle-readmore-wrapper">
												<span class="toggle-readmore"></span>
											</p>
								</div>
									</div>
									<div class="accordion-content">
									<p><?php esc_html_e( 'Christeen is a daughter of the Most High King, a committed follower of Jesus intent on pursuing a vision found in Proverbs 11:10 (NIV). Belief in the unique role business can play to help set right things that are broken and bring flourishing in our communities fuels her life’s mission. Christeen has 8+ years in the tech industry with expertise launching online and offline customer experiences in new markets. Christeen serves on the Advisory Board of Faith and Work Movement Global, the Office of Innovation at Biola University, the Lausanne Movement Global Workplace Ministry, and is the founder of the Dream Bigger Manila entrepreneurship program for Filipino youth.', 'hack' ); ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-third">
							<div class="section-judges-six-content">
								<div class="accordion judges">
									<div class="accordion-header">
										<div class="text-center">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-jonhart.jpg' ) ); ?>" width="152" />
											<h4><?php echo esc_html( 'Jon Hart' ); ?></h4>
											<h6 class="tan-color"><?php esc_html_e( 'USA', 'hack' ); ?></h6>
											<p class="text-left"><?php esc_html_e( 'Jon loves working with builders and entrepreneurs to connect their heart & purpose. In his role at Praxis, he works on strategic partnerships, ecosystems, and programs to bring vocational training on redemptive action to more people.' ); ?></p>
											<p class="toggle-readmore-wrapper">
												<span class="toggle-readmore"></span>
											</p>
										</div>
									</div>
									<div class="accordion-content">
									<p><?php esc_html_e( 'Jon loves working with builders and entrepreneurs to connect their heart & purpose. In his role at Praxis, he works on strategic partnerships, ecosystems, and programs to bring vocational training on redemptive action to more people. Previously, he spent seven years at a Fortune 100 Company, where he helped launch a new venture and revive another as part of a turnaround strategy. Jon was also an Executive Producer of a successful independent film. In addition to his work at Praxis, Jon is a founding board member of 100cameras, a nonprofit that empowers youth to create change in their communities through photography. He has also served as an advisor and mentor for the Quarter Zero and Catapult Incubators, and taught entrepreneurship as an adjunct at The King’s College NYC. He holds a BS from the Carlson School of Management at the University of Minnesota and lives in New York City.', 'hack' ); ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-third">
							<div class="section-judges-six-content">
									<div class="accordion judges">
									<div class="accordion-header">
										<div class="text-center">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-shikou-gitau.png' ) ); ?>" width="152" />
											<h4><?php echo esc_html( 'Dr. Shikoh Gitau' ); ?></h4>
											<h6 class="tan-color"><?php esc_html_e( 'Kenya', 'hack' ); ?></h6>
											<p class="text-left"><?php esc_html_e( 'Shikoh is the CEO of Qhala, a Digital Innovation company that catalyzes digital transformation capabilities for organizations across Africa. She has over ten years of experience in the research, design, implementation, and management of digital technologies.' ); ?></p>
											<p class="toggle-readmore-wrapper">
												<span class="toggle-readmore"></span>
											</p>
										</div>
									</div>
									<div class="accordion-content">
									<p><?php esc_html_e( 'Shikoh is the CEO of Qhala, a Digital Innovation company that catalyzes digital transformation capabilities for organizations across Africa. She has over ten years of experience in the research, design, implementation, and management of digital technologies. She has established expertise in both African and emerging markets specialized in solving problems in agriculture, education, health, payments, retail and renewable energies. She is responsible for the set-up of Safaricom Alpha, a first of the kind corporate innovation hub in Africa, where she worked as the head of products – innovation, and acted as the chief innovation officer. She has worked for Safaricom, Africa Development Bank (AfDB), and Google. Shikoh sits on various boards in ICT companies and contributes to a number of steering committees and think tanks on Africa and technology. Shikoh holds a PhD and MSc in computer science from the University of Cape Town, South Africa.', 'hack' ); ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-third">
							<div class="section-judges-six-content">
								<div class="accordion judges">
									<div class="accordion-header">
									<div class="text-center">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-pablo-baldoma.jpg' ) ); ?>" width="152" />
									<h4><?php echo esc_html( 'Pablo Baldomá' ); ?></h4>
									<h6 class="tan-color"><?php esc_html_e( 'Argentina', 'hack' ); ?></h6>
									<p class="text-left"><?php esc_html_e( 'Pablo Baldoma Jones is an entrepreneur and startup advisor, with more than 15 years of experience in the technology field. He is the Co-founder and CBO of www.celerative.com, a tech platform based in Silicon Valley, aiming to help Global companies to Hire, Manage and Pay Remote Tech Talent.' ); ?></p>
									<p class="toggle-readmore-wrapper">
										<span class="toggle-readmore"></span>
									</p>
								</div>
									</div>
									<div class="accordion-content">
									<p>
								<?php
								esc_html_e(
									'Pablo Baldoma Jones is an entrepreneur and startup advisor, with more than 15 years of experience in the technology field.
									He is the Co-founder and CBO of',
									'hack'
								);
								?>
								<a href="http://celerative.com/" target="_blank">www.celerative.com</a>
								<?php
									esc_html_e(
										', a tech platform based in Silicon Valley, aiming to help Global companies to Hire, Manage and Pay Remote Tech Talent.
										He previously founded other startups and La Plata Hub, an incubator that invested in 60 technology companies.
										He also collaborates with lots of entrepreneurs (in the US and Latam) and companies through ',
										'hack'
									);
								?>
									<a href="https://www.asea.org.ar/" target="_blank">www.asea.org.ar</a>
									<?php
									esc_html_e(
										', "UNLP FCE Seminar of Entrepreneurship" and ',
										'hack'
									);
									?>
									<a href="http://poloitlaplata.com/" target="_blank">www.poloitlaplata.com</a>
									<?php
									esc_html_e(
										' as president.
										He is married to Ana, with two daughters, and loves mountain biking, running, and mountaineering.',
										'hack'
									);
									?>
									</p>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-third">
							<div class="section-judges-six-content">
								<div class="accordion judges">
									<div class="accordion-header">
									<div class="text-center">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-jasmine-ng.jpg' ) ); ?>" width="152" />
									<h4><?php echo esc_html( 'Jasmine Ng' ); ?></h4>
									<h6 class="tan-color"><?php esc_html_e( 'Malaysia', 'hack' ); ?></h6>
									<p class="text-left"><?php esc_html_e( '(Jasmine) Tech enthusiast and investor. Blockchain evangelist. Senior retail and corporate banker. Payment specialist turned fintech intrapreneur. Enjoy shaping new fintech strategies and work with highly motivated teams to bring great ideas to realization.' ); ?></p>
									<p class="toggle-readmore-wrapper">
										<span class="toggle-readmore"></span>
									</p>
								</div>
									</div>
									<div class="accordion-content">
									<p><?php esc_html_e( 'Tech enthusiast and investor. Blockchain evangelist. Senior retail and corporate banker. Payment specialist turned fintech intrapreneur. Enjoy shaping new fintech strategies and work with highly motivated teams to bring great ideas to realization. Strong people manager, P&L focus, deep thinker and a realist motivator and public speaker. Strongly believes that a better world is just in the next action we choose to take and in order to predict the future is to create it. No stranger to start-up culture having co-founded one herself.', 'hack' ); ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-third">
							<div class="section-judges-six-content">
								<div class="accordion judges">
									<div class="accordion-header">
									<div class="text-center">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-richard-zhang.jpg' ) ); ?>" width="152" />
									<h4><?php echo esc_html( 'Richard Zhang' ); ?></h4>
									<h6 class="tan-color"><?php esc_html_e( 'USA/China', 'hack' ); ?></h6>
									<p class="text-left"><?php esc_html_e( 'Richard is a lover of Jesus who is a revivalist at heart and always excited for the next adventure that God is taking him on. He is currently at Google Brain/AI in Pittsburgh, where he leads research efforts on hyperparameter optimization, Bayesian methods, and theoretical deep learning.' ); ?></p>
									<p class="toggle-readmore-wrapper">
										<span class="toggle-readmore"></span>
									</p>
								</div>
									</div>
									<div class="accordion-content">
									<p>
								<?php
								esc_html_e(
									'Richard is a laid-down lover of Jesus who is a revivalist at heart and always excited for the next adventure that God is taking him on. He is currently at ',
									'hack'
								);
								?>
						
								<a href="https://research.google/teams/brain/" target="_blank">Google Brain/AI</a>
								<?php
								esc_html_e(
									'in Pittsburgh, where he leads research efforts on hyperparameter optimization, Bayesian methods, and theoretical deep learning. Recently, he leads diversity initiatives within Google to raise awareness of faith-based discrimination within its models and data. He is grateful to have graduated with a PhD in Applied Mathematics and Computer Science at',
									'hack'
								);
								?>
								<a href="https://www.berkeley.edu/" target="_blank">UC Berkeley</a>
								<?php
								esc_html_e(
									' and his interests are in the intersection of optimization, theoretical computer science and machine learning. Before that, Richard graduated in the Great Class of 2014 from',
									'hack'
								);
								?>
								<a href="http://www.princeton.edu/" target="_blank">Princeton University</a>		
								<?php
								esc_html_e(
									', where he first personally experienced God in a wave of revival. 
									',
									'hack'
								);
								?>
								</p>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-third">
							<div class="section-judges-six-content">
								<div class="accordion judges">
									<div class="accordion-header">
										<div class="text-center">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-trip-nine.png' ) ); ?>" width="152" />
											<h4><?php echo esc_html( 'Trip Nine' ); ?></h4>
											<h6 class="tan-color"><?php esc_html_e( 'USA', 'hack' ); ?></h6>
											<p class="text-left"><?php esc_html_e( 'Trip Nine is a field sales engineer for CrowdStrike, a cybersecurity company based in Silicon Valley. In addition to his day job, he leads Ekballo University; an organization that teaches, trains, and equips the global church in digital evangelism.' ); ?></p>
											<p class="toggle-readmore-wrapper">
												<span class="toggle-readmore"></span>
											</p>
										</div>
									</div>
									<div class="accordion-content">									
										<p>
											<?php
											esc_html_e(
												'Trip Nine is a field sales engineer for CrowdStrike, a cybersecurity company based in Silicon Valley. In addition to his day job, he leads Ekballo University; an organization that teaches, trains, and equips the global church in digital evangelism. His hobbies include working on technical innovations both in cybersecurity and within the world of missions. Trip and his family live in the greater Boston area of the US. Feel free to connect with him on
												',
												'hack'
											);
											?>
											<a href="http://linkedin.com/in/tripnine" target="_blank">Linkedin</a>
										</p>
										<ul class="basic-list">
											<li><?php echo esc_html( 'Field Sales Engineer at CrowdStrike (CISSP, CCFA, CCFH, CCFR)' ); ?></li>
											<li><?php echo esc_html( '10 years+ working in technology with a focus on Cybersecurity' ); ?></li>
											<li><?php echo esc_html( '7 years leading Ekballo University (Teaching, training, equipping the global church in digital evangelism)' ); ?></li>
											<li><?php echo esc_html( 'Works on innovation efforts in the field of cybersecurity & missions' ); ?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-third">
							<div class="section-judges-six-content">
								<div class="accordion judges">
									<div class="accordion-header">
										<div class="text-center">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-natch-lazarus.jpg' ) ); ?>" width="152" />
											<h4><?php echo esc_html( 'Natchi Lazarus' ); ?></h4>
											<h6 class="tan-color"><?php esc_html_e( 'India', 'hack' ); ?></h6>
											<p class="text-left"><?php esc_html_e( 'Natchi Lazarus is a digital & social media marketing consultant specialising in working with nonprofits, churches & faith-based ventures. He is the author of The Connected Church, a best-seller on Amazon. He is the co-founder of Open Minds Digital Agency.' ); ?></p>
													<p class="toggle-readmore-wrapper">
														<span class="toggle-readmore"></span>
													</p>
										</div>
									</div>
									<div class="accordion-content">
										<p>
										<?php
										esc_html_e(
											'Natchi Lazarus is a digital & social media marketing consultant specialising in working with nonprofits, churches & faith-based ventures. He is the author of The Connected Church, a best-seller on Amazon. He is the co-founder of Open Minds Digital Agency. He has more than 20-years of experience in marketing. He is a keynote speaker who regularly speaks in various international events, conferences, and seminars. For more details & to connect, visit:',
											'hack'
										);
										?>
										<a href="http://www.natchilazarus.com/" class="text-link" target="_blank">www.natchilazarus.com</a>
											</p>
									 </div>
								</div>
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
