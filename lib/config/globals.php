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
				'question' => esc_html__( 'What is unique about the Indigitous #HACK?', 'hack' ),
				'answer'   => esc_html__( 'The Indigitous #HACK gathers those with a desire to bring the gospel to where it needs to go. #HACK offers participants an opportunity to meet the needs of the mission, the church and society on a local and global scale. We learn from one another and make new friends while fulfilling the Great Commission through new innovative platforms and digital strategies.', 'hack' ),
			),
			array(
				'question' => esc_html__( 'Is #HACK only for people who can code?', 'hack' ),
				'answer'   => esc_html__( '#HACK welcomes anyone who wants to collaborate on mission-focused, technology projects with long-term impact. While our work focuses on multiple technology platforms, you don’t have to be a programmer to get involved. We need designers, photographers, writers, project managers, social media gurus – creative thinkers of all types! The most important skill is the ability to work as a team and find ways to problem-solve. Also, while Indigitous #HACK is explicitly Christian, participants from any (or no) faith background are welcomed warmly.', 'hack' ),
			),
		),
	);

	if ( $section && isset( $faqs[ $section ] ) ) {
		return $faqs[ $section ];
	}

	return $faqs;
}
