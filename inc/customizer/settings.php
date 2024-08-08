<?php
/**
 * Customizer settings.
 *
 * @package BPBW
 */

/**
 * Register additional scripts.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function bpbw_customize_additional_scripts( $wp_customize ) {

	$wp_customize->add_setting(
		'default_featured_image',
		array(
			'default'   => '',
			'transport' => 'refresh',
			'type'      => 'option',
		)
	);

}
add_action( 'customize_register', 'bpbw_customize_additional_scripts' );

/**
 * Register a social icons setting.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function bpbw_customize_social_icons( $wp_customize ) {
	// Create an array of our social links for ease of setup.
	$social_networks = array(
		'facebook',
		'instagram',
		'twitter',
		'linkedin',
		'reddit',
	);

	// Loop through our networks to setup our fields.
	foreach ( $social_networks as $network ) {

		// Register a setting.
		$wp_customize->add_setting(
			'bpbw_' . $network . '_link',
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url',
			)
		);

		// Create the setting field.
		$wp_customize->add_control(
			'bpbw_' . $network . '_link',
			array(
				'label'   => /* translators: the social network name. */ sprintf( esc_attr__( '%s URL', 'bpbw' ), ucwords( $network ) ),
				'section' => 'bpbw_social_links_section',
				'type'    => 'text',
			)
		);
	}
}

add_action( 'customize_register', 'bpbw_customize_social_icons' );

/**
 * Register copyright text setting.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function bpbw_customize_copyright_text( $wp_customize ) {
	// Register a setting.
	$wp_customize->add_setting(
		'bpbw_copyright_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	// Create the setting field.
	$wp_customize->add_control(
		new Text_Editor_Custom_Control(
			$wp_customize,
			'bpbw_copyright_text',
			array(
				'label'       => esc_attr__( 'Copyright Text', 'bpbw' ),
				'description' => esc_attr__( 'The copyright text will be displayed in the footer. Basic HTML tags allowed.', 'bpbw' ),
				'section'     => 'bpbw_footer_section',
				'type'        => 'textarea',
			)
		)
	);
}

add_action( 'customize_register', 'bpbw_customize_copyright_text' );
