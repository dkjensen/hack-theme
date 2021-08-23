<?php
/**
 * Template Name: Impact
 *
 * @package Dkjensen\Hack
 */

global $hack_infinity_query;

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="section section-impact-one padding-bottom-0">
				<div class="wrap">
					<h1><span><?php echo esc_html( '#HACK' ); ?></span> <?php esc_html_e( 'Impact', 'hack' ); ?></h1>
					<p><?php esc_html_e( 'Since 2016, the Indigitous #HACK has served as a rallying point for those who have talents in the digital space.', 'hack' ); ?></p>
					<p><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ); ?>"><?php esc_html_e( 'About Us', 'hack' ); ?></a></p>
				</div>
			</div>
			<div class="section section-impact-two padding-0">
				<div class="wrap">
					<div class="row">
						<div class="column five-sixths offset-1">
							<div class="section-impact-two-media-texts">
								<div class="media-text">
									<div class="media-text--img">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/impact/hack-impact-Participate.svg' ) ); ?>" width="67" />
									</div>
									<div class="media-text--content">
										<span class="primary-color"><?php echo esc_html( '4,300' ); ?></span>
										<h3><?php esc_html_e( 'Participants', 'hack' ); ?></h3>
									</div>
								</div>
								<div class="media-text">
									<div class="media-text--img">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/impact/hack-impact-Countries.svg' ) ); ?>" width="67" />
									</div>
									<div class="media-text--content">
										<span class="primary-color"><?php echo esc_html( '41' ); ?></span>
										<h3><?php esc_html_e( 'Countries', 'hack' ); ?></h3>
									</div>
								</div>
								<div class="media-text">
									<div class="media-text--img">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/impact/hack-impact-City.svg' ) ); ?>" width="67" />
									</div>
									<div class="media-text--content">
										<span class="primary-color"><?php echo esc_html( '210' ); ?></span>
										<h3><?php esc_html_e( 'Cities', 'hack' ); ?></h3>
									</div>
								</div>
								<div class="media-text">
									<div class="media-text--img">
										<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/impact/hack-impact-Calendar.svg' ) ); ?>" width="67" />
									</div>
									<div class="media-text--content">
										<span class="primary-color"><?php echo esc_html( '6' ); ?></span>
										<h3><?php esc_html_e( 'Years', 'hack' ); ?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section section-impact-three padding-0">
				<img src="<?php echo esc_attr( get_theme_file_uri( 'assets/img/home/hack-home-parallax.jpg' ) ); ?>" class="is-parallax" />
			</div>

			<?php get_template_part( 'template-parts/global-participation' ); ?>

			<div class="section section-impact-four">
				<div class="wrap">
					<div class="row">
						<div class="column one-fourth offset-1">
							<h2><?php esc_html_e( 'At a Glance', 'hack' ); ?>:</h2>
						</div>
						<div class="column one-half offset-1">
							<p><?php printf( '<strong>%s</strong> %s', esc_html__( 'Every year since 2016,', 'hack' ), esc_html__( 'hackers around the world have gathered to collaborate on missional projects aimed at solving problems affecting their communities.', 'hack' ) ); ?></p>
						</div>
					</div>
					<div class="row">
						<div class="column five-sixths offset-1">
							<div class="section-impact-four-items">
								<div class="section-impact-four-items--item">
									<div class="section-impact-four-items--item--container" data-sal="slide-left">
										<div class="section-impact-four-items--item--date badge">
											<?php printf( '<span>%s</span>%s', esc_html( '#HACK' ), esc_html( '2016' ) ); ?>
										</div>
										<div class="section-impact-four-items--item--stats">
											<div class="section-impact-four-items--item--stats-stat">
												<span>1,426</span>
												<?php esc_html_e( 'Participants', 'hack' ); ?>
											</div>
											<div class="section-impact-four-items--item--stats-stat">
												<span>28</span>
												<?php esc_html_e( 'Locations', 'hack' ); ?>
											</div>
											<div class="section-impact-four-items--item--report">
												<a href="https://hack.indigitous.org/wp-content/uploads/2021/07/HACK2016_FinalReport.pdf" target="_blank"><i class="fas fa-download"></i> <?php esc_html_e( 'Download Report', 'hack' ); ?></a>
											</div>
										</div>
										<div class="section-impact-four-items--item--image">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/about/timeline-item-1-img.png' ) ); ?>" />
										</div>
									</div>
								</div>
								<div class="section-impact-four-items--item">
									<div class="section-impact-four-items--item--container" data-sal="slide-left">
										<div class="section-impact-four-items--item--date badge">
											<?php printf( '<span>%s</span>%s', esc_html( '#HACK' ), esc_html( '2017' ) ); ?>
										</div>
										<div class="section-impact-four-items--item--stats">
											<div class="section-impact-four-items--item--stats-stat">
												<span>2,100</span>
												<?php esc_html_e( 'Participants', 'hack' ); ?>
											</div>
											<div class="section-impact-four-items--item--stats-stat">
												<span>71</span>
												<?php esc_html_e( 'Locations', 'hack' ); ?>
											</div>
											<div class="section-impact-four-items--item--report">
												<a href="https://hack.indigitous.org/wp-content/uploads/2021/07/HACK2017_FinalReport.pdf" target="_blank"><i class="fas fa-download"></i> <?php esc_html_e( 'Download Report', 'hack' ); ?></a>
											</div>
										</div>
										<div class="section-impact-four-items--item--image">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/about/timeline-item-2-img.png' ) ); ?>" />
										</div>
									</div>
								</div>
								<div class="section-impact-four-items--item">
									<div class="section-impact-four-items--item--container" data-sal="slide-left">
										<div class="section-impact-four-items--item--date badge">
											<?php printf( '<span>%s</span>%s', esc_html( '#HACK' ), esc_html( '2018' ) ); ?>
										</div>
										<div class="section-impact-four-items--item--stats">
											<div class="section-impact-four-items--item--stats-stat">
												<span>600+</span>
												<?php esc_html_e( 'Participants', 'hack' ); ?>
											</div>
											<div class="section-impact-four-items--item--stats-stat">
												<span>30+</span>
												<?php esc_html_e( 'Locations', 'hack' ); ?>
											</div>
											<div class="section-impact-four-items--item--report">
												
											</div>
										</div>
										<div class="section-impact-four-items--item--image">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/about/timeline-item-3-img.png' ) ); ?>" />
										</div>
									</div>
								</div>
								<div class="section-impact-four-items--item">
									<div class="section-impact-four-items--item--container" data-sal="slide-left">
										<div class="section-impact-four-items--item--date badge">
											<?php printf( '<span>%s</span>%s', esc_html( '#HACK' ), esc_html( '2019' ) ); ?>
										</div>
										<div class="section-impact-four-items--item--stats">
											<div class="section-impact-four-items--item--stats-stat">
												<span>1,088</span>
												<?php esc_html_e( 'Participants', 'hack' ); ?>
											</div>
											<div class="section-impact-four-items--item--stats-stat">
												<span>37</span>
												<?php esc_html_e( 'Locations', 'hack' ); ?>
											</div>
											<div class="section-impact-four-items--item--report">
												<a href="https://hack.indigitous.org/wp-content/uploads/2021/07/HACK2019_FinalReport.pdf" target="_blank"><i class="fas fa-download"></i> <?php esc_html_e( 'Download Report', 'hack' ); ?></a>
											</div>
										</div>
										<div class="section-impact-four-items--item--image">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/about/timeline-item-4-img.png' ) ); ?>" />
										</div>
									</div>
								</div>
								<div class="section-impact-four-items--item">
									<div class="section-impact-four-items--item--container" data-sal="slide-left">
										<div class="section-impact-four-items--item--date badge">
											<?php printf( '<span>%s</span>%s', esc_html( '#HACK' ), esc_html( '2020' ) ); ?>
										</div>
										<div class="section-impact-four-items--item--stats">
											<div class="section-impact-four-items--item--stats-stat">
												<span>1,088</span>
												<?php esc_html_e( 'Participants', 'hack' ); ?>
											</div>
											<div class="section-impact-four-items--item--stats-stat">
												<span>141</span>
												<?php esc_html_e( 'Locations', 'hack' ); ?>
											</div>
											<div class="section-impact-four-items--item--report">
												<a href="https://hack.indigitous.org/wp-content/uploads/2021/07/HACK2020_FinalReport.pdf" target="_blank"><i class="fas fa-download"></i> <?php esc_html_e( 'Download Report', 'hack' ); ?></a>
											</div>
										</div>
										<div class="section-impact-four-items--item--image">
											<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/about/timeline-item-5-img.png' ) ); ?>" />
										</div>
									</div>
								</div>
								<div class="section-impact-four-items--item">
									<div class="section-impact-four-items--item--container current" data-sal="slide-left">
										<h1><span><?php echo esc_html( '#HACK' ); ?></span><?php echo esc_html( '2021' ); ?></h1>
										<p><?php esc_html_e( 'The world’s largest global missional hackathon returns this October.', 'hack' ); ?></p>
										<p><a href="https://indigitous.typeform.com/to/QkVDWhea" target="_blank" class="button"><?php esc_html_e( 'Register', 'hack' ); ?></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-impact-five gray-300-background-color">
				<div class="wrap">
					<h2><?php esc_html_e( 'Stories From #HACK', 'hack' ); ?></h2>
					<p class="intro-text"><?php esc_html_e( 'All of the 4,300 people who have taken part in #HACK since 2016 have their own stories - stories of lives changed, problems solved, and Jesus made known. Here is just a glimpse of what God has done through Indigitous #HACK.', 'hack' ); ?></p>
					<div id="content" class="site-content">
						<?php
						if ( $hack_infinity_query->have_posts() ) {
							while ( $hack_infinity_query->have_posts() ) {
								$hack_infinity_query->the_post();

								get_template_part( 'template-parts/card-story', get_post_format() );

							}

							printf( '<div id="infinite-handle"><span><a href="%s">%s</a></span></div>', esc_url( get_post_type_archive_link( 'story' ) ), esc_html__( 'View More Stories', 'hack' ) );
						}
						?>
					</div>
				</div>
			</div>
			<?php get_template_part( 'template-parts/downloads' ); ?>
		</article>

		<?php
	endwhile;
endif;

get_footer();
