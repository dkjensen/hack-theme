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
					<h1><?php esc_html_e( 'A Global Hackathon', 'hack' ); ?> <br><span><?php esc_html_e( 'To Bring The Gospel Where It Needs To Go', 'hack' ); ?></span></h1>
					<p><?php esc_html_e( 'The Indigitous #HACK is a global hackathon where participants around the world gather to solve problems facing their communities. #HACK convenes people from all backgrounds to use their skills, gifts, and expertise to impact the world. Join #HACK2021 and see how God can use you.', 'hack' ); ?>
					<div class="section-home-one-buttons">
					<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'participate' ) ) ); ?>" class="button"><?php esc_html_e( 'Participate', 'hack' ); ?></a>
						<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'lead' ) ) ); ?>" class="button outline"><?php esc_html_e( 'Lead', 'hack' ); ?></a>
					</div>
				</div>
			</div>
			
			<?php get_template_part( 'template-parts/map' ); ?>
			<?php get_template_part( 'template-parts/callouts' ); ?>

			<div class="section section-home-three">
				<div class="wrap">
					<div class="row">
						<div class="column five-sixths offset-1">
							<iframe width="992" height="558" src="https://www.youtube.com/embed/SQvagv8Eegc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<div class="row">
								<div class="column three-fifths">
									<blockquote class="primary-color is-large"><?php esc_html_e( 'The largest global hackathon for missions.', 'hack' ); ?></blockquote>
									<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ); ?>" class="button"><?php esc_html_e( 'About #Hack', 'hack' ); ?></a></p>
								</div>
							</div>
							<div class="row">
								<div class="column two-fifths">
									<h3 class="primary-color"><?php esc_html_e( 'What’s a hackathon?', 'hack' ); ?></h3>
									<p>
										<?php esc_html_e( 'A hackathon* is an event with a specific focus during which people in the tech and adjacent industries collaborate to create solutions to specific challenges.', 'hack' ); ?> *<em><?php esc_html_e( 'A combination of the words "hack" and marathon. ', 'hack' ); ?></em>
									</p>
								</div>
								<div class="column two-fifths offset-2">
									<h3 class="primary-color"><?php esc_html_e( 'Who should join #HACK?', 'hack' ); ?></h3>
									<p><?php esc_html_e( '#HACK is not just for software developers, engineers, and UX designers. We need content creators, church leaders, project managers, and anyone who wants to contribute creative solutions to join the event.', 'hack' ); ?></p>
								</div>
							</div>
							<div class="row">
								<div class="column two-fifths">
									<h3 class="primary-color"><?php esc_html_e( 'What happens at #HACK?', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'Exact schedules are coordinated by each location. During the event, a number of different local and global challenges are shared, then teams are formed and they work to create a unique solution.', 'hack' ); ?></p>
								</div>
								<div class="column two-fifths offset-2">
									<h3 class="primary-color"><?php esc_html_e( 'When and where is the event?', 'hack' ); ?></h3>
									<p><?php esc_html_e( 'This year the Indigitous #HACK will take place October 15-17 and October 22-24, 2021 in multiple cities around the world.', 'hack' ); ?>
									<a class="text-color" href="<?php echo esc_url( get_permalink( get_page_by_path( 'locations' ) ) ); ?>">		
									<?php esc_html_e( 'Find a city near you here', 'hack' ); ?>
								</a>
								</p>
								</div>
							</div>
							<div class="row">
								<div class="column two-fifths">
									<h3 class="primary-color"><?php esc_html_e( 'Why join?', 'hack' ); ?></h3>
									<p><?php esc_html_e( '#HACK is an opportunity to create solutions that have a lasting impact, solve problems facing global and local communities, make new friends, and have fun while you are doing it.', 'hack' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section section-home-four blue-background-color">
				<div class="wrap">
					<div class="text-center">
						<h2><?php esc_html_e( 'Making an Impact', 'hack' ); ?></h2>
						<p class="intro-text"><?php esc_html_e( 'From orphans needing a home to lack of access to the Bible, #HACK participants have taken on some major challenges. Just a few days working together have resulted in solutions that address these problems and bring the gospel to where it needs to go.', 'hack' ); ?></p>
						<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'impact' ) ) ); ?>" class="button"><?php esc_html_e( '#HACK Impact', 'hack' ); ?></a></p>
					</div>
					<div class="row">
						<div class="column one-fourth">
							<div class="section-home-four-callout">
								<div class="section-home-four-callout--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-participate.svg' ) ); ?>" width="70" alt=""/>
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
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-globe.svg' ) ); ?>" width="70" alt=""/>
								</div>
								<div class="section-home-four-callout--content">
									<span><?php echo esc_html( '41' ); ?></span>
									<p><?php esc_html_e( 'Countries', 'hack' ); ?></p>
								</div>
							</div>
						</div>
						<?php
						/*
						<div class="column one-fourth">
							<div class="section-home-four-callout">
								<div class="section-home-four-callout--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-projects.svg' ) ); ?>" width="67" />
								</div>
								<div class="section-home-four-callout--content">
									<span><?php echo esc_html( '350+' ); ?></span>
									<p><?php esc_html_e( 'Projects', 'hack' ); ?></p>
								</div>
							</div>
						</div> */
						?>
						<div class="column one-fourth">
							<div class="section-home-four-callout">
								<div class="section-home-four-callout--img">
									<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-city.svg' ) ); ?>" width="67" alt=""/>
								</div>
								<div class="section-home-four-callout--content">
									<span><?php echo esc_html( '210' ); ?></span>
									<p><?php esc_html_e( 'Cities', 'hack' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-home-five padding-0">
				<img src="<?php echo esc_attr( get_theme_file_uri( 'assets/img/home/hack-home-parallax.jpg' ) ); ?>" class="is-parallax" alt=""/>
			</div>
			
			<?php get_template_part( 'template-parts/global-participation' ); ?>

			<div class="section section-home-seven padding-bottom-0">
				<div class="wrap">
					<div class="row">
						<div class="column five-sixths offset-1">
							<p class="divider text-center orange-title"><?php esc_html_e( 'SAVE THE DATE: October 15-17 and 22-24, 2021', 'hack' ); ?></p>
							<h2 class="text-center"><?php esc_html_e( 'Join us for', 'hack' ); ?> <span><?php esc_html_e( 'Indigitous #HACK2021', 'hack' ); ?></span> <?php esc_html_e( 'to make an impact and take the gospel where it needs to go.', 'hack' ); ?></h2>
						</div>
					</div>
					<div class="row">
						<div class="column eleven-twelfths">
							<div class="section-home-seven-group">
								<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-section-1.jpg' ) ); ?>" alt=""/>
								<div class="section-home-seven-group--content">
									<h2><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-participate.svg' ) ); ?>" aria-hidden="true" width="67" /> <?php esc_html_e( 'Participate', 'hack' ); ?></h2>
									<p>
										<?php esc_html_e( 'Join #HACK2021 to make an impact and bring the Gospel where it needs to go. Sign up and see how God will use your talents and experience.', 'hack' ); ?>
									</p>
									<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'participate' ) ) ); ?>" class="button"><?php esc_html_e( 'Participate', 'hack' ); ?></a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="column eleven-twelfths offset-1">
							<div class="section-home-seven-group">
								<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-section-2.jpg' ) ); ?>" alt=""/>
								<div class="section-home-seven-group--content">
									<h2><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-lead.svg' ) ); ?>" aria-hidden="true" width="67" /> <?php esc_html_e( 'Lead', 'hack' ); ?></h2>
									<p>
										<?php esc_html_e( 'Bring #HACK2021 to your city. Bring together skilled individuals to collaborate on projects that make Jesus known and meet needs specific to your community.', 'hack' ); ?>
									</p>
									<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'lead' ) ) ); ?>" class="button"><?php esc_html_e( 'Lead', 'hack' ); ?></a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="column eleven-twelfths">
							<div class="section-home-seven-group">
								<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hack-home-section-3.jpg' ) ); ?>" alt=""/>
								<div class="section-home-seven-group--content">
									<h2><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/icons/hack-icon-assemble.svg' ) ); ?>" aria-hidden="true" width="67" /> <?php esc_html_e( 'Partner', 'hack' ); ?></h2>
									<p>
										<?php esc_html_e( 'Partners play an important role in bringing #HACK to cities around the world by providing challenges, sponsorship or other support. We’d love to work together to bring the gospel to where it is not.', 'hack' ); ?>
									</p>
									<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'partner' ) ) ); ?>" class="button"><?php esc_html_e( 'Partner', 'hack' ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php get_template_part( 'template-parts/partners' ); ?>
			<?php get_template_part( 'template-parts/quotes' ); ?>

			<div class="section section-home-eight">
				<div class="wrap">
					<div class="row">
						<div class="column two-thirds offset-2">
							<h2 class="text-center"><?php esc_html_e( 'Frequently Asked Questions', 'hack' ); ?></h2>

							<?php foreach ( array( hack_get_faqs( 'general' )[1], hack_get_faqs( 'participants' )[1] ) as $faq ) { ?>

							<div class="accordion">
								<div class="accordion-header">
									<span><?php echo esc_html( $faq['question'] ?? '' ); ?></span>
								</div>
								<div class="accordion-content">
									<?php echo wp_kses_post( $faq['answer'] ?? '' ); ?>
								</div>
							</div>

							<?php } ?>

							<p class="text-right">
								<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'faq' ) ) ); ?>" class="text-color"><?php esc_html_e( 'View More', 'hack' ); ?></a>
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
