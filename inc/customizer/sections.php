<?php
/**
 * Customizer sections.
 *
 * @package BPBW
 */

/**
 * Register the section sections.
 *
 * @author WebDevStudios
 * @param object $wp_customize Instance of WP_Customize_Class.
 */
function bpbw_customize_sections( $wp_customize ) {

	// Register a social links section.
	$wp_customize->add_section(
		'bpbw_social_links_section',
		[
			'title'       => esc_html__( 'Social Media', 'bpbw' ),
			'description' => esc_html__( 'Links here power the display_social_network_links() template tag.', 'bpbw' ),
			'priority'    => 90,
			'panel'       => 'site-options',
		]
	);

	// Register a header section.
	$wp_customize->add_section(
		'bpbw_header_section',
		[
			'title'    => esc_html__( 'Header Customizations', 'bpbw' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);


	// Register a footer section.
	$wp_customize->add_section(
		'bpbw_footer_section',
		[
			'title'    => esc_html__( 'Footer Customizations', 'bpbw' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);
}
add_action( 'customize_register', 'bpbw_customize_sections' );
