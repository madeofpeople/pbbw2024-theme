<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BPBW
 */

$currlang = get_locale();
$page_url = get_permalink();
$lang_attributes = get_language_attributes();
$body_class_appentions = array('site-wrapper');
?>


<!DOCTYPE html>


<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- preload webfonts https://web.dev/codelab-preload-web-fonts/ -->
	<link rel="preload" href="/wp-content/themes/bpbw-theme/build/fonts/acumin-extra-condensed--bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="/wp-content/themes/bpbw-theme/build/fonts/pragmatica--bold.woff2" as="font" type="font/woff2" crossorigin>

	<?php wp_head(); ?>

</head>

<body <?php body_class( $body_class_appentions ); ?>>

	<div class="body-open">
		<?php wp_body_open(); ?>
	</div>

	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'bpbw' ); ?></a>

	<main id="main" class="container site-main">

		<header id="site__header" class="site-header <?php if ( is_active_sidebar( 'header-notice' ) ) : ?>has-notice<?php endif; ?>">

			<?php
			if ( is_active_sidebar( 'header-notice' ) ) :
				dynamic_sidebar( 'header-notice' );
			endif;
			?>

			<div class="nav--primary">

				<div class="site-branding">


					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<?php

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo esc_html( $description ); ?></p>
					<?php endif; ?>

				</div><!-- .site-branding -->

				<button type="button" class="menu__toggle" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open Menu', 'wd_s' ); ?>"></button>

				<nav id="site-navigation" class="main-navigation navigation-menu" aria-label="<?php esc_attr_e( 'Main Navigation', 'bpbw' ); ?>">
					<button type="button" class="menu__inner-toggle" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open Menu', 'wd_s' ); ?>"></button>
					<?php

						wp_nav_menu(
							array(
								'fallback_cb'    => false,
								'theme_location' => 'primary',
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'menu dropdown container',
								'container'      => false,
							)
						);

					?>
				</nav><!-- #site-navigation-->


				<div class="menu__underlay"></div>

			</div><!-- .container -->

		</header><!-- .site-header-->


		<?php do_action( 'after_header' ); ?>
