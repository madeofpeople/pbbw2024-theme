<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BPBW
 */

?>

	<section class="no-results not-found">

		<header class="site__header">
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'bpbw' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
				<p>
				<?php
				printf(
					wp_kses(
						/* translators: the edit post url */
						esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bpbw' ),
						[
							'a' => [
								'href' => [],
							],
						]
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
				?>
				</p>
			<?php elseif ( is_search() ) : ?>
				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bpbw' ); ?></p>
				<?php get_search_form(); ?>
			<?php else : ?>
				<p><?php esc_html_e( 'It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'bpbw' ); ?></p>
				<?php get_search_form(); ?>
			<?php endif; ?>
		</div><!-- .page-content -->

	</section><!-- .no-results -->
