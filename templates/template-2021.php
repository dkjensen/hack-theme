<?php
/**
 * Template Name: 2021
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
			<div class="section section-2021-one">
				<div class="wrap">
					<div class="row">
						<div class="column one-half">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/impact/hack-impact-Countries.svg' ) ); ?>" width="67" />
								</div>
								<div class="media-text--content">
									<span class="primary-color"><?php echo esc_html( '6th' ); ?></span>
									<h3><?php esc_html_e( 'Annual Event', 'hack' ); ?></h3>
								</div>
							</div>
							<h1>
								<?php
								/* translators: %s #HACK name tag */
								echo sprintf( esc_html__( 'Thank You %s', 'hack' ), hack_name_tag() );
								?>
							</h1>
							<p>
								<?php esc_html_e( 'At #HACK participants from around the world in the tech, creative, and adjacent industries gather to solve problems facing their communities.', 'hack' ); ?>
							</p>
							<p>
								<a href="#pdf-download" class="button"><?php esc_html_e( 'Download 2021 Report', 'hack' ); ?></a>
							</p>
						</div>
						<div class="column one-half">
			<div class="section-2021-one-graphic--container">
	  <img class="section-2021-one-graphic" data-sal="slide-up" data-sal-delay="300" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/2021/header-graphic.png' ) ); ?>" />
	  </div>
							
						</div>
					</div>
				</div>
			</div>

		<?php get_template_part( 'template-parts/callouts' ); ?>
	<section class="section-2021-map">
		<div class="section template-parts-map">
		<p class="map-number">
		<span>
		1,253
		</span>
		<span>
		participants</br>who came from
		</span>
	</p>
		</div>
	</section>
  
  <div class="section section-2021-two">
		<div class="wrap">
			<div class="grid-icons">
				<div class="media-text">
					<div class="media-text--img">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/impact/hack-impact-Countries.svg' ) ); ?>" width="67" />
					</div>
					<div class="media-text--content">
						<span class="primary-color"><?php echo esc_html( '46' ); ?></span>
						<h3><?php esc_html_e( 'Countries', 'hack' ); ?></h3>
					</div>
				</div>
				<div class="media-text">
					<div class="media-text--img">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/impact/hack-impact-City.svg' ) ); ?>" width="67" />
					</div>
					<div class="media-text--content">
					<span class="primary-color"><?php echo esc_html( '115' ); ?></span>
					<h3><?php esc_html_e( 'Cities', 'hack' ); ?></h3>
					</div>
				</div>
				<div class="media-text">
					<div class="media-text--img">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/impact/hack-impact-Participate.svg' ) ); ?>" width="67" />
					</div>
					<div class="media-text--content">
					<span class="primary-color"><?php echo esc_html( '74' ); ?></span>
					<h3><?php esc_html_e( 'Volunteer Leaders', 'hack' ); ?></h3>
					</div>
				</div>
				<div class="media-text">
					<div class="media-text--img">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-launch.svg' ) ); ?>" width="67" />
					</div>
					<div class="media-text--content">
					<span class="primary-color"><?php echo esc_html( '61' ); ?></span>
					<h3><?php esc_html_e( 'City Leads', 'hack' ); ?></h3>
					</div>
				</div>
				<div class="media-text">
					<div class="media-text--img">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/impact/hack-impact-network.svg' ) ); ?>" width="67" />
					</div>
					<div class="media-text--content">
					<span class="primary-color"><?php echo esc_html( '13' ); ?></span>
					<h3><?php esc_html_e( 'Regional Leads', 'hack' ); ?></h3>
					</div>
				</div>
			</div>
		</div>
  </div>
  
  <div class="section-2021-bg-church"></div>
	
	<!-- Video Grid -->
  <div class="section section-2021-three">
		<div class="wrap" style="margin-bottom:64px">
			<div class="row">
				<div class="column five-sixths offset-1">
					<iframe width="992" height="558" src="https://www.youtube.com/embed/SQvagv8Eegc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div class="wrap" style="margin-bottom:64px">
			<h3 class="text-center">
				<?php esc_html_e( 'Global Participation of #HACK2020', 'hack' ); ?>
			</h3>
			<p class="intro-text text-center" style="margin: 0 auto;"><?php esc_html_e( 'The Indigitous hackathon is a unique opportunity to gather people with unique skill sets for the purpose of responding to the most pressing needs that impact our society.', 'hack' ); ?></p>
		</div>
		<div class="wrap">
			<div class="video-grid">
				<a href="#" target="_blank" rel="noopener" class="video-grid-item">
					<img src="https://static01.nyt.com/images/2021/09/14/science/07CAT-STRIPES/07CAT-STRIPES-superJumbo.jpg" alt="video" />
				</a>
				<a href="#" target="_blank" rel="noopener" class="video-grid-item">
					<img src="https://static01.nyt.com/images/2021/09/14/science/07CAT-STRIPES/07CAT-STRIPES-superJumbo.jpg" alt="video" />
				</a>
				<a href="#" target="_blank" rel="noopener" class="video-grid-item">
					<img src="https://static01.nyt.com/images/2021/09/14/science/07CAT-STRIPES/07CAT-STRIPES-superJumbo.jpg" alt="video" />
				</a>
				<a href="#" target="_blank" rel="noopener" class="video-grid-item">
					<img src="https://static01.nyt.com/images/2021/09/14/science/07CAT-STRIPES/07CAT-STRIPES-superJumbo.jpg" alt="video" />
				</a>
				<a href="#" target="_blank" rel="noopener" class="video-grid-item">
					<img src="https://static01.nyt.com/images/2021/09/14/science/07CAT-STRIPES/07CAT-STRIPES-superJumbo.jpg" alt="video" />
				</a>
				<a href="#" target="_blank" rel="noopener" class="video-grid-item">
					<img src="https://static01.nyt.com/images/2021/09/14/science/07CAT-STRIPES/07CAT-STRIPES-superJumbo.jpg" alt="video" />
				</a>
			</div>
		</div>
	</div>

	<section>
		<?php get_template_part( 'template-parts/quotes' ); ?>
	</section>
	
	<section>
		<div class="wrap" style="margin-bottom:64px">
			<h3 class="text-center">
				<?php esc_html_e( 'Global Participation of #HACK2020', 'hack' ); ?>
			</h3>
			<p class="intro-text text-center" style="margin: 0 auto;"><?php esc_html_e( 'The Indigitous hackathon is a unique opportunity to gather people with unique skill sets for the purpose of responding to the most pressing needs that impact our society.', 'hack' ); ?></p>
		</div>
	</section>

	<!-- Challenges -->
	<div class="section section-challenges-two" style="margin-top:0; padding-top:0;">
		<div class="wrap">
			<div class="row">
				<?php

				$hack_challenges = new \WP_Query(
					array(
						'post_type'      => 'challenge',
						'posts_per_page' => 3,
						'post_status'    => 'publish',
					)
				);

				while ( $hack_challenges->have_posts() ) {
					$hack_challenges->the_post();

					?>

				<div class="column one-third">
					<div class="section-challenges-two-item">
						<img class="section-challenges-two-item-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-' . get_post_meta( get_the_ID(), 'icon', true ) . '.svg' ) ); ?>" width="56" />
						<h3><?php echo esc_html( get_post_meta( get_the_id(), 'challenge_type', true ) ); ?></h3>
						<?php the_excerpt(); ?>
						<div class="section-challenges-two-item-info 
						<?php echo esc_html( sanitize_title_with_dashes( get_the_title( get_the_ID() ) ) ); ?>
						">
							<?php echo wp_kses_post( wpautop( get_post_meta( get_the_ID(), 'short_info', true ) ) ); ?>
							<p><a href="<?php echo esc_url( get_permalink( get_the_ID() ) ); ?>" class="button"><?php esc_html_e( 'View Details', 'hack' ); ?></a></p>

							<div class="section-challenges-two-item-info--footer">
								<?php
								if ( function_exists( '\get_field' ) ) {
									$hack_presented_by = get_field( 'presented_by' );

									if ( ! empty( $hack_presented_by ) ) {
										?>

										<p><?php esc_html_e( 'This Challenge is Presented by:', 'hack' ); ?></p>
										<div class="section-challenges-two-item-info--footer-presenters">

											<?php
											foreach ( $hack_presented_by as $hack_presenter ) {
												printf( '<a href="%s" target="_blank">%s</a>', esc_url( $hack_presenter['website'] ), wp_get_attachment_image( $hack_presenter['logo'], 'full' ) );
											}
											?>
										</div>

										<?php
									}
								}
								?>
							</div>
						</div>
					</div>
				</div>

					<?php
				}

				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>


	  <!-- JUDGES -->
	  <div class="section section-2021-judges section-partner-seven ">
				<div class="wrap">
					<div class="row">
						<div class="column one-third">
							<div class="section-partner-seven-sidebar yellow-background-color">
							
								<h2>
								<?php
								esc_html_e(
									'#HACK2021 Global Judges',
									'hack'
								);
								?>
									</h2>
								<p>
									<?php
									esc_html_e( 'This international team of entrepreneurs, business, and ministry leaders reviewed the top projects worked on by the #HACK2021 teams and presented the awards during the global celebration calls on November 5, 2021 for:', 'hack' );
									?>
								</p>
			  <ul>
				<li>● Viability</li>
				<li>● Completeness</li>
				<li>● Kingdom Impact</li>
				<li>● Innovation</li>
				<li>● People’s Choice</li>
			  </ul>
							</div>
			  <blockquote class="primary-color"><?php esc_html_e( 'We want to bring the gospel to those who need to hear.', 'hack' ); ?></blockquote>
						</div>
						<div class="column seven-twelfths offset-1">
						<div class="judge-grid">

			  <div class="judge-card">
		  <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-christeen-rico.jpg' ) ); ?>" alt="Christeen Rico">
		  <p>
			<span>Christeen Rico</span>
			<span>USA/Philippines</span>
		  </p>
			  </div>
			  <div class="judge-card">
		  <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-jonhart.jpg' ) ); ?>" alt="Jon Hart">
		  <p>
			<span>Jon Hart</span>
			<span>USA</span>
		  </p>
			  </div>
			  <div class="judge-card">
		  <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-jasmine-ng.jpg' ) ); ?>" alt="Jasmine Ng">
		  <p>
			<span>Jasmine Ng</span>
			<span>Malaysia</span>
		  </p>
			  </div>
			  <div class="judge-card">
		  <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-natch-lazarus.jpg' ) ); ?>" alt="Natchi Lazarus">
		  <p>
			<span>Natchi Lazarus</span>
			<span>Title</span>
		  </p>
			  </div>
			  <div class="judge-card">
		  <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-pablo-baldoma.jpg' ) ); ?>" alt="Pablo Baldomá">
		  <p>
			<span>Pablo Baldomá</span>
			<span>Argentina</span>
		  </p>
			  </div>
				<div class="judge-card">
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-richard-zhang.jpg' ) ); ?>" alt="Richard Zhang">
			<p>
			<span>Richard Zhang</span>
			<span>USA/China</span>
			</p>
				</div>
			  <div class="judge-card">
		  <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-shikou-gitau.png' ) ); ?>" alt="Dr. Shikoh Gitau">
		  <p>
			<span>Dr. Shikoh Gitau</span>
			<span>Kenya</span>
		  </p>
			  </div>
			  <div class="judge-card">
		  <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/judges/judge-trip-nine.png' ) ); ?>" alt="Trip Nine">
		  <p>
			<span>Trip Nine</span>
			<span>USA</span>
		  </p>
			  </div>
				  </div>
						</div>
					</div>
				</div>
			</div>

	<section>
		<?php get_template_part( 'template-parts/projects' ); ?>
	</section>

	<!-- Stories -->
	<div class="section section-2021-stories">
		<div class="wrap" style="margin-bottom:64px"
			  ><h3 class="text-center"><?php esc_html_e( 'Global Participation of #HACK2020', 'hack' ); ?></h3>
		<p class="intro-text text-center" style="margin: 0 auto;"><?php esc_html_e( 'The Indigitous hackathon is a unique opportunity to gather people with unique skill sets for the purpose of responding to the most pressing needs that impact our society.', 'hack' ); ?></p>
		</div>
		<div class="wrap">
			<div class="site-content">

				<div class="card-story">
					<div class="card-story--content">
						<div class="card-story--content-header">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/gb.svg' ) ); ?>" width="50" alt=""/>
						</div>
						<h3>The Prayer Walk App was originally conceived to track prayer walking in the city of Coventry, England, with the goal of covering every street in the city with prayer. During #HACK2021, participants expanded that focus to the entire UK.</h3>
					</div>
				</div>

				<div class="card-story">
					<div class="card-story--content">
						<div class="card-story--content-header">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/et.svg' ) ); ?>" width="50" alt=""/>
						</div>
						<h3>Dvash, the Hebrew word for “honey,” appears in the Bible 55 times. The Dvash app was created to make it easy to read, study, and understand the Bible as well as share it on your mobile device in multiple languages.</h3>
		
					</div>
				</div>

				<div class="card-story">
					<div class="card-story--content">
						<div class="card-story--content-header">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/nz.svg' ) ); ?>" width="50" alt=""/>
						</div>
						<h3>A team in New Zealand created an Augmented Reality (AR) experience for a local church’s Christmas drive-through service, so people who visit can get an enhanced worship experience.</h3>
					</div>
				</div>

				<div class="card-story">
					<div class="card-story--content">
						<div class="card-story--content-header">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ar.svg' ) ); ?>" width="50" alt=""/>
						</div>
						<h3>A group in #HACK Argentina worked on a series of seven videos intended to lead people who received Christ online into the next steps of their spiritual journey, including joining a spiritual community and joining a local church. Meanwhile, another team worked on a program to prevent suicidal tendencies online.</h3>
					</div>
				</div>

				<div class="card-story">
					<div class="card-story--content">
						<div class="card-story--content-header">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/us.svg' ) ); ?>" width="50" alt=""/>
						</div>
						<h3>The Journey App is an interactive Bible curriculum designed to encourage and support discipleship relationships between those with a relationship with Christ and those within the “movable middle.” </h3>
					</div>
				</div>

				<?php
				printf( '<div id="infinite-handle"><span><a href="%s">%s</a></span></div>', esc_url( get_post_type_archive_link( 'story' ) ), esc_html__( 'View More Stories', 'hack' ) );
				?>

			</div>

		</div>
	</div>

	<!-- GALLERY -->
	<div class="section">
		<div class="wrap">
			<div class="hack-slick" data-slick='{"dots": true, "arrows": true}'>
				<img src="https://static01.nyt.com/images/2021/09/14/science/07CAT-STRIPES/07CAT-STRIPES-superJumbo.jpg" alt="video" />
				<img src="https://static01.nyt.com/images/2021/09/14/science/07CAT-STRIPES/07CAT-STRIPES-superJumbo.jpg" alt="video" />
				<img src="https://static01.nyt.com/images/2021/09/14/science/07CAT-STRIPES/07CAT-STRIPES-superJumbo.jpg" alt="video" />
				<img src="https://static01.nyt.com/images/2021/09/14/science/07CAT-STRIPES/07CAT-STRIPES-superJumbo.jpg" alt="video" />
			</div>
		</div>
	</div>

	<div class="section">
		<div class="wrap" style="margin-bottom:64px">
				<div class="row">
					<div class="column five-sixths offset-1">
			<iframe width="992" height="558" src="https://www.youtube.com/embed/SQvagv8Eegc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		</div>
		<div class="wrap"><h3 class="text-center"><?php esc_html_e( 'Global Participation of #HACK2020', 'hack' ); ?></h3>
		</div>
	</div>

			
	<section class="section">
		<?php get_template_part( 'template-parts/partners' ); ?>
	</section>

	<div class="section template-parts-downloads" id="pdf-download">
	<div class="wrap">
		<div class="row">
			<div class="column one-third">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/about/hack-about-section-11.jpg' ) ); ?>" style="border-radius: 4px; object-fit:cover;"/>
			</div>
			<div class="column two-thirds">
				<h5 class="divider"><?php esc_html_e( 'Downloads', 'hack' ); ?></h5>
				<h2>
					<?php
					/* translators: %s #HACK */
					echo sprintf( esc_html__( 'Want to know more about %s?', 'hack' ), '<span>#HACK</span>' );
					?>
				</h2>
				<div class="row">
					<div class="column seven-twelfths">
						<p><?php esc_html_e( 'Check out our resources or download the report from #HACK2020 for more information. ', 'hack' ); ?></p>
						<br>
						<p>
							<a href="https://hack.indigitous.org/wp-content/uploads/2021/12/HACK2021_Report.pdf" target="_blank"><i class="fas fa-download"></i> <?php esc_html_e( '#HACK2021 Report', 'hack' ); ?></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



	</article>

		<?php
	endwhile;
endif;

get_footer();
