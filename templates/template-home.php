<?php
/**
 * Template Name: Home
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
			<div class="section section-home-one">
				<div class="wrap">
					<h1><?php esc_html_e( 'A Global Hackathon Event', 'hack' ); ?> <br><span><?php esc_html_e( 'We Bring the Gospel Where it’s Not', 'hack' ); ?></span></h1>
					<p><?php esc_html_e( 'This October join the Indigitous hosted worldwide event for the Glory of Christ. Host or participate in a Hackathon near you to improve your community.', 'hack' ); ?>
					<div class="section-home-one-buttons">
						<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'lead' ) ) ); ?>" class="button"><?php esc_html_e( 'Lead', 'hack' ); ?></a>
						<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'participate' ) ) ); ?>" class="button outline"><?php esc_html_e( 'Participate', 'hack' ); ?></a>
					</div>
				</div>
			</div>
			<div class="section section-home-two">
				<div class="wrap">
					<div class="section-home-two-user" style="left: 14.23%; top: 24.51%;" data-sal="slide-down">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-user-diego.png' ) ); ?>" width="130" />
						<h5><?php echo esc_html( 'Diego' ); ?></h5>
						<p><?php esc_html_e( 'Developer', 'hack' ); ?></p>
					</div>
					<div class="section-home-two-user" style="left: 26.25%; top: 51.8%;" data-sal="slide-down" data-sal-delay="100">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-user-diego.png' ) ); ?>" width="130" />
						<h5><?php echo esc_html( 'Carlos' ); ?></h5>
						<p><?php esc_html_e( 'Church Leader', 'hack' ); ?></p>
					</div>
					<div class="section-home-two-user" style="left: 43.40%; top: 17.59%;" data-sal="slide-down" data-sal-delay="200">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-user-diego.png' ) ); ?>" width="130" />
						<h5><?php echo esc_html( 'Willem' ); ?></h5>
						<p><?php esc_html_e( 'Writer', 'hack' ); ?></p>
					</div>
					<div class="section-home-two-user" style="left: 44.93%; top: 65.51%;" data-sal="slide-down" data-sal-delay="300">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-user-diego.png' ) ); ?>" width="130" />
						<h5><?php echo esc_html( 'Sade' ); ?></h5>
						<p><?php esc_html_e( 'Strategist', 'hack' ); ?></p>
					</div>
					<div class="section-home-two-user" style="right: 23.68%; top: 44.87%;" data-sal="slide-down" data-sal-delay="400">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-user-diego.png' ) ); ?>" width="130" />
						<h5><?php echo esc_html( 'Milani' ); ?></h5>
						<p><?php esc_html_e( 'Missionary', 'hack' ); ?></p>
					</div>
					<div class="section-home-two-user" style="right: 11.38%; top: 15.65%;" data-sal="slide-down" data-sal-delay="500">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-user-diego.png' ) ); ?>" width="130" />
						<h5><?php echo esc_html( 'Mira' ); ?></h5>
						<p><?php esc_html_e( 'Marketer', 'hack' ); ?></p>
					</div>
					<div class="section-home-two-user" style="right: 8.61%; bottom: 0;" data-sal="slide-down" data-sal-delay="600">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-user-diego.png' ) ); ?>" width="130" />
						<h5><?php echo esc_html( 'Diya' ); ?></h5>
						<p><?php esc_html_e( 'Designer', 'hack' ); ?></p>
					</div>
				</div>
			</div>

			<?php get_template_part( 'template-parts/callouts' ); ?>

			<div class="section section-home-three">
				<div class="wrap">
					<div class="row">
						<div class="column five-sixths offset-1">
							<iframe data-sal="slide-up" width="560" height="315" src="https://www.youtube.com/embed/AeFjeyzEU4Y?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

							<div class="row">
								<div class="column three-fifths">
									<blockquote class="primary-color is-large"><?php esc_html_e( 'A global hackathon to bring the Gospel to where it’s not.', 'hack' ); ?></blockquote>
									<p><a href="#" class="button"><?php esc_html_e( 'Learn More', 'hack' ); ?></a></p>
								</div>
							</div>
							<div class="row">
								<div class="column two-fifths">
									<h3><?php esc_html_e( 'What is a hackathon?', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'A hackathon is a hands-on event for programmers, developers, engineers, UX designers, project managers, and others to unleash their creativity through technology.', 'hack' ); ?>
								</div>
								<div class="column two-fifths offset-2">
									<h3><?php esc_html_e( 'How does it work?', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'For the duration of the event people with technical backgrounds come together, form teams around a problem, and collaboratively develop a solution.', 'hack' ); ?>
								</div>
							</div>
							<div class="row">
								<div class="column two-fifths">
									<h3><?php esc_html_e( 'How is it unique?', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'What separates the Indigitous #HACK from other hackathons is that our participants are focused on spreading the Gospel across all the nations.', 'hack' ); ?>
								</div>
								<div class="column two-fifths offset-2">
									<h3><?php esc_html_e( 'What is the goal?', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'We learn from one another as we address interconnected and related challenges.', 'hack' ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php get_template_part( 'template-parts/partners' ); ?>

			<div class="section section-home-four blue-background-color">
				<div class="wrap">
					<div class="text-center">
						<h2><?php esc_html_e( 'Partners & Sponsors', 'hack' ); ?></h2>
						<p class="intro-text"><?php esc_html_e( 'These generous organizations all play an important role in bringing #HACK to a city near you.', 'hack' ); ?></p>
						<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'impact' ) ) ); ?>" class="button"><?php esc_html_e( 'View #HACK Impact', 'hack' ); ?></a></p>
					</div>
					<div class="row">
						<div class="column one-fourth">
							<div class="section-home-four-callout">
								<div class="section-home-four-callout--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-participants.svg' ) ); ?>" width="70" />
								</div>
								<div class="section-home-four-callout--content">
									<span><?php echo esc_html( '4,300' ); ?></span>
									<p><?php esc_html_e( 'Participants', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="section-home-four-callout">
								<div class="section-home-four-callout--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-countries.svg' ) ); ?>" width="70" />
								</div>
								<div class="section-home-four-callout--content">
									<span><?php echo esc_html( '4,300' ); ?></span>
									<p><?php esc_html_e( 'Countries', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="section-home-four-callout">
								<div class="section-home-four-callout--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-projects.svg' ) ); ?>" width="67" />
								</div>
								<div class="section-home-four-callout--content">
									<span><?php echo esc_html( '4,300' ); ?></span>
									<p><?php esc_html_e( 'Projects', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="section-home-four-callout">
								<div class="section-home-four-callout--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-cities.svg' ) ); ?>" width="67" />
								</div>
								<div class="section-home-four-callout--content">
									<span><?php echo esc_html( '4,300' ); ?></span>
									<p><?php esc_html_e( 'Cities', 'hack' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-home-five padding-0">
				<img src="<?php echo esc_attr( get_theme_file_uri( 'assets/img/home/hack-home-parallax.jpg' ) ); ?>" class="is-parallax" />
			</div>
			<div class="section section-home-six blue-background-color">
				<div class="wrap">
					<h3 class="text-center"><?php esc_html_e( 'Global Participation of #HACK2021', 'hack' ); ?></h3>
					<div class="row">
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ar.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '20' ); ?></span>
									<p><?php esc_html_e( 'Argentina', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/de.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '20' ); ?></span>
									<p><?php esc_html_e( 'Germany', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/id.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '114' ); ?></span>
									<p><?php esc_html_e( 'Indonesia', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/th.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '22' ); ?></span>
									<p><?php esc_html_e( 'Thailand', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/au.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '23' ); ?></span>
									<p><?php esc_html_e( 'Australia', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/hk.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '15' ); ?></span>
									<p><?php esc_html_e( 'Hong Kong', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/za.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '23' ); ?></span>
									<p><?php esc_html_e( 'South Africa`', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ug.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '17' ); ?></span>
									<p><?php esc_html_e( 'Uganda', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ph.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '67' ); ?></span>
									<p><?php esc_html_e( 'Philippines', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/sg.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '68' ); ?></span>
									<p><?php esc_html_e( 'Singapore', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/us.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '141' ); ?></span>
									<p><?php esc_html_e( 'USA', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ke.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '12' ); ?></span>
									<p><?php esc_html_e( 'Kenya', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ci.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '70' ); ?></span>
									<p><?php esc_html_e( 'Ivory Coast', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/pa.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '10' ); ?></span>
									<p><?php esc_html_e( 'Panama', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/in.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '17' ); ?></span>
									<p><?php esc_html_e( 'India', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ng.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '78' ); ?></span>
									<p><?php esc_html_e( 'Nigeria', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/mz.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '37' ); ?></span>
									<p><?php esc_html_e( 'Mozabique', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/et.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '145' ); ?></span>
									<p><?php esc_html_e( 'Ethiopia', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/tg.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '24' ); ?></span>
									<p><?php esc_html_e( 'Togo', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/cm.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '17' ); ?></span>
									<p><?php esc_html_e( 'Cameroon', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/ls.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '4' ); ?></span>
									<p><?php esc_html_e( 'Lesotho', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/cd.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '6' ); ?></span>
									<p><?php esc_html_e( 'DRC', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<div class="column one-fourth">
							<div class="media-text">
								<div class="media-text--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/flags/zm.svg' ) ); ?>" width="50" />
								</div>
								<div class="media-text--content">
									<span><?php echo esc_html( '8' ); ?></span>
									<p><?php esc_html_e( 'Zambia', 'hack' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-home-seven">
				<div class="wrap">
					<div class="row">
						<div class="column five-sixths offset-1">
							<h6 class="divider text-center"><?php esc_html_e( 'SAVE THE DATE: October 15-17 and 22-24, 2021', 'hack' ); ?></h6>
							<h2 class="text-center"><?php esc_html_e( 'Join us for', 'hack' ); ?> <span><?php esc_html_e( 'Indigenous #Hack2021', 'hack' ); ?></span> <?php esc_html_e( 'to create Unique solutions to the challenges of Reaching the unreached', 'hack' ); ?></h2>
						</div>
					</div>
					<div class="row">
						<div class="column eleven-twelfths">
							<div class="section-home-seven-group">
								<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-section-1.jpg' ) ); ?>" />
								<div class="section-home-seven-group--content">
									<h2><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-participate.svg' ) ); ?>" aria-hidden="true" width="67" /> <?php esc_html_e( 'Participate', 'hack' ); ?></h2>
									<p>
										<strong><?php esc_html_e( 'Register by 10/15/2021', 'hack' ); ?></strong><br>
										<?php esc_html_e( 'Bring #HACK2021 to your city and convene hackers to help make Jesus known.', 'hack' ); ?>
									</p>
									<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'participate' ) ) ); ?>" class="button"><?php esc_html_e( 'Participate', 'hack' ); ?></a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="column eleven-twelfths offset-1">
							<div class="section-home-seven-group">
								<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-section-2.jpg' ) ); ?>" />
								<div class="section-home-seven-group--content">
									<h2><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-lead.svg' ) ); ?>" aria-hidden="true" width="67" /> <?php esc_html_e( 'Lead', 'hack' ); ?></h2>
									<p>
										<strong><?php esc_html_e( 'Register by 10/15/2021', 'hack' ); ?></strong><br>
										<?php esc_html_e( 'Bring #HACK2021 to your city and convene hackers to help make Jesus known.', 'hack' ); ?>
									</p>
									<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'lead' ) ) ); ?>" class="button"><?php esc_html_e( 'Lead', 'hack' ); ?></a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="column eleven-twelfths">
							<div class="section-home-seven-group">
								<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-section-3.jpg' ) ); ?>" />
								<div class="section-home-seven-group--content">
									<h2><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-sponsor.svg' ) ); ?>" aria-hidden="true" width="67" /> <?php esc_html_e( 'Sponsor', 'hack' ); ?></h2>
									<p>
										<strong><?php esc_html_e( 'Register by 10/15/2021', 'hack' ); ?></strong><br>
										<?php esc_html_e( 'Bring #HACK2021 to your city and convene hackers to help make Jesus known.', 'hack' ); ?>
									</p>
									<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'sponsor' ) ) ); ?>" class="button"><?php esc_html_e( 'Sponsor', 'hack' ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php get_template_part( 'template-parts/quotes' ); ?>

			<div class="section section-home-eight">
				<div class="wrap">
					<div class="row">
						<div class="column two-thirds offset-2">
							<h2 class="text-center"><?php esc_html_e( 'Frequently Asked Questions', 'hack' ); ?></h2>

							<div class="accordion">
								<div class="accordion-header">
									<span><?php esc_html_e( 'What is a hackathon?', 'hack' ); ?></span>
								</div>
								<div class="accordion-content">
									Our local mentors will be by your side throughout the hackathon online or face-to-face.
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
