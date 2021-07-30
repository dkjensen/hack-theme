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
			0 => array(
				'question' => esc_html__( 'How much is the registration?', 'hack' ),
				'answer'   => esc_html__( 'It depends on the city in which you are participating. Please fill out the #HACK interest form, and we will gladly connect you to the closest #HACK city.', 'hack' ),
			),
			1 => array(
				'question' => esc_html__( 'Is #HACK only for people who can code?', 'hack' ),
				'answer'   => esc_html__( '#HACK welcomes anyone who wants to collaborate on mission-focused, technology projects with long-term impact. While our work focuses on multiple technology platforms, you don’t have to be a programmer to get involved. We need designers, photographers, writers, project managers, social media gurus - creative thinkers of all types! The most important skill is the ability to work as a team and find ways to problem-solve. Also, while Indigitous #HACK is explicitly Christian, participants from any (or no) faith background are welcomed warmly.', 'hack' ),
			),
		),
		'partners'     => array(),
		'leaders'      => array(
			0 => array(
				'question' => esc_html__( 'Will we get any support during the hackathon?', 'hack' ),
				'answer'   => esc_html__( 'Absolutely. Our regional support team will be available to help you with preparation beforehand and during the event.', 'hack' ),
			),
		),
		'general'      => array(
			0 => array(
				'question' => esc_html__( 'What is a Hackathon?', 'hack' ),
				'answer'   => esc_html__( 'A hackathon is a hands-on event for computer programmers, developers, engineers, user experience specialists, project managers and others. People with technical backgrounds come together, form teams around a problem or idea, and collaboratively develop a unique solution.', 'hack' ),
			),
			1 => array(
				'question' => esc_html__( 'What is unique about the Indigitous #HACK?', 'hack' ),
				'answer'   => esc_html__( 'The Indigitous #HACK gathers those with a desire to bring the gospel to where it needs to go. #HACK offers participants an opportunity to meet the needs of the mission, the church and society on a local and global scale. We learn from one another and make new friends while fulfilling the Great Commission through new innovative platforms and digital strategies.', 'hack' ),
			),
			2 => array(
				'question' => esc_html__( 'What is a mass collaboration?', 'hack' ),
				'answer'   => esc_html__( 'Mass collaboration is a form of a collective action where large numbers of people, who may have no previous connection, effectively and creatively work towards a common goal. The greater diversity of skill represented on each team, the higher the team’s capacity to successfully tackle the task at hand. #HACK levels mass collaboration on a global scale, connecting like-minded believers across every region of the world through expertise and prayer.', 'hack' ),
			),
		),
	);

	if ( $section && isset( $faqs[ $section ] ) ) {
		return $faqs[ $section ];
	}

	return $faqs;
}
