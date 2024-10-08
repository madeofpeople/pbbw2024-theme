<?php
/**
 * Action hooks and filters.
 *
 * A place to put hooks and filters that aren't necessarily template tags.
 *
 * @package BPBW
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @author WebDevStudios
 *
 * @param array $classes Classes for the body element.
 *
 * @return array Body classes.
 */
function bpbw_body_classes( $classes ) {
	// Allows for incorrect snake case like is_IE to be used without throwing errors.
	global $is_IE, $is_edge, $is_safari;

	// If it's IE, add a class.
	if ( $is_IE ) {
		$classes[] = 'ie';
	}

	// If it's Edge, add a class.
	if ( $is_edge ) {
		$classes[] = 'edge';
	}

	// If it's Safari, add a class.
	if ( $is_safari ) {
		$classes[] = 'safari';
	}

	// Are we on mobile?
	if ( wp_is_mobile() ) {
		$classes[] = 'mobile';
	}

	// Give all pages a unique class.
	if ( is_page() ) {
		$classes[] = 'page-' . basename( get_permalink() );
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds "no-js" class. If JS is enabled, this will be replaced (by javascript) to "js".
	$classes[] = 'no-js';

	// Add a `has-sidebar` class if we're using the sidebar template.
	if ( is_page_template( 'template-sidebar-right.php' ) ) {
		$classes[] = 'has-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'bpbw_body_classes' );

/**
 * Flush out the transients used in bpbw_categorized_blog.
 *
 * @author WebDevStudios
 *
 * @return bool Whether or not transients were deleted.
 */
function bpbw_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return false;
	}

	// Like, beat it. Dig?
	return delete_transient( 'bpbw_categories' );
}
add_action( 'delete_category', 'bpbw_category_transient_flusher' );
add_action( 'save_post', 'bpbw_category_transient_flusher' );

/**
 * Filter social post content
 *
 * @link https://developer.wordpress.org/reference/hooks/the_content/
 *
 * @param string $content
 * @return string $content
 */
function bpbw_content( string $content ) {
	if( 'social' === get_post_type() && ( $message = get_post_meta( get_the_id(), 'message', true ) ) ) {
		$content = $message;
	}
	return $content;
}
add_filter( 'the_content', 'bpbw_content' );

/**
 * Customize "Read More" string on <!-- more --> with the_content();
 *
 * @author WebDevStudios
 *
 * @return string Read more link.
 */
function bpbw_content_more_link() {
	return ' <a class="more-link" href="' . get_permalink() . '">' . esc_html__( 'Read More', 'bpbw' ) . '...</a>';
}
add_filter( 'the_content_more_link', 'bpbw_content_more_link' );

/**
 * Customize the [...] on the_excerpt();
 *
 * @author WebDevStudios
 *
 * @param string $more The current $more string.
 *
 * @return string Read more link.
 */
function bpbw_excerpt_more( $more ) {
	return sprintf( ' <a class="more-link" href="%1$s">%2$s</a>', get_permalink( get_the_ID() ), esc_html__( 'Read more...', 'bpbw' ) );
}
add_filter( 'excerpt_more', 'bpbw_excerpt_more' );

/**
 * Filters WYSIWYG content with the_content filter.
 *
 * @author Jo Murgel
 *
 * @param string $content content dump from WYSIWYG.
 *
 * @return string|bool Content string if content exists, else empty.
 */
function bpbw_get_the_content( $content ) {
	return ! empty( $content ) ? $content : false;
}
add_filter( 'the_content', 'bpbw_get_the_content', 20 );

/**
 * Remove specific block
 *
 * @param string $content
 * @return string $content
 */
function bpbw_remove_block( $content ) {
	$name = 'site-functionality/page-header';
	if ( ! has_block( $name ) ) {
		return $content;
	}
	global $post;
	$blocks = parse_blocks( $post->post_content );
	$return = '';
	foreach ( $blocks as $block ) {
		if ( $name !== $block['blockName'] ) {
			$return .= render_block( $block );
		} else {
			$return .= '<!--' . $name . '-->';
		}
	}
	return $return;
}
// add_filter( 'the_content', 'bpbw_remove_block', 20 );

/**
 * Enable custom mime types.
 *
 * @author WebDevStudios
 *
 * @param array $mimes Current allowed mime types.
 *
 * @return array Mime types.
 */
function bpbw_custom_mime_types( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';

	return $mimes;
}
add_filter( 'upload_mimes', 'bpbw_custom_mime_types' );

/**
 * Add SVG definitions to footer.
 *
 * @author WebDevStudios
 */
function bpbw_include_svg_icons() {
	// Define SVG sprite file.
	$svg_icons = get_template_directory() . '/build/images/icons/sprite.svg';

	// If it exists, include it.
	if ( file_exists( $svg_icons ) ) {
		echo '<div class="svg-sprite-wrapper">';
		require_once $svg_icons;
		echo '</div>';
	}
}
add_action( 'wp_footer', 'bpbw_include_svg_icons', 9999 );

/**
 * Display the customizer header scripts.
 *
 * @author Greg Rickaby
 *
 * @return string Header scripts.
 */
function bpbw_display_customizer_header_scripts() {
	// Check for header scripts.
	$scripts = get_theme_mod( 'bpbw_header_scripts' );

	// None? Bail...
	if ( ! $scripts ) {
		return false;
	}

	// Otherwise, echo the scripts!
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
	echo bpbw_get_the_content( $scripts );
}
add_action( 'wp_head', 'bpbw_display_customizer_header_scripts', 999 );

/**
 * Display the customizer footer scripts.
 *
 * @author Greg Rickaby
 *
 * @return string Footer scripts.
 */
function bpbw_display_customizer_footer_scripts() {
	// Check for footer scripts.
	$scripts = get_theme_mod( 'bpbw_footer_scripts' );

	// None? Bail...
	if ( ! $scripts ) {
		return false;
	}

	// Otherwise, echo the scripts!
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
	echo bpbw_get_the_content( $scripts );
}
add_action( 'wp_footer', 'bpbw_display_customizer_footer_scripts', 999 );

/**
 * Adds OG tags to the head for better social sharing.
 *
 * @author Corey Collins
 *
 * @return string An empty string if Yoast is not found, otherwise a block of meta tag HTML.
 */
function bpbw_add_og_tags() {
	// Bail if Yoast is installed, since it will handle things.
	if ( class_exists( 'WPSEO_Options' ) || defined( 'THE_SEO_FRAMEWORK_PRESENT' ) ) {
		return '';
	}

	// Set a post global on single posts. This avoids grabbing content from the first post on an archive page.
	if ( is_singular() ) {
		global $post;
	}

	// Get the post content.
	$post_content = ! empty( $post ) ? $post->post_content : '';

	// Strip all tags from the post content we just grabbed.
	$default_content = ( $post_content ) ? wp_strip_all_tags( strip_shortcodes( $post_content ) ) : $post_content;

	// Set our default title.
	$default_title = get_bloginfo( 'name' );

	// Set our default URL.
	$default_url = get_permalink();

	// Set our base description.
	$default_base_description = ( get_bloginfo( 'description' ) ) ? get_bloginfo( 'description' ) : esc_html__( 'Visit our website to learn more.', 'bpbw' );

	// Set the card type.
	$default_type = 'article';

	// Get our custom logo URL. We'll use this on archives and when no featured image is found.
	$logo_id    = get_theme_mod( 'custom_logo' );
	$logo_image = ( $logo_id ) ? wp_get_attachment_image_src( $logo_id, 'full' ) : '';
	$logo_url   = ( $logo_id ) ? $logo_image[0] : '';

	// Set our final defaults.
	$card_title            = $default_title;
	$card_description      = $default_base_description;
	$card_long_description = $default_base_description;
	$card_url              = $default_url;
	$card_image            = $logo_url;
	$card_type             = $default_type;

	// Let's start overriding!
	// All singles.
	if ( is_singular() ) {

		if ( has_post_thumbnail() ) {
			$card_image = get_the_post_thumbnail_url();
		}
	}

	// Single posts/pages that aren't the front page.
	if ( is_singular() && ! is_front_page() ) {

		$card_title            = get_the_title() . ' - ' . $default_title;
		$card_description      = ( $default_content ) ? wp_trim_words( $default_content, 53, '...' ) : $default_base_description;
		$card_long_description = ( $default_content ) ? wp_trim_words( $default_content, 140, '...' ) : $default_base_description;
	}

	// Categories, Tags, and Custom Taxonomies.
	if ( is_category() || is_tag() || is_tax() ) {

		$term_name      = single_term_title( '', false );
		$card_title     = $term_name . ' - ' . $default_title;
		$specify        = ( is_category() ) ? esc_html__( 'categorized in', 'bpbw' ) : esc_html__( 'tagged with', 'bpbw' );
		$queried_object = get_queried_object();
		$card_url       = get_term_link( $queried_object );
		$card_type      = 'website';

		// Translators: get the term name.
		$card_long_description = sprintf( esc_html__( 'Posts %1$s %2$s.', 'bpbw' ), $specify, $term_name );
		$card_description      = $card_long_description;
	}

	// Search results.
	if ( is_search() ) {

		$search_term = get_search_query();
		$card_title  = $search_term . ' - ' . $default_title;
		$card_url    = get_search_link( $search_term );
		$card_type   = 'website';

		// Translators: get the search term.
		$card_long_description = sprintf( esc_html__( 'Search results for %s.', 'bpbw' ), $search_term );
		$card_description      = $card_long_description;
	}

	if ( is_home() ) {

		$posts_page = get_option( 'page_for_posts' );
		$card_title = get_the_title( $posts_page ) . ' - ' . $default_title;
		$card_url   = get_permalink( $posts_page );
		$card_type  = 'website';
	}

	// Front page.
	if ( is_front_page() ) {

		$front_page = get_option( 'page_on_front' );
		$card_title = ( $front_page ) ? get_the_title( $front_page ) . ' - ' . $default_title : $default_title;
		$card_url   = get_home_url();
		$card_type  = 'website';
	}

	// Post type archives.
	if ( is_post_type_archive() ) {

		$post_type_name = get_post_type();
		$card_title     = $post_type_name . ' - ' . $default_title;
		$card_url       = get_post_type_archive_link( $post_type_name );
		$card_type      = 'website';
	}

	// Media page.
	if ( is_attachment() ) {
		$attachment_id = get_the_ID();
		$card_image    = ( wp_attachment_is_image( $attachment_id ) ) ? wp_get_attachment_image_url( $attachment_id, 'full' ) : $card_image;
	}

	?>
	<meta property="og:title" content="<?php echo esc_attr( $card_title ); ?>" />
	<meta property="og:description" content="<?php echo esc_attr( $card_description ); ?>" />
	<meta property="og:url" content="<?php echo esc_url( $card_url ); ?>" />
	<?php if ( $card_image ) : ?>
		<meta property="og:image" content="<?php echo esc_url( $card_image ); ?>" />
	<?php endif; ?>
	<meta property="og:site_name" content="<?php echo esc_attr( $default_title ); ?>" />
	<meta property="og:type" content="<?php echo esc_attr( $card_type ); ?>" />
	<meta name="description" content="<?php echo esc_attr( $card_long_description ); ?>" />
	<?php
}
add_action( 'wp_head', 'bpbw_add_og_tags' );

/**
 * Removes or Adjusts the prefix on category archive page titles.
 *
 * @author Corey Collins
 *
 * @param string $block_title The default $block_title of the page.
 *
 * @return string The updated $block_title.
 */
function bpbw_remove_archive_title_prefix( $block_title ) {
	// Get the single category title with no prefix.
	$single_cat_title = single_term_title( '', false );

	if ( is_category() || is_tag() || is_tax() ) {
		return esc_html( $single_cat_title );
	}

	return $block_title;
}
add_filter( 'get_the_archive_title', 'bpbw_remove_archive_title_prefix' );

/**
 * Disables wpautop to remove empty p tags in rendered Gutenberg blocks.
 *
 * @author Corey Collins
 */
function bpbw_disable_wpautop_for_gutenberg() {
	// If we have blocks in place, don't add wpautop.
	if ( has_filter( 'the_content', 'wpautop' ) && has_blocks() ) {
		remove_filter( 'the_content', 'wpautop' );
	}
}
add_filter( 'init', 'bpbw_disable_wpautop_for_gutenberg', 9 );

/**
 * Move Template Location for Getwid Custom Post Type
 *
 * @param string $template
 * @return string $template
 */
function bpbw_getwid_get_template_part( $template ) {
	$templates = array(
		'instagram',
		'post-carousel',
	);
	$mailchimp = array(
		'mailchimp/mailchimp',
		'mailchimp/field-email',
		'mailchimp/field-first-name',
		'mailchimp/field-last-name',
	);
	foreach ( $templates as $file ) {
		if ( strpos( $template, $file ) ) {
			$template = get_template_directory() . "/template-parts/blocks/{$file}/post.php";
		}
	}
	foreach ( $mailchimp as $file ) {
		if ( strpos( $template, $file ) ) {
			$template = get_template_directory() . "/template-parts/blocks/{$file}.php";
		}
	}
	return $template;
}
add_filter( 'getwid/core/get_template_part', 'bpbw_getwid_get_template_part' );

/**
 * apply_filters( 'sbi_use_theme_templates', $settings['customtemplates'] )
 * /Users/pea/Development/Local Sites/bpbw/app/public/wp-content/plugins/instagram-feed/inc/if-functions.php
 */

 /**
  * Filter services data
  *
  * @param array   $services_data
  * @param string  $service
  * @param integer $post_id
  * @return array $services_data
  */
function bpbw_social_block_services( array $services_data, string $service, int $post_id ) {
	$permalink  = rawurlencode( \get_post_meta( $post_id, 'link', true ) );
	$card_title = esc_attr( get_the_title( $post_id ) );
	$title      = rawurlencode( \get_post_meta( $post_id, 'message', true ) );
	$message    = esc_attr( \get_post_meta( $post_id, 'message', true ) );

	$services_data['facebook']['label'] = sprintf( __( 'Share %s on Facebook', 'site-functionality' ), $card_title );
	$services_data['twitter']['label'] = sprintf( __( 'View %s on Twitter', 'site-functionality' ), $card_title );
	$services_data['instagram']['label'] = sprintf( __( 'View %s on Instagram', 'site-functionality' ), $card_title );
	$services_data['download']['label'] = sprintf( __( 'Download %s images as a File', 'site-functionality' ), $card_title );

	return $services_data;
}
add_filter( 'site_functionality/social_block/services', 'bpbw_social_block_services', 10, 3 );
