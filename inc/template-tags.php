<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package BPBW
 */

/**
 * Prints HTML with date information for the current post.
 *
 * @author WebDevStudios
 *
 * @param array $args Configuration args.
 */
function bpbw_post_date( $args = array() ) {

	// Set defaults.
	$defaults = array(
		'date_text'   => esc_html__( 'Published', 'bpbw' ),
		'date_format' => get_option( 'date_format' ),
	);

	// Parse args.
	$args = wp_parse_args( $args, $defaults );
	?>
	<span class="posted-on">
		<?php echo esc_html( $args['date_text'] . ' ' ); ?>
		<time class="entry-date published" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_time( $args['date_format'] ) ); ?></time>
	</span>
	<?php
}

/**
 * Prints HTML with author information for the current post.
 *
 * @author WebDevStudios
 *
 * @param array $args Configuration args.
 */
function bpbw_post_author( $args = array() ) {

	// Set defaults.
	$defaults = array(
		'author_text' => esc_html__( 'by', 'bpbw' ),
	);

	// Parse args.
	$args = wp_parse_args( $args, $defaults );

	?>
	<span class="post-author">
		<?php echo esc_html( $args['author_text'] . ' ' ); ?>
		<span class="author vcard">
			<a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a>
		</span>
	</span>

	<?php
}

/**
 * Prints HTML with date information for the current post.
 *
 * @author Pea
 *
 * @param array $args Configuration args.
 */
function bpbw_source( $args = array() ) {
	$defaults = array();
	$args     = wp_parse_args( $args, $defaults );

	if ( $source = get_post_meta( get_the_ID(), 'source', true ) ) :
		printf(
			'<div class="entry-meta post-source"><a href="%s"%s rel="author%s">%s</a></div><!-.post-source->',
			esc_url( $source['url'] ),
			( $target = $source['target'] ) ? ' target="' . $target . '"' : '',
			( $target = $source['target'] ) ? ' nofollow noopener' : '',
			esc_html( $source['title'] )
		);
	endif;
}

/**
 * Render Page Header
 *
 * @param array $args
 * @return void
 */
function bpbw_header_image( $size = 'full', $args = array() ) {
	if ( ! is_singular() ) {
		return;
	}
	global $post;
	$post_id = ( array_key_exists( 'post_id', $args ) ) ? (int) $args['post_id'] : $post->ID;

	$defaults = array(
		'class' => 'page__header',
	);
	$args     = wp_parse_args( $args, $defaults );

	if ( $image_id = bpbw\get_header_image_id( $args = array( 'post_id' => $post_id ) ) ) :
		?>
		<?php echo wp_get_attachment_image( $image_id, $size, false, $args ); ?>
		<?php
	endif;
}

/**
 * Render Page Navigation
 *
 * @param string $name
 * @param string $content
 * @return void
 */
function bpbw_page_nav( $name = 'site-functionality/page-nav', $content = null ) {
	global $post;
	$content = ( $content ) ? $content : $post->post_content;
	if ( $block   = bpbw\get_block( $name, $content ) ) {
		echo render_block( $block );
	}
}

/**
 * Render Page Header
 *
 * @param array $args
 * @return void
 */
function bpbw_header( $name = 'site-functionality/page-header', $content = null ) {
	global $post;
	$content = ( $content ) ? $content : $post->post_content;

	if ( $block = bpbw\get_block( $name, $content ) ) :
		echo apply_filters( 'the_content', render_block( $block ) );
	endif;
}

/**
 * Prints HTML with meta information for the categories, tags and comments.
 *
 * @author WebDevStudios
 */
function bpbw_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_attr__( ', ', 'bpbw' ) );
		if ( $categories_list && bpbw_categorized_blog() ) {

			/* translators: the post category */
			printf( '<span class="cat-links">' . esc_attr__( 'Posted in %1$s', 'bpbw' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_attr__( ', ', 'bpbw' ) );
		if ( $tags_list ) {

			/* translators: the post tags */
			printf( '<span class="tags-links">' . esc_attr__( 'Tagged %1$s', 'bpbw' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_attr__( 'Leave a comment', 'bpbw' ), esc_attr__( '1 Comment', 'bpbw' ), esc_attr__( '% Comments', 'bpbw' ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'bpbw' ),
			wp_kses_post( get_the_title( '<span class="screen-reader-text">"', '"</span>', false ) )
		),
		'<span class="edit-link">',
		'</span>'
	);
}

/**
 * Render the conent
 *
 * @param array $excluded_blocks
 * @return void
 */
function bpbw_the_content( $excluded_blocks = array() ) {
	global $post;
	$content = $post->post_content;
	$blocks = parse_blocks( $post->post_content );
	if ( empty( $excluded_blocks ) || empty( $blocks ) ) {
		echo apply_filters( 'the_content', $content );
	}
	$content = '';
	foreach ( $blocks as $block ) {
		if ( ! in_array( $block['blockName'], $excluded_blocks ) ) {
			remove_filter( 'the_content', 'wpautop' );
			$content .= apply_filters( 'the_content', render_block( $block ) );
			add_filter( 'the_content', 'wpautop' );
		} else {
			$content .= '<!--' . $block['blockName'] . '-->';
		}
	}
	echo $content;
}

/**
 * Display SVG Markup.
 *
 * @author WebDevStudios
 *
 * @param array $args The parameters needed to get the SVG.
 */
function bpbw_display_svg( $args = array() ) {
	$kses_defaults = wp_kses_allowed_html( 'post' );

	$svg_args = array(
		'svg'   => array(
			'class'           => true,
			'aria-hidden'     => true,
			'aria-labelledby' => true,
			'role'            => true,
			'xmlns'           => true,
			'width'           => true,
			'height'          => true,
			'viewbox'         => true, // <= Must be lower case!
			'color'           => true,
			'stroke-width'    => true,
		),
		'g'     => array( 'color' => true ),
		'title' => array(
			'title' => true,
			'id'    => true,
		),
		'path'  => array(
			'd'     => true,
			'color' => true,
		),
		'use'   => array(
			'xlink:href' => true,
		),
	);

	$allowed_tags = array_merge(
		$kses_defaults,
		$svg_args
	);

	echo wp_kses(
		bpbw_get_svg( $args ),
		$allowed_tags
	);
}

/**
 * Return SVG markup.
 *
 * @author WebDevStudios
 *
 * @param array $args The parameters needed to display the SVG.
 *
 * @return string Error string or SVG markup.
 */
function bpbw_get_svg( $args = array() ) {
	// Make sure $args are an array.
	if ( empty( $args ) ) {
		return esc_attr__( 'Please define default parameters in the form of an array.', 'bpbw' );
	}

	// Define an icon.
	if ( false === array_key_exists( 'icon', $args ) ) {
		return esc_attr__( 'Please define an SVG icon filename.', 'bpbw' );
	}

	// Set defaults.
	$defaults = array(
		'color'        => '',
		'icon'         => '',
		'title'        => '',
		'desc'         => '',
		'stroke-width' => '',
		'height'       => '',
		'width'        => '',
	);

	// Parse args.
	$args = wp_parse_args( $args, $defaults );

	// Figure out which title to use.
	$block_title = ( $args['title'] ) ? $args['title'] : $args['icon'];

	// Generate random IDs for the title and description.
	$random_number  = wp_rand( 0, 99999 );
	$block_title_id = 'title-' . sanitize_title( $block_title ) . '-' . $random_number;
	$desc_id        = 'desc-' . sanitize_title( $block_title ) . '-' . $random_number;

	// Set ARIA.
	$aria_hidden     = ' aria-hidden="true"';
	$aria_labelledby = '';

	if ( $args['title'] && $args['desc'] ) {
		$aria_labelledby = ' aria-labelledby="' . $block_title_id . ' ' . $desc_id . '"';
		$aria_hidden     = '';
	}

	// Set SVG parameters.
	$color        = ( $args['color'] ) ? ' color="' . $args['color'] . '"' : '';
	$stroke_width = ( $args['stroke-width'] ) ? ' stroke-width="' . $args['stroke-width'] . '"' : '';
	$height       = ( $args['height'] ) ? ' height="' . $args['height'] . '"' : '';
	$width        = ( $args['width'] ) ? ' width="' . $args['width'] . '"' : '';

	// Start a buffer...
	ob_start();
	?>

	<svg
	<?php
		echo bpbw_get_the_content( $height ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
		echo bpbw_get_the_content( $width ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
		echo bpbw_get_the_content( $color ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
		echo bpbw_get_the_content( $stroke_width ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
	?>
		class="icon <?php echo esc_attr( $args['icon'] ); ?>"
	<?php
		echo bpbw_get_the_content( $aria_hidden ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
		echo bpbw_get_the_content( $aria_labelledby ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
	?>
		role="img">
		<title id="<?php echo esc_attr( $block_title_id ); ?>">
			<?php echo esc_html( $block_title ); ?>
		</title>

		<?php
		// Display description if available.
		if ( $args['desc'] ) :
			?>
			<desc id="<?php echo esc_attr( $desc_id ); ?>">
				<?php echo esc_html( $args['desc'] ); ?>
			</desc>
		<?php endif; ?>

		<?php
		// Use absolute path in the Customizer so that icons show up in there.
		if ( is_customize_preview() ) :
			?>
			<use xlink:href="<?php echo esc_url( get_parent_theme_file_uri( '/build/images/icons/sprite.svg#' . esc_html( $args['icon'] ) ) ); ?>"></use>
		<?php else : ?>
			<use xlink:href="#<?php echo esc_html( $args['icon'] ); ?>"></use>
		<?php endif; ?>

	</svg>

	<?php
	// Get the buffer and return.
	return ob_get_clean();
}

/**
 * Trim the title length.
 *
 * @author WebDevStudios
 *
 * @param array $args Parameters include length and more.
 *
 * @return string The title.
 */
function bpbw_get_the_title( $args = array() ) {
	// Set defaults.
	$defaults = array(
		'length' => 12,
		'more'   => '...',
	);

	// Parse args.
	$args = wp_parse_args( $args, $defaults );

	// Trim the title.
	return wp_kses_post( wp_trim_words( get_the_title( get_the_ID() ), $args['length'], $args['more'] ) );
}

/**
 * Limit the excerpt length.
 *
 * @author WebDevStudios
 *
 * @param array $args Parameters include length and more.
 *
 * @return string The excerpt.
 */
function bpbw_get_the_excerpt( $args = array() ) {

	// Set defaults.
	$defaults = array(
		'length' => 20,
		'more'   => '...',
		'post'   => '',
	);

	// Parse args.
	$args = wp_parse_args( $args, $defaults );

	// Trim the excerpt.
	return wp_trim_words( get_the_excerpt( $args['post'] ), absint( $args['length'] ), esc_html( $args['more'] ) );
}

/**
 * Echo the copyright text saved in the Customizer.
 *
 * @author WebDevStudios
 */
function bpbw_display_copyright_text() {
	// Grab our customizer settings.
	$copyright_text = get_theme_mod( 'bpbw_copyright_text' );

	if ( $copyright_text ) {
		echo bpbw_get_the_content( do_shortcode( $copyright_text ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
	}
}

/**
 * Display the social links saved in the customizer.
 *
 * @author WebDevStudios
 */
function bpbw_display_social_network_links() {
	// Create an array of our social links for ease of setup.
	// Change the order of the networks in this array to change the output order.
	$social_networks = array(
		'facebook',
		'instagram',
		'linkedin',
		'twitter',
	);

	?>
	<ul class="flex social-icons menu">
		<?php
		// Loop through our network array.
		foreach ( $social_networks as $network ) :

			// Look for the social network's URL.
			$network_url = get_theme_mod( 'bpbw_' . $network . '_link' );

			// Only display the list item if a URL is set.
			if ( ! empty( $network_url ) ) :
				?>
				<li class="social-icon <?php echo esc_attr( $network ); ?> mr-2">
					<a href="<?php echo esc_url( $network_url ); ?>">
						<?php
						bpbw_display_svg(
							array(
								'icon'   => $network . '-square',
								'width'  => '24',
								'height' => '24',
							)
						);
						?>
						<span class="screen-reader-text">
						<?php
						/* translators: the social network name */
						printf( esc_attr__( 'Link to %s', 'bpbw' ), ucwords( esc_html( $network ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
						?>
						</span>
					</a>
				</li><!-- .social-icon -->
				<?php
			endif;
		endforeach;
		?>
	</ul><!-- .social-icons -->
	<?php
}

/**
 * Displays numeric pagination on archive pages.
 *
 * @author WebDevStudios
 *
 * @param array    $args  Array of params to customize output.
 * @param WP_Query $query The Query object; only passed if a custom WP_Query is used.
 */
function bpbw_display_numeric_pagination( $args = array(), $query = null ) {
	if ( ! $query ) {
		global $wp_query;
		$query = $wp_query;
	}

	// Make the pagination work on custom query loops.
	$total_pages = isset( $query->max_num_pages ) ? $query->max_num_pages : 1;

	// Set defaults.
	$defaults = array(
		'prev_text' => '&laquo;',
		'next_text' => '&raquo;',
		'mid_size'  => 4,
		'total'     => $total_pages,
	);

	// Parse args.
	$args = wp_parse_args( $args, $defaults );

	if ( null === paginate_links( $args ) ) {
		return;
	}
	?>

	<nav class="container pagination-container" aria-label="<?php esc_attr_e( 'numeric pagination', 'bpbw' ); ?>">
		<?php echo paginate_links( $args ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK. ?>
	</nav>

	<?php
}

/**
 * Displays the mobile menu with off-canvas background layer.
 *
 * @author WebDevStudios
 *
 * @return string An empty string if no menus are found at all.
 */
function bpbw_display_mobile_menu() {
	// Bail if no mobile or primary menus are set.
	if ( ! has_nav_menu( 'mobile' ) && ! has_nav_menu( 'primary' ) ) {
		return '';
	}

	// Set a default menu location.
	$menu_location = 'primary';

	// If we have a mobile menu explicitly set, use it.
	if ( has_nav_menu( 'mobile' ) ) {
		$menu_location = 'mobile';
	}
	?>
	<div class="off-canvas-screen"></div>
	<nav class="off-canvas-container" aria-label="<?php esc_attr_e( 'Mobile Menu', 'bpbw' ); ?>" aria-hidden="true" tabindex="-1">
		<?php
		// Mobile menu args.
		$mobile_args = array(
			'theme_location'  => $menu_location,
			'container'       => 'div',
			'container_class' => 'off-canvas-content',
			'container_id'    => '',
			'menu_id'         => 'site-mobile-menu',
			'menu_class'      => 'mobile-menu',
			'fallback_cb'     => false,
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		);

		// Display the mobile menu.
		wp_nav_menu( $mobile_args );
		?>
	</nav>
	<?php
}

/**
 * Display the comments if the count is more than 0.
 *
 * @author WebDevStudios
 */
function bpbw_display_comments() {
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
}
