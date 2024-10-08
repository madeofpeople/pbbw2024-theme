<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BPBW
 */

?>

	<article <?php post_class( 'post-container' ); ?>>

		<header class="entry-header">
			<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php bpbw_post_date(); ?>
					<?php bpbw_post_author(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. */
							esc_html__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bpbw' ),
							[
								'span' => [
									'class' => [],
								],
							]
						),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					)
				);

				wp_link_pages(
					[
						'before' => '<div class="page-links">' . esc_attr__( 'Pages:', 'bpbw' ),
						'after'  => '</div>',
					]
				);
				?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php bpbw_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->
