<?php
/**
 * Custom scripts and styles.
 *
 * @package BPBW
 */

/**
 * Enqueue scripts and styles.
 *
 * @author WebDevStudios
 */
function bpbw_scripts() {
	$asset_file_path = dirname( __DIR__ ) . '/build/index.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = [
			'version'      => '1.0.0',
			'dependencies' => [ 'wp-polyfill' ],
		];
	}

	// Register styles & scripts.
	wp_enqueue_style( 'bpbw-google-fonts', esc_url( 'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Source+Sans+Pro&display=swap' ), [], $asset_file['version'] );
	wp_enqueue_style( 'bpbw', get_stylesheet_directory_uri() . '/build/index.css', [], $asset_file['version'] );
	wp_enqueue_script( 'bpbw-scripts', get_stylesheet_directory_uri() . '/build/index.js', $asset_file['dependencies'], $asset_file['version'], true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bpbw_scripts' );

/**
 * Load Block Scripts
 *
 * @return void
 */
function bpbw_editor_assets() {
	$asset_file_path = dirname( __DIR__ ) . '/build/blocks.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = [
			'version'      => '1.0.0',
			'dependencies' => [ 'wp-polyfill' ],
		];
	}

	wp_enqueue_script(
		'bpbw',
		get_template_directory_uri() . '/build/blocks.js',
		$asset_file['dependencies'],
		$asset_file['version'],
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'bpbw_editor_assets' );

/**
 * Inline Critical CSS.
 *
 * @author Corey Collins
 */
function bpbw_critical_css() {
	?>
	<style>
		<?php include get_stylesheet_directory() . '/build/critical.css'; ?>
	</style>
	<?php
}
add_action( 'wp_head', 'bpbw_critical_css', 1 );

/**
 * Preload styles and scripts.
 *
 * @author WebDevStudios
 */
function bpbw_preload_scripts() {
	$asset_file_path = dirname( __DIR__ ) . '/build/index.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = [
			'version'      => '1.0.0',
			'dependencies' => [ 'wp-polyfill' ],
		];
	}

	?>
	<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/build/index.css?ver=<?php echo esc_html( $asset_file['version'] ); ?>" as="style">
	<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/build/index.js?ver=<?php echo esc_html( $asset_file['version'] ); ?>" as="script">
	<?php
}
add_action( 'wp_head', 'bpbw_preload_scripts', 1 );

/**
 * Preload assets.
 *
 * @author Corey Collins
 */
function bpbw_preload_assets() {
	?>
	<?php if ( bpbw_get_custom_logo_url() ) : ?>
		<link rel="preload" href="<?php echo esc_url( bpbw_get_custom_logo_url() ); ?>" as="image">
	<?php endif; ?>
	<?php
}
add_action( 'wp_head', 'bpbw_preload_assets', 1 );
