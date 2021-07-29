<?php
/**
 * Global variables and functions.
 *
 * @package Dkjensen\Hack
 */

/**
 * Returns FAQs for all sections or a specific section
 *
 * @param string $section Optional section to return.
 * @return array
 */
function hack_get_faqs( $section = '' ) {
	$faqs = array(
		'participants' => array(
			array(
				'question' => esc_html__( 'How much is the registration?', 'hack' ),
				'answer'   => esc_html__( 'It depends on the city in which you are participating. Please fill out the #HACK 2020 interest form, and we will gladly connect you to the closest #HACK city.', 'hack' ),
			),
			array(
				'question' => esc_html__( 'I can’t code, can I still participate?', 'hack' ),
				'answer'   => esc_html__( 'Yes! #HACK welcomes anyone who wants to collaborate together on missional technology projects for long-term impact. While our work focuses on multiple technology platforms, you don’t have to be a programmer to get involved. We need designers, photographers, writers, project managers, social media gurus - creative thinkers of all types! The most important skill is the ability to work as a team and find ways to problem-solve. Also, while Indigitous #HACK is explicitly Christian, participants from any (or no) faith background are welcomed warmly.', 'hack' ),
			),
		),
		'partners'     => array(),
		'leaders'      => array(
			array(
				'question' => esc_html__( 'Will we get any support during the hackathon?', 'hack' ),
				'answer'   => esc_html__( 'Our local mentors will be by your side throughout the hackathon online or face-to-face.', 'hack' ),
			),
		),
		'general'      => array(
			array(
				'question' => esc_html__( 'What is Mass Collaboration?', 'hack' ),
				'answer'   => sprintf( '<a href="%s" target="_blank">%s</a> %s', esc_url( 'https://blogs.gartner.com/anthony_bradley/2011/03/08/defining-social-media-mass-collaboration-is-its-unique-value/' ), esc_html__( 'Mass collaboration', 'hack' ), esc_html__( 'is the ability for large numbers of people, who may have no previous connection, to effectively and creatively work towards a common goal. The greater diversity of skill represented on each team, the higher the team’s capacity to successfully tackle the task at hand. #HACK levels mass collaboration up to a global scale, connecting like-minded believers across every region of the world through expertise and prayer.', 'hack' ) ),
			),
			array(
				'question' => esc_html__( 'What is unique about Indigitous Hack?', 'hack' ),
				'answer'   => esc_html__( 'Indigitous #HACK uniquely gathers devoted Christ-followers with a desire to extend God’s purposes in our local cities and connects us around the world. #HACK offers Christians in each host city an opportunity to make new friends and learn from one another while addressing critical issues through digital solutions. #HACK invites people to meet the needs of the church, missions and society on a local and global scale, expanding the Great Commission through new innovative platforms and digital strategies.', 'hack' ),
			),
			array(
				'question' => esc_html__( 'What is a Hackathon?', 'hack' ),
				'answer'   => sprintf( '<a href="%s" target="_blank">%s</a> %s', esc_url( 'https://medium.com/hackathons-anonymous/wtf-is-a-hackathon-92668579601' ), esc_html__( 'Hackathons', 'hack' ), esc_html__( 'provide a hands-on event for self-expression and creativity for computer programmers, developers, engineers, user experience, project managers and others through technology. People with technical backgrounds come together, form teams around a problem or idea, and collaboratively code a unique solution from scratch - these generally take shape in the form of websites, mobile apps, and robots.', 'hack' ) ),
			),
		),
	);

	if ( $section && isset( $faqs[ $section ] ) ) {
		return $faqs[ $section ];
	}

	return $faqs;
}
