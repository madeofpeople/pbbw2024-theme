<?php
/**
 * Register Block Patterns.
 *
 * @package BPBW
 */
namespace bpbw\Inc\Blocks\Patterns;

function include_files() {
	return array(
		'inc/blocks/patterns/patterns.php', // Patterns
	);
}

foreach ( include_files() as $include ) {
	require \trailingslashit( \get_template_directory() ) . $include;
}
