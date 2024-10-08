<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BPBW
 */

?>

<!-- before header -->
<?php

	get_header();

	if ( \has_block( 'site-functionality/page-header' ) ) :
		?>
		<?php bpbw_header(); ?>
		<?php
	endif;


	if ( have_posts() ) :
		if ( is_home() && ! is_front_page() ) :
			?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>

			<?php
		endif;

		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/**
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			if ( 'post' === get_post_type() ) :
				get_template_part( 'template-parts/content', get_post_format() );
			else :
				get_template_part( 'template-parts/content', get_post_type() );
			endif;

		endwhile;

		bpbw_display_numeric_pagination();

	else :
		get_template_part( 'template-parts/content', 'none' );
	endif;
	?>

	<!-- after header -->

	<?php
	if ( is_active_sidebar( 'content-bottom' ) ) :
		get_sidebar( 'content-bottom' );
	endif;
	?>

<?php get_footer(); ?>
