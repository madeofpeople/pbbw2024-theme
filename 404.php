<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BPBW
 */

get_header(); ?>

	<main id="main" class="container site-main">

		<section class="error-404 not-found">
			<header class="site__header">
				<h1 class="page-title"><?php esc_html_e( "Sorry, this page doesn't exist.", 'bpbw' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">

				<p><?php esc_html_e( "It seems we can't find what you're looking for. Perhaps searching can help.", 'bpbw' ); ?></p>

				<?php get_search_form(); ?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

		<?php
		if ( is_active_sidebar( 'content-bottom' ) ) :
			get_sidebar( 'content-bottom' );
		endif;
		?>

	</main><!-- #main -->

<?php get_footer(); ?>
