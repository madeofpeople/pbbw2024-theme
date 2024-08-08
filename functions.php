<?php
/**
 * BPBW functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BPBW
 */

/**
 * Get all the include files for the theme.
 *
 * @author WebDevStudios
 */
function bpbw_get_theme_include_files() {
	return [
		'inc/setup.php', // Theme set up. Should be included first.
		'inc/compat.php', // Backwards Compatibility.
		'inc/blocks/index.php', // Block functions.
		'inc/customizer/customizer.php', // Customizer additions.
		'inc/extras.php', // Custom functions that act independently of the theme templates.
		'inc/helpers.php', // Custom helper functions for this theme.
		'inc/hooks.php', // Load custom filters and hooks.
		'inc/security.php', // WordPress hardening.
		'inc/scripts.php', // Load styles and scripts.
		'inc/template-tags.php', // Custom template tags for this theme.
	];
}

foreach ( bpbw_get_theme_include_files() as $include ) {
	require trailingslashit( get_template_directory() ) . $include;
}


function remove_block_style() {
    // Register the block editor script.
    wp_register_script( 'remove-block-style', get_stylesheet_directory_uri() . '/remove-block-styles.js', [ 'wp-blocks', 'wp-edit-post' ] );
    // register block editor script.
    register_block_type( 'remove/block-style', [
        'editor_script' => 'remove-block-style',
    ] );
}
add_action( 'init', 'remove_block_style' );
