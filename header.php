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
						<svg class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1080 238.73" xmlns:v="https://vecta.io/nano"><path d="M514.53 193.3c-.34-3.02-1.63-8.3-2-11.31-.36-2.88-.81-5.74-1.23-8.68l-5.73.65-4.13.48c-1.09.12-1.7-.5-1.35-1.5.53-1.48.25-2.96.07-4.42-.39-3.18-.87-6.34-1.32-9.51l-.49-3.05c-.1-.57.13-.8.67-.86l12.55-1.32 12.55-1.37 11.74-1.23 12.95-1.42 15.12-1.8c2.36-.26 4.74-.36 7.11-.54-1.77-.78-3.17-1.98-4.44-3.38-1.04-1.16-1.68-2.5-1.67-4.05.01-1.27.07-2.57.36-3.8.47-1.99 2.02-3.28 3.61-4.36 1.35-.92 2.85-1.71 4.62-1.55.1 0 .27 0 .3-.06.32-.62.66-1.24.89-1.89.06-.19-.23-.5-.33-.71l-4.03 2.44c-.46.28-.91.44-1.44.08-.14-.09-.5 0-.69.13l-4.8 3.23c-.58.39-1.19.78-1.84 1.03-1.17.45-1.63.24-2.31-.92l-1.8 1.02c-1.3.75-2.7 1.18-4.19 1.19-1.71.01-2.23-.96-1.39-2.45.3-.52.63-1.02.95-1.52.27-.43.61-.79.32-1.4-.1-.21.11-.62.27-.88.29-.45.66-.85 1.05-1.33-1.7.51-3.32 1.04-4.96 1.46-1.31.33-2.66.55-4 .74-.46.07-1.01.02-1.43-.17-1-.46-1.97-1-2.9-1.59-1.6-1.01-1.85-2.15-.91-3.87-.83-.31-1.73-.57-1.75-1.71-.02-.98.42-1.72 1.14-2.32-1.94-1.86-1.69-3.4.71-5.13-.22-.63-.63-1.24-.59-1.81.13-1.81.77-2.35 2.46-2.49 4.25-.37 8.31.55 12.38 1.56 1.04.26 2.13.44 3.2.43 3.31-.01 6.63-.11 9.94-.22.34-.01.74-.2.99-.44l6.69-6.33c.51-.49.95-1.04 1.43-1.56-2.76-.31-5.29-1.22-7.06-3.72-1.21.04-2.52.24-3.65-.69-1.46-1.2-1.84-2.04-1.3-3.28-.04-.03-.07-.09-.11-.1-2.01-.44-2.14-.65-1.91-2.68.09-.86.11-1.74.07-2.6-.08-1.63-1.33-3.29-3.16-3.31-2.6-.03-4.51-1.3-5.87-3.41-.81-1.26-1.79-2.28-3.02-3.14-1.57-1.09-2.57-2.57-2.96-4.51-.15-.77-.67-1.55-1.21-2.16-1.3-1.46-2.74-2.79-4.07-4.22-.57-.61-1.06-1.31-1.55-1.99-.44-.63-.53-1.3.01-1.97-1.17-.61-2.4-1.09-3.43-1.84-1.33-.97-2.54-2.1-3.71-3.27-.4-.4-.47-1.11-.72-1.67-.09-.21-.2-.42-.36-.58-.82-.87-1.68-1.7-2.48-2.59-.44-.49-.8-1.09-.44-1.78.34-.66 1-.54 1.59-.55h.86c-.43-.29-.73-.45-.98-.67l-5.6-4.84c-.22-.19-.44-.44-.55-.7-.14-.38-.36-.9-.21-1.16.16-.27.72-.43 1.1-.42.69.02 1.37.2 1.78.27l-2.52-2.82c-.4-.45-1.07-.87-.72-1.58.38-.76 1.13-.44 1.75-.33 1.23.22 2.45.45 3.75.56-.43-.27-.87-.53-1.28-.82-.62-.44-1.26-.86-1.81-1.38-.21-.21-.32-.72-.21-.99.07-.2.59-.35.89-.32 5.29.61 10.5 1.67 15.59 3.21 6.22 1.89 12.25 4.25 17.71 7.91l12.59 8.24 10.02 6.55c1.04.7 1.96 1.6 3.11 2.55l-.61-4.07c-.08-.59-.13-1.19-.08-1.78.07-.85.52-1.48 1.5-1.74-3.14-1.8-2.79-4.79-2.72-7.62.05-1.98.18-2 2.62-1.51-.32-.57-.67-1.04-.87-1.57-.43-1.11-.89-2.22-1.13-3.37-.33-1.6.48-2.21 2-1.62.87.34 1.72.74 2.57 1.11l-1.54-4.66c-.11-.36-.1-1.02.1-1.16.3-.2.88-.18 1.25-.02.95.39 1.84.91 2.89 1.28l-.81-1.32c-.5-.84-1.06-1.65-1.48-2.53-.17-.36-.23-1-.02-1.25s.85-.32 1.24-.23c1.98.5 3.7 1.52 5.36 2.68 4.21 2.96 7.43 6.81 10.08 11.18 1.77 2.93 3.87 5.63 6.09 8.23.77.91 1.67 1.72 2.58 2.49 2.74 2.34 3.4 5.37 2.96 8.77-.26 1.99-.36 4.03-.88 5.95-.8 2.9-1.8 5.76-2.93 8.55-.88 2.19-1.25 4.42-1.44 6.73-.03.36-.14.94-.36 1.02-.6.22-1.35.45-1.92.29-1.34-.38-1.43-.8-1.28-2.27.47-4.43 2.5-8.34 4.06-12.41.8-2.1 1.77-4.17 2.26-6.34.72-3.19.26-6.25-2-8.87-1.84-2.14-3.58-4.37-5.39-6.53-.16-.19-.73-.31-.87-.19-.46.42-.99.91-1.16 1.47-.44 1.39-.32 2.78.36 4.12.15.29.21.78.07 1.03-.11.19-.63.22-.95.18-1.56-.2-2.76.47-3.42 1.89-.69 1.49-.49 2.97.03 4.44.16.46.37.91.59 1.34.67 1.33.46 1.56-1.01 1.75-2.89.39-5.48 1.4-7.03 4.11-.13.23-.23.61-.13.81 1.32 2.67 1.49 5.66 2.38 8.45.7 2.2 1.32 4.43 2.14 6.58 1.47 3.82 3.1 4.28 6.59 4.36.86.02 1.72-.18 2.59-.27.32-.03.65-.1.97-.08.88.07 1.27.83.82 1.58-.15.25-.37.47-.59.66-2.55 2.14-3.7 5-3.98 8.21-.33 3.79-.51 7.59-.73 11.38-.02.33.15.68.23 1.02.37-.11.81-.14 1.09-.36.63-.51 1.3-1.04 1.74-1.71 1.28-1.93 3.22-3.06 5.06-4.29 2.04-1.35 2.12-1.3 1.3-3.53-1.21-3.27-.67-6.3 1.13-9.18.97-1.54 2.36-2.61 4.01-3.33.26-.11.6-.19.87-.13 2.29.44 4.63.72 6.84 1.43 2.39.77 4.22 2.42 4.83 4.99.23.95.13 2 .07 3-.04.64-.59.63-1.07.5-.81-.21-1.53-.01-2.42.46l2.55.25c.91.12 1.59.64 1.92 1.47.37.93.63 1.91.84 2.88a1.33 1.33 0 0 1-.34 1.08c-.15.14-.7-.04-1-.2-.38-.2-.69-.52-1.02-.8-1.23-1.03-2.59-1.46-4.04-.56-1.52.93-2.93 2.06-4.48 2.94-2.66 1.51-5.37 2.97-8.12 4.32-4.48 2.21-9 4.34-13.54 6.44-3.03 1.4-6.27 1.92-9.6 1.87-1.38-.02-2.76 0-4.18 0 .54 2.5.34 4.74-.58 6.89-.87 2.05-3.21 3.01-5.3 2.23-.3-.11-.61-.24-.89-.39-.83-.43-1.54-.76-2.49-.01-.45.36-1.39.16-2.1.1-.85-.07-1.72-.46-2.53-.36-1.76.22-2.58 1.63-2.15 3.51.54 2.34 1.71 4.26 3.94 5.39 4.03-2.38 6.52-1.32 6.85 2.99l3.46-.33 9.55-.91 8.96-1.08 8.42-.92 10.12-1.09 9.88-1.04 11.41-1.24 4.59-.55c.88-.09 1.52.37 1.69 1.21.29 1.46.58 2.93.66 4.41.22 4.17-.24 8.3-.96 12.4-.02.1 0 .21 0 .41l1.94-.16 4.6-.51c1.15-.16 1.96.2 2.24 1.33.36 1.42.63 2.86.8 4.32l1.23 11.58c.11 1.09-.31 1.79-1.28 2.32-.24.13-.35.48-.59.63-.36.24-.76.53-1.15.55-.83.05-1.68-.03-2.52-.1-3.01-.27-5.95.35-8.91.72l-2.76.36M532.27 52.06c.29.36.55.76.89 1.08 1.38 1.31 2.99 2.26 4.76 2.93l8.53 3.23c.57.22 1.46.35 1.11 1.26-.3.81-1.07.47-1.64.31l-8.67-2.55c-.42-.12-.85-.18-1.5-.32l.78 1.14c.99 1.46 2.6 2.01 4.09 2.67 2.35 1.05 4.77 1.95 7.14 2.95.28.12.46.49.68.75-.29.13-.59.38-.88.36-.95-.05-1.88-.23-2.83-.3-.33-.02-.67.16-1 .25.23.3.45.61.7.89.1.11.29.14.44.2 3.43 1.46 7.11 1.89 10.73 2.58.94.18 1.87.5 2.76.85.22.08.45.53.42.77s-.36.53-.62.64c-.37.15-.79.16-1.2.2l-4.14.35c-.74.07-1.03.54-.86 1.26.17.71.6 1.17 1.31 1.28a12.85 12.85 0 0 0 1.86.16c1.14.03 2.29-.02 3.42.04.24.01.46.34.7.52-.17.21-.3.5-.52.61-.41.2-.88.26-1.31.43-.56.21-1.1.46-1.65.69.02.1.04.19.05.29.47.08.94.24 1.41.24 1.82.03 3.64.07 5.46-.01 2.87-.12 5.75-.31 8.62-.5 1.19-.08 2.37-.28 3.56-.35.26-.01.53.31.8.47-.26.3-.48.79-.79.86-1.32.29-2.67.46-4.01.66l-8.78 1.33c-.74.12-1.47.39-2.14.73-.26.13-.42.6-.48.95-.02.11.42.41.68.44.67.08 1.36.16 2.01.06 3.24-.45 6.39-1.22 9.46-2.36.32-.12.71-.23 1.03-.17s.79.31.83.54c.04.26-.26.77-.52.86L566 83.82c-.74.28-1.49.65-2.11 1.14s-.76 1.22-.31 1.97c.1 0 .19.02.26 0 3.08-.98 6.16-1.94 8.94-3.67 1.01-.63 2.07-1.19 3.12-1.75.45-.24 1.03-.51 1.35.12.31.6-.19.94-.63 1.24-.42.29-.87.56-1.28.88-2.12 1.66-2.76 3.99-2.64 6.51.09 1.78 1.27 2.94 2.92 3.58.87.34.97.74.38 1.46-.12.15-.25.29-.37.43-1.26 1.47-1.21 3.09-.46 4.73.77 1.68 2.17 2.54 4 2.32 1.85-.23 3.66-.73 5.5-1.05a52.77 52.77 0 0 1 3.95-.54c.25-.02.54.3.81.46-.21.2-.39.5-.64.58a18.44 18.44 0 0 1-2.32.62c-3.97.78-7.03 2.95-9.59 6.02-2.26 2.72-4.97 4.98-8.05 6.69-1.73.96-2.65 2.31-3.12 4.12-.23.88-.07 1.66.58 2.24a41.63 41.63 0 0 0 3.05 2.43c.63.46 1.38.66 2.1.27l.96-3.8c.06-.22.47-.56.55-.52.38.19 1.15-.1 1.07.69-.06.67-.18 1.34-.38 1.98-.42 1.38-.36 1.65.78 2.48.33.24.67.47.98.74.85.75 1.43 1.62 1.29 2.84-.03.21.11.5.27.67.63.65.71 1.42.16 2.2-.21.3-.48.56-.8.93.6.11 1.1.24 1.61.27.96.05 1.48-.46 1.46-1.42-.03-1.37-.41-2.64-1.29-3.7-.71-.85-1.55-1.6-2.26-2.46-.31-.37-.71-.97-.6-1.31.32-1.01.82-1.99 1.38-2.9.27-.44.85-.66 1.36-.28.53.4.33.93.08 1.4-.4.74-.82 1.46-1.29 2.27.36.15.74.47 1.03.41 1.71-.37 3.45-.7 5.1-1.29 1.37-.49 2.61-1.34 3.92-1.98 2.13-1.05 4.13-2.26 5.88-3.91 3.03-2.86 5.46-6.06 6.59-10.18.88-3.21 1.4-6.55 3.16-9.47.02-.04 0-.1 0-.15-1.6-.18-2.73.63-3.76 1.72-.29.3-.74.45-1.11.67-.23-.4-.56-.77-.66-1.2-.22-.92-.26-1.88-.46-2.81l-2.93-13.36c-.55-2.28-1.13-4.61-2.67-6.5-3.25-4.02-6.96-7.6-11.11-10.64-7.33-5.38-14.64-10.82-22.68-15.16-2.01-1.08-3.97-2.25-6.04-3.21-3.67-1.7-7.51-2.96-11.45-3.93-.87-.21-1.72-.52-2.59-.7-.59-.12-1.27-.1-1.51.59-.19.54.26.79.72.98l11.17 4.72c1.09.47 2.14 1.06 3.15 1.69.28.18.34.7.51 1.07-.37.06-.79.26-1.09.14a43.24 43.24 0 0 1-3.57-1.55c-3.56-1.72-7.19-3.18-11.1-3.9-.68-.12-1.31-.15-1.55.6-.22.69.18 1.21.79 1.52 1.42.74 2.83 1.5 4.29 2.16 2.22 1.01 4.48 1.93 6.72 2.91.53.23 1.31.48 1.05 1.2-.25.7-.98.35-1.5.19-1.6-.51-3.21-1-4.79-1.59-2.56-.96-5.23-1.39-8.03-1.67zm56.98 130.17l34.54-4.66c11.53-1.26 23.02-2.96 34.64-3.46 0-.16.01-.32 0-.48-.17-2.38-.27-4.77-.55-7.14-.28-2.31-.75-4.6-1.13-6.9-.09-.56-.37-.73-.95-.67-2 .21-4 .35-6 .53l-7.86.73-10.12 1.04c-2.32.22-4.66.29-6.98.54l-13.75 1.59-8.66.95-9.45 1.2-5.91.76 2.17 15.99zm-86-10.83l74.94-6.71c-.04-.37-.05-.62-.1-.85l-2.88-12.88c-.3-1.32-.33-1.27-1.7-1.12l-11.58 1.27-13.1 1.55c-5.3.68-10.58 1.62-15.96 1.56-.27 0-.54.06-.8.1-1.26.18-2.52.42-3.78.54l-6.66.53-14.98 1.6-5.62.62 2.21 13.79zm75.43-4.29l-4.18.48-7.22.58-8.84.84-14.63 1.02c-3.79.3-7.57.71-11.36 1.09l-11.84 1.22-5.55.59c-.23 5.93 1.27 11.56 1.9 17.3.36 0 .6.02.84 0l8.01-.89 9.63-1.07c3.34-.38 6.7-.68 10.02-1.21 6.6-1.04 13.24-1.71 19.9-2.23 4.81-.38 9.6-1.07 14.4-1.61.56-.06.79-.27.73-.88l-.93-9.08c-.23-2.05-.57-4.08-.87-6.15zm69.99-24.62c-.48-.13-.9-.36-1.31-.34-.94.04-1.88.23-2.83.32l-9.4.91-12.14 1.38-11.73 1.39-10.76 1.21c-2.4.23-4.82.31-7.23.46l-5.26.37c-1.42.13-2.82.34-4.05.5l3.14 15.14c.21 0 .56 0 .91-.05l7.29-.77 13.61-1.35 12.15-1.26 11.99-1.19 14.09-1.43c.56-.05.85-.26.93-.8.2-1.29.51-2.57.55-3.86.09-2.74.04-5.49.04-8.23v-2.39zm-55.03-99.21c.22 1.41.12 2.76 1.21 3.66l6.59 5.31c.66.53.96 1.23.58 1.56-.61.53-1.09.05-1.58-.29-1.76-1.18-3.47-2.44-5.3-3.49-1.21-.7-2.57-1.14-3.9-1.62-.67-.24-1.27.21-1.14.9.13.72.39 1.46.78 2.07.64 1 1.76 1.4 2.8 1.85 1.44.62 2.98 1.09 4.05 2.32.21.24.36.71.27.99-.07.2-.56.33-.87.38-.25.04-.54-.07-.78-.17-.98-.4-1.95-.82-2.92-1.25-1.14-.51-2.24-1.1-3.41-1.54-.98-.37-1.78.33-1.75 1.38.02.86.52 1.46 1.14 1.88 1.65 1.09 3.35 2.08 5.04 3.11.76.47 1.56.89 2.3 1.39.18.12.2.5.29.75-.27.05-.55.19-.8.14-.34-.06-.64-.29-.97-.4-1.16-.38-2.3-.82-3.48-1.1-.97-.23-1.83.49-1.83 1.46 0 .78.2 1.53.92 1.98.62.39 1.27.72 1.92 1.07.53.29.77.78.53 1.29-.14.3-.6.55-.96.63-.37.08-.79-.13-1.19-.12-.35.01-.69.16-1.04.25.1.31.11.7.31.93.41.47.93.83 1.37 1.27.86.87.97 1.84.29 2.5l1.46 1.29c1.22-3.11 3.22-5.02 6.71-4.93-.63-1.9-1.51-3.62-.71-5.51.78-1.83 2.26-2.93 4-3.71-.93-3.67.63-7.01 3.26-7.49-2.8-4.85-6.15-9.17-10.8-12.46.01.63.01 1.31.34 1.75a19.8 19.8 0 0 0 2.47 2.78c1.31 1.23 2.76 2.29 4.05 3.54.81.78 1.46 1.74 2.12 2.67.3.42.31.98-.19 1.3s-.9.06-1.28-.34c-1.51-1.6-2.99-3.22-4.57-4.75-1.47-1.43-3.32-2.3-5.32-3.25zm33.49 58.53c-.01-1.06-.87-1.95-1.88-1.97-1.01-.01-1.93.82-1.9 1.73.04 1.14.85 2.01 1.84 1.99 1.16-.03 1.94-.74 1.93-1.76zm-48.18 24.95c.71.65.86 1.72 1.82 2.19-.12-.52-.39-1.01-.25-1.22.16-.24.68-.27 1.06-.32.43-.06.9.06 1.29-.09 1.18-.46 2.17-.38 2.92.86.07-.62.11-1.16.05-1.68-.02-.19-.31-.5-.48-.5-2.12 0-4.29-.46-6.4.76zm1.85 3.15c.13.88 2.01 1.75 2.66 1.22.23-.18.39-.54.41-.84.01-.15-.32-.36-.52-.5-.89-.65-1.72-.2-2.56.12zm25.81 72.95c-1.81.01-3.34-.61-4.55-1.99-2.17-2.48-4.1-5.12-5.48-8.14l-2.44-4.86c-.57-1.15-.13-1.89 1.12-2.02l5.33-.67c1.41-.17 1.89.15 2.5 1.38 1.71 3.44 3.73 6.67 6.47 9.42 1.01 1.01 1.67 2.27 1.43 3.74-.26 1.58-1.89 2.93-3.49 3.11-.3.03-.6.03-.89.05zm-5.62-13.82c0-.7-.7-1.37-1.45-1.37-.76 0-1.46.66-1.46 1.37 0 .75.72 1.43 1.5 1.42.74 0 1.4-.67 1.41-1.42zm1.77 6.94c.72 0 1.33-.69 1.35-1.54.01-.64-.66-1.24-1.42-1.27-.73-.03-1.3.57-1.28 1.36.02.75.66 1.45 1.35 1.45z" fill="#333"/><path d="M589.96 141.7c.57-2.5-.18-4.75-.56-7.04-.06-.33.03-.72.16-1.04l1.17-2.75c2.83 1.03 5.27 6.35 4.63 10.26l-5.4.57z"/><path d="M532.24 52.01c2.81.28 5.47.71 8.03 1.67l4.79 1.59c.52.17 1.25.51 1.5-.19.26-.72-.51-.97-1.05-1.2l-6.72-2.91-4.29-2.16c-.6-.31-1.01-.83-.79-1.52.24-.75.87-.73 1.55-.6 3.91.72 7.55 2.18 11.1 3.9a46.92 46.92 0 0 0 3.57 1.55c.3.11.72-.09 1.09-.14-.16-.37-.23-.89-.51-1.07-1.01-.63-2.06-1.22-3.15-1.69l-11.17-4.72c-.46-.19-.91-.44-.72-.98.24-.69.92-.71 1.51-.59.88.18 1.72.49 2.59.7 3.93.97 7.77 2.23 11.45 3.93 2.06.96 4.03 2.12 6.04 3.21 8.04 4.34 15.35 9.78 22.68 15.16 4.14 3.04 7.86 6.62 11.11 10.64 1.53 1.9 2.12 4.22 2.67 6.5 1.07 4.43 1.98 8.9 2.93 13.36.2.93.25 1.89.46 2.81.1.43.43.8.66 1.2.38-.22.83-.37 1.11-.67 1.03-1.09 2.15-1.9 3.76-1.72 0 .05.02.12 0 .15-1.76 2.92-2.28 6.27-3.16 9.47-1.13 4.12-3.55 7.32-6.59 10.18-1.75 1.65-3.75 2.85-5.88 3.91-1.31.65-2.55 1.49-3.92 1.98-1.64.59-3.38.92-5.1 1.29-.29.06-.67-.25-1.03-.41l1.29-2.27c.25-.47.46-1-.08-1.4-.51-.38-1.1-.16-1.36.28-.55.92-1.05 1.89-1.38 2.9-.11.35.3.95.6 1.31.71.85 1.55 1.6 2.26 2.46.88 1.06 1.26 2.33 1.29 3.7.02.96-.5 1.47-1.46 1.42-.51-.03-1.01-.17-1.61-.27.32-.37.59-.63.8-.93.55-.78.46-1.55-.16-2.2-.16-.16-.29-.45-.27-.67.14-1.22-.43-2.09-1.29-2.84-.31-.27-.65-.5-.98-.74-1.14-.83-1.2-1.1-.78-2.48.2-.64.31-1.32.38-1.98.07-.79-.7-.5-1.07-.69-.08-.04-.49.3-.55.52-.35 1.25-.64 2.51-.96 3.8-.73.39-1.47.19-2.1-.27-1.05-.76-2.08-1.57-3.05-2.43-.66-.58-.82-1.36-.58-2.24.48-1.81 1.4-3.16 3.12-4.12 3.08-1.71 5.79-3.97 8.05-6.69 2.56-3.08 5.62-5.24 9.59-6.02.78-.15 1.56-.37 2.32-.62.25-.08.43-.38.64-.58-.27-.16-.56-.49-.81-.46-1.32.13-2.64.3-3.95.54-1.84.33-3.65.83-5.5 1.05-1.83.22-3.23-.64-4-2.32-.75-1.64-.81-3.26.46-4.73.12-.14.25-.28.37-.43.59-.72.49-1.12-.38-1.46-1.65-.65-2.83-1.81-2.92-3.58-.12-2.52.51-4.85 2.64-6.51.41-.32.85-.58 1.28-.88.44-.3.94-.64.63-1.24-.33-.64-.9-.36-1.35-.12-1.05.56-2.11 1.12-3.12 1.75-2.77 1.73-5.86 2.69-8.94 3.67-.07.02-.16 0-.26 0-.46-.75-.31-1.48.31-1.97s1.37-.86 2.11-1.14l6.96-2.49c.26-.1.56-.6.52-.86-.04-.23-.51-.48-.83-.54s-.7.05-1.03.17c-3.07 1.13-6.23 1.91-9.46 2.36-.66.09-1.35.02-2.01-.06-.25-.03-.69-.33-.68-.44.06-.34.22-.81.48-.95.67-.33 1.4-.61 2.14-.73l8.78-1.33c1.34-.2 2.69-.37 4.01-.66.31-.07.53-.56.79-.86-.27-.17-.54-.49-.8-.47-1.19.07-2.37.27-3.56.35l-8.62.5c-1.82.08-3.64.04-5.46.01-.47 0-.94-.16-1.41-.24-.02-.1-.04-.19-.05-.29.55-.23 1.09-.48 1.65-.69.43-.16.9-.23 1.31-.43.22-.11.35-.4.52-.61-.23-.18-.46-.5-.7-.52-1.14-.06-2.28-.01-3.42-.04a12.85 12.85 0 0 1-1.86-.16c-.71-.12-1.15-.58-1.31-1.28-.17-.72.12-1.19.86-1.26 1.38-.14 2.76-.22 4.14-.35.4-.04.83-.05 1.2-.2.26-.1.59-.39.62-.64.03-.24-.2-.69-.42-.77-.9-.35-1.82-.67-2.76-.85-3.62-.69-7.3-1.12-10.73-2.58-.15-.06-.34-.1-.44-.2-.26-.28-.47-.59-.7-.89.33-.09.68-.27 1-.25.95.06 1.88.24 2.83.3.29.02.59-.23.88-.36-.22-.26-.4-.63-.68-.75l-7.14-2.95c-1.49-.66-3.1-1.21-4.09-2.67l-.78-1.14c.65.14 1.08.2 1.5.32l8.67 2.55c.57.16 1.34.5 1.64-.31.34-.91-.54-1.04-1.11-1.26l-8.53-3.23c-1.77-.68-3.38-1.63-4.76-2.93-.34-.32-.59-.72-.89-1.08z" fill="#b8c1d3"/><path d="M589.22 182.17l-2.17-15.99 5.91-.76 9.45-1.2 8.66-.95 13.75-1.59 6.98-.54 10.12-1.04 7.86-.73 6-.53c.58-.06.86.11.95.67l1.13 6.9.55 7.14c.01.16 0 .32 0 .48-11.62.51-23.11 2.2-34.64 3.46-11.5 1.26-22.94 3.07-34.54 4.66z" fill="#bfc584"/><path d="M503.22 171.34l-2.21-13.79 5.62-.62 14.98-1.6 6.66-.53 3.78-.54c.27-.04.54-.1.8-.1 5.38.06 10.65-.87 15.96-1.56l13.1-1.55 11.58-1.27c1.36-.16 1.4-.2 1.7 1.12l2.88 12.88c.05.23.06.48.1.85l-74.94 6.71z" fill="#96cbcd"/><path d="M578.64 167.05l.87 6.15.93 9.08c.07.61-.17.82-.73.88-4.8.54-9.59 1.23-14.4 1.61-6.66.53-13.29 1.2-19.9 2.23-3.32.52-6.68.82-10.02 1.21l-9.63 1.07-8.01.89c-.24.03-.48 0-.84 0-.62-5.74-2.12-11.37-1.9-17.3l5.55-.59 11.84-1.22 11.36-1.09 14.63-1.02c2.95-.23 5.89-.58 8.84-.84l7.22-.58c1.35-.12 2.69-.31 4.18-.48z" fill="#bfc584"/><path d="M648.64 142.43v2.39l-.04 8.23c-.04 1.29-.36 2.58-.55 3.86-.08.53-.37.74-.93.8l-14.09 1.43-11.99 1.19-12.15 1.26-13.61 1.35-7.29.77c-.35.04-.7.04-.91.05l-3.14-15.14 4.05-.5 5.26-.37 7.23-.46c3.59-.35 7.18-.79 10.76-1.21l11.73-1.39 12.14-1.38 9.4-.91c.94-.09 1.88-.28 2.83-.32.41-.02.83.21 1.31.34z" fill="#96cbcd"/><path d="M593.61 43.22c2.01.95 3.85 1.81 5.32 3.25l4.57 4.75c.38.4.78.66 1.28.34.51-.32.49-.88.19-1.3-.66-.93-1.31-1.88-2.12-2.67l-4.05-3.54c-.9-.85-1.74-1.79-2.47-2.78-.33-.44-.33-1.12-.34-1.75 4.65 3.28 8 7.61 10.8 12.46-2.63.48-4.19 3.83-3.26 7.49-1.74.78-3.22 1.88-4 3.71-.8 1.89.08 3.61.71 5.51-3.49-.09-5.5 1.82-6.71 4.93l-1.46-1.29c.68-.66.57-1.63-.29-2.5-.44-.44-.96-.81-1.37-1.27-.2-.23-.21-.61-.31-.93.35-.09.69-.24 1.04-.25.39-.02.82.2 1.19.12.36-.08.81-.33.96-.63.24-.51 0-1-.53-1.29-.64-.35-1.29-.68-1.92-1.07-.72-.45-.93-1.2-.92-1.98 0-.97.86-1.69 1.83-1.46 1.18.28 2.33.72 3.48 1.1.33.11.63.34.97.4.25.05.53-.09.8-.14-.09-.26-.1-.63-.29-.75-.74-.5-1.53-.93-2.3-1.39-1.69-1.03-3.39-2.02-5.04-3.11-.63-.41-1.12-1.02-1.14-1.88-.02-1.05.78-1.75 1.75-1.38 1.16.44 2.27 1.03 3.41 1.54l2.92 1.25c.25.1.54.21.78.17.32-.05.81-.17.87-.38.09-.28-.06-.75-.27-.99-1.07-1.24-2.61-1.7-4.05-2.32-1.05-.45-2.17-.85-2.8-1.85a5.72 5.72 0 0 1-.78-2.07c-.12-.69.48-1.15 1.14-.9 1.32.48 2.69.92 3.9 1.62 1.83 1.06 3.54 2.31 5.3 3.49.5.33.98.81 1.58.29.37-.33.08-1.03-.58-1.56l-6.59-5.31c-1.09-.9-.98-2.25-1.21-3.66z" fill="#b8c1d3"/><path d="M627.1 101.75c.01 1.02-.77 1.73-1.93 1.76-.99.02-1.81-.85-1.84-1.99-.03-.91.89-1.74 1.9-1.73s1.87.91 1.88 1.97zm-48.18 24.96c2.11-1.22 4.28-.77 6.4-.76.17 0 .45.31.48.5.07.52.02 1.05-.05 1.68-.75-1.24-1.73-1.32-2.92-.86-.38.15-.86.03-1.29.09-.37.05-.9.08-1.06.32-.14.21.12.7.25 1.22-.96-.47-1.11-1.54-1.82-2.19zm1.86 3.14c.84-.31 1.67-.76 2.56-.12.2.15.53.35.52.5-.03.3-.19.66-.41.84-.65.53-2.53-.35-2.66-1.22zM601 189.03a1.49 1.49 0 0 1-1.41 1.42c-.78 0-1.5-.67-1.5-1.42 0-.71.7-1.37 1.46-1.37.75 0 1.46.68 1.45 1.37zm1.77 6.95c-.69 0-1.34-.7-1.35-1.45-.02-.79.55-1.39 1.28-1.36.76.03 1.43.63 1.42 1.27-.02.85-.63 1.55-1.35 1.54z" fill="#fff"/><g fill="#333"><path d="M61 94.32l.45.47v.47l.47-.47h2.36c.63 0 .93.79.89 2.36h.47c.04-.95.37-1.42 1-1.42s.93.47.89 1.42l3.34-.47 5.06.95 1.89-.47c2.41 0 4.26 1.26 5.56 3.78l-.5 3.31.44.47v.47l-1.03 2.84h-.47l.03-.95h-.47c-2.45 5.93-5.9 10.03-10.35 12.29l-7.68 3.31-.25 8.04.39 2.36c-.63 0-1.47 1.58-2.53 4.73l-.47.47h-.47l-3.73-1.89.61-3.78-1.36-1.89 1.17-6.62-.47-.47 1.72-8.98-.47-.47.5-.47h.95l-.06 1.89h.47l.08-2.36-.42-1.42h.95l.06-2.36-.92-.95-.06 1.89h-.47c.07-2-.82-3.58-2.67-4.73l-.39-2.84.08-1.89c4.13-1.69 6.21-2.79 6.23-3.31l.03-.47-.92-.95-.47.47-.44-1.89.5-.47h.47zm-3.06 21.75l-.03.47.45.47-.47.47-.06.95h.95l.11-2.36h-.95zm19.22-9.93c-1 1.78-5.03 4.46-12.1 8.04l-.47.47v.47h.95c4.65-1.43 8.69-4.42 12.1-8.98h-.47zm-12.04 6.62h.95c4.06-1.71 7.62-4.54 10.68-8.51h-1.42c-6.32.43-9.5 1.37-9.54 2.84l-.67 5.67zm33.03-16.77h5.67c6.62 1.24 9.93 4.08 9.93 8.51v2.84l-4.73 6.62h.47l4.73-4.26v.95c-1.61 3.6-3.66 5.96-6.15 7.09l-2.84.95v1.89c.69 0 4 4.1 9.93 12.29 1.26.52 2.52 1.78 3.78 3.78v.47l-2.36-1.89v.47c1.58 1.67 2.36 2.93 2.36 3.78h-.47l-2.36 1.42h-.47l-.95-1.42-.47.47h-.47c-6.3-5.15-10.72-10.36-13.24-15.6l-2.36-4.73c-1.11 0-1.74 1.89-1.89 5.67.2 3.15.05 5.07-.47 5.76-.93.76-1.08 1.52-.47 2.28v.95H93.9c-.63 0-.95-.63-.95-1.89h-.47c0 1.26-.59 1.73-1.78 1.42l-2.09-2.78.56-4.31v-1.89l2.84-13.24h.47v1.89h.47l2.36-9.93c-.63 0-.95.63-.95 1.89h-.47v-.95h-2.84v-.47c0-.63.95-1.1 2.84-1.42v-.47h-.95l-2.84.95h-.47c0-.63.63-.95 1.89-.95v-.47c-1.26 0-1.89-.47-1.89-1.42l8.51-4.25zm-6.62 19.86v1.89H92v-1.89h-.47zm.95-6.15h.47v1.89h-.47v-1.89zm.95-4.25h.47v1.42l-.47 1.89h-.47v-1.42l.47-1.89zm5.2 7.56h.47c4.95-2.37 8.42-4.89 10.4-7.56v-.95c0-1.08-1.89-2.18-5.67-3.31l-2.84.95-2.36 10.87zm7.09 17.02v.47l1.89 1.89c-.61-1.43-1.24-2.22-1.89-2.36zm3.78-22.69l-2.36 3.31h.47l2.36-2.84v-.47h-.47zm-1.42-6.15c.63 1.43 1.26 2.22 1.89 2.36v-.95l-1.89-1.42zm0 32.15v.47l1.89 1.42v-.47l-1.89-1.42zm2.84-29.31l-.47 2.36h.47l.47-.47v-1.89h-.47zm3.31 4.25h.95l-.47 1.42h-.47v-1.42zm17.4-11.87c-.07.95.52 1.42 1.78 1.42l.86 1.89-.5.47h.47c-2.26 6.67-3.64 14.4-4.14 23.17l-.17 2.84.47.47-.03.47-.5.47h.47l-.5.47.28 3.31-.06.95c-1.69 2.04-2.57 3.62-2.64 4.73h-1.89l-2.28-.95.67-3.31-1.81-1.89.86-7.09.47-8.51 1.03-1.42.11-1.89-.44-.47.03-.47h.95l.03-.47-.45-.47 1.92-8.98h-.47l.5-.47.14-2.84-.45-.47.03-.47 5.26-.47zm-6.76 36.41l-.14 2.36.97-.95.11-1.42h-.95zm.08-18.91l-.14 2.84h.47l.14-2.84h-.47zm.72-4.26l-.17 2.84h.47l.17-2.84h-.47zm.72-4.73l-.17 3.31h.47l.17-3.31h-.47z"/><use xlink:href="#B"/><use xlink:href="#C"/><use xlink:href="#D"/><use xlink:href="#E"/><path d="m327.54,94.07c.2.95,1.46,1.42,3.78,1.42l3.78,16.55h3.31v.47l-2.84.47v.47c.95,0,1.42.32,1.42.95h3.78v.47c0,.7-1.58,1.33-4.73,1.89l.95,2.84-.47,1.42.47,2.84-.47.47h.47l-.47.47.47,5.67v2.84l-.47-.47h-.47l1.42,7.09h-.95c0-.95-.32-1.42-.95-1.42v.47l.47,1.42h-.47l-.47-.47h-.47c0,.95-.32,1.42-.95,1.42l-2.36-8.04h-.47v1.89h-.47l-.95-5.67,1.42.95v-.47c-.26-2.84-.73-4.25-1.42-4.25l.47-.47v-1.42h-.95v1.42h-.47v-1.89l.47-.47h-.47l-.47.47v-1.89h.47l.47.47h.47l-.47-.47v-2.84l-10.4,2.36v.95l3.31-.95,1.89.47,2.36-.47v.95c-6.62,1.19-9.93,2.76-9.93,4.73-.83,3.47-1.78,5.67-2.84,6.62v.95h-1.42l-.47-.47h-.47v.47l-1.42-.95.95-2.84h-.47c-.95,0-1.42,1.26-1.42,3.78l-.95-.95.47-2.84-1.42-1.42,8.04-19.38h.47c0,.95.31,1.42.95,1.42l.47-2.36-.47.47h-.47v-1.89l.47-2.36.47.47h.47l-.47-.47v-.47l.95-1.89h.47l.47.47h.47v-.47c0-.63-.47-.95-1.42-.95l2.36-6.62h1.89l-.47.47v.47c2.19-1.26,4.24-1.89,6.15-1.89Zm-13.71,20.33l-.47,1.89h.47l.95-1.89h-.95Zm1.42-2.36l-.47.47v.95h.47l.47-1.42h-.47Zm2.84,1.89l-.47,1.89h.47l.47-.47v-1.42h-.47Zm2.36-6.15l-.95,3.31-.47-.47h-.47l.47,1.89h.47l1.42-4.26v-.47h-.47Zm4.26-2.84l-3.78,9.93h.95c3.15,0,4.88-.95,5.2-2.84l-1.89-7.09h-.47Zm-2.84,10.88v.47h.95c2.84-.32,4.25-.79,4.25-1.42h-.47l-4.73.95Zm6.62,10.4h.95v2.84h-.47l-.47-2.84Zm1.89,4.73v.95l1.42-.47v-.95l-1.42.47Zm4.73-1.42v.95l.47,1.89h.47v-.95l-.47-1.89h-.47Z"/><use xlink:href="#D" x="136.48"/><use xlink:href="#D" x="176.73"/><use xlink:href="#F"/><path d="M467.25 96.1h1.89l1.42.95 3.31-.47c5.47 0 10.51 3.15 15.13 9.46l2.36 4.73-.47.47.47 2.36v2.36c0 8.1-6.62 14.25-19.86 18.44l-4.73.47c0-.8-.63-1.27-1.89-1.42v1.89h-1.42v-2.84l-.47-.47.47-.47v-.47c-1.89-1.3-2.84-2.4-2.84-3.31.95-14.28 2.52-24.68 4.73-31.21h.47l.47.47.95-.95zm-4.73 36.41h.47v.47l-.95.95h-.47v-.47l.95-.95zm2.84-31.68L463 114.54v.47h.47l2.36-13.24v-.95h-.47zm2.36 28.84l.47 1.42h.95l.95-.95v-.47h-.47l-1.42.47-.47-.47zm5.2-25.53c0 .63-.63.95-1.89.95-1.26 5.75-2.21 12.37-2.84 19.86 1.83 0 6.56-1.58 14.18-4.73v-.47h-.95c2.52-2.58 3.78-5.26 3.78-8.04v-1.42c0-3.47-2.36-5.52-7.09-6.15h-5.2zm-1.42 25.06v.47h1.89l2.36-.95v-.47h-.47l-3.78.95zm10.87-25.06v.47l1.89.95v-.47l-1.42-.95h-.47zm0 22.22c.74-.11 1.84-1.06 3.31-2.84v-.47l-3.31 3.31zm2.84-8.51l-.95 1.89h.47l.95-1.89h-.47zm1.42-7.09l-.47 5.67h.95v-1.42l.47-1.89-.47-2.36h-.47zm3.31 3.78l-2.36 7.56v.47h.47l2.36-7.09v-.95h-.47z"/><use xlink:href="#E" x="406.34"/><path d="M736.25 96.1c3.71 0 7.18 1.1 10.4 3.31l-.47.47v.47l1.89 2.84h-.95l-.47-.47h-.47l1.42 10.4h.47c0-1.58.32-2.36.95-2.36v1.89c0 1.78-1.58 5.88-4.73 12.29h.47c-2.22 3.06-5.53 5.9-9.93 8.51l-2.36.47H732c-7.49 0-12.22-2.99-14.18-8.98l-1.89-2.84.47-.47-.47-3.31v-.95c0-2.61 2.52-7.18 7.56-13.71v.47c-2.32 3.11-4.21 6.58-5.67 10.4v.47h.47c1.15-4.62 5.4-10.45 12.77-17.49l-3.31 1.89h-.47c0-1.45 2.99-2.55 8.98-3.31zm-18.91 21.28v3.78h.47v-3.78h-.47zm6.15-6.62l-1.42 2.84h.47l1.42-2.84h-.47zm10.4-6.62l-.47-.47v.47l.47.47-3.31 2.84c-2.62 0-5.14 4.41-7.57 13.24 0 2.52 1.42 4.73 4.25 6.62h.47c3.45 0 7.39-3.62 11.82-10.88 1.58-3.45 2.36-5.97 2.36-7.56v-3.78c0-.87-1.58-1.5-4.73-1.89h-.47l-.47.47h-.47v-.47l-1.89.95zm-9.46 25.06v.47l2.36 1.42v-.47l-2.36-1.42zm15.13-10.4l-1.89 2.36h.47l1.89-2.36h-.47zm2.36-5.2l-1.89 4.73h1.42l1.42-3.31-.47-1.42h-.47zm3.31 1.89l-.47 1.42v.95h.47l.47-1.89v-.47h-.47zm2.36-9.93h.95v2.36h-.95v-2.36z"/><use xlink:href="#C" x="583.54"/><use xlink:href="#G"/><use xlink:href="#B" x="690.08"/><path d="M884.66 95.21h1.42l.47 2.36c.95 0 1.42-.47 1.42-1.42h.47l.95.95-.47 2.84h.47l-.47.47v.47l.47.47v.47h-.47l.47.47v.47l-.47 15.6v.47h.47l1.42-4.73h.95l-3.31 8.98h.95l5.67-16.08h-.95l-1.89 6.15h-.95v-.47l3.31-7.56h.47v.95l3.78-.95c1.26.46 1.89.94 1.89 1.42l.47-.47h1.42l1.89 11.35h.47c0-1.41 2.48-9.53 7.45-24.36h.47l.47 1.42h.47v-.95h.47c2.34 0 3.6.47 3.78 1.42v.95l-.95 1.42v.47h.95l.47-3.31h.95l.95.95v.47l-10.76 37.13-1.42.47v-.95l-.47.47h-.47l-.47-.47c0 1.26-.47 1.89-1.42 1.89-2.52-.22-3.78-.7-3.78-1.42h.47c-.32-1.58-.95-2.68-1.89-3.31l-1.89-10.4c-.54.02-2.43 4.43-5.67 13.24l-2.36 2.36h-.47l-.47-1.89c4.82-7.97 7.34-14.12 7.56-18.44-.83.83-2.88 5.56-6.15 14.18-.39 0-1.02 1.89-1.89 5.67h-4.25l-.47-1.89-.47.47h-.47c0-1.71-.47-2.97-1.42-3.78v-1.89l1.89 1.42-.95-8.04.47-.47-.47-.47.47-.47h-.47l.47-.47v-6.62l.47-2.36h-.47l.47-.47V97.1l-.47-.47v-.47l1.42-.95zm27.78.22c-4.65 14.48-6.98 22.6-6.98 24.36v.47h.47l7.45-24.84h-.95zm-3.67 29.56l-.95 4.25v.95h.47l.95-4.73v-.47h-.47zm2.84-11.35l-.95 4.26v.47h.47l.95-4.25v-.47h-.47z"/><use xlink:href="#F" x="496.06"/><use xlink:href="#F" x="529.2"/><use xlink:href="#G" x="195.77"/></g><defs ><path id="B" d="m154.04,95.55c.83.63,3.49.95,7.95.95l-.03.47h-3.31l-.03.47c3.95,0,6.42.95,7.4,2.84l-.06.95h-2.36l-.03.47,3.28.47-.03.47h-2.84l-.03.47c.95,0,1.4.32,1.36.95-5.62,0-10.63,2.05-15.05,6.15l-.03.47c6.1,1.63,10.93,5.26,14.49,10.88l-.03.47c-1.15,4.08-4.37,7.86-9.65,11.35l-2.89.47-.03.47h.95c-.04.85-2.93,1.8-8.68,2.84l.06-.95h2.36l.06-.47c-2.02,0-3.85-1.1-5.48-3.31-1.41-.72-2.11-2.1-2.11-4.14,0-.19,0-.38.03-.58l1.47-.95,1.36.95h.95c8.9-1.39,13.49-4.23,13.77-8.51-3.73-1.89-6.19-2.84-7.4-2.84l-.03.47-4.64-1.89.44.47-.03.95c-3.93-2.89-5.85-5.1-5.76-6.62l3.7-6.62,2.48-1.89-.06.95,8.46-6.62Zm-6.62,39.24l-.03.47h1.89l2.39-.47v-.47h-.47l-3.78.47Zm.17-26.48l-.03.47,8.34-5.2,3.84-.95.06-.95h-.95c-4.99,1.85-8.74,4.06-11.26,6.62Zm2.61,19.39h.47l1-.95h-.47l-1,.95Zm2.59,3.78v.47h.47l1.97-1.42-2.45.95Zm5.92-3.78l-2.03,2.36h.47l2.03-2.36h-.47Z"/><path id="C" d="m192.03,96.1c3.71,0,7.18,1.1,10.4,3.31l-.47.47v.47l1.89,2.84h-.95l-.47-.47h-.47l1.42,10.4h.47c0-1.58.32-2.36.95-2.36v1.89c0,1.78-1.58,5.88-4.73,12.29h.47c-2.22,3.06-5.53,5.9-9.93,8.51l-2.36.47h-.47c-7.49,0-12.22-2.99-14.18-8.98l-1.89-2.84.47-.47-.47-3.31v-.95c0-2.61,2.52-7.18,7.56-13.71v.47c-2.32,3.11-4.21,6.58-5.67,10.4v.47h.47c1.15-4.62,5.4-10.45,12.77-17.49l-3.31,1.89h-.47c0-1.45,2.99-2.55,8.98-3.31Zm-18.91,21.28v3.78h.47v-3.78h-.47Zm6.15-6.62l-1.42,2.84h.47l1.42-2.84h-.47Zm10.4-6.62l-.47-.47v.47l.47.47-3.31,2.84c-2.62,0-5.14,4.41-7.57,13.24,0,2.52,1.42,4.73,4.25,6.62h.47c3.45,0,7.39-3.62,11.82-10.88,1.58-3.45,2.36-5.97,2.36-7.56v-3.78c0-.87-1.58-1.5-4.73-1.89h-.47l-.47.47h-.47v-.47l-1.89.95Zm-9.46,25.06v.47l2.36,1.42v-.47l-2.36-1.42Zm15.13-10.4l-1.89,2.36h.47l1.89-2.36h-.47Zm2.36-5.2l-1.89,4.73h1.42l1.42-3.31-.47-1.42h-.47Zm3.31,1.89l-.47,1.42v.95h.47l.47-1.89v-.47h-.47Zm2.36-9.93h.95v2.36h-.95v-2.36Z"/><path id="D" d="m219.78,96.46l3.31,2.84c0-.95.32-1.42.95-1.42h.47l6.62,17.02v.95h-.47l-.95-2.84h-.47v.95l3.31,8.04h.47c1.26-8.19,3.08-16.75,5.45-25.67l1.42.95,1.42-.47,2.84,1.42v.47c-.95,0-1.42.63-1.42,1.89h.47l.47.47h.47l.47-2.36h.95v.47l-.47.47.47.47v.47c-2.37,7.29-4.5,17.74-6.4,31.34h-.95l.95-7.57c-.63,0-1.58,3-2.84,8.98-1.17.95-2.27,1.42-3.31,1.42v.95h-.47c0-.63-.63-.95-1.89-.95v-3.31c0-1.43-3.15-9.31-9.46-23.64h-.47c-1.26,5.62-2.36,13.18-3.31,22.69l-.47-.47c-1.89.56-2.84,1.34-2.84,2.36h-.95c-.63-1.19-.95-3.24-.95-6.15h-.47v4.25h-.95l-.47-2.36c0-8.57,1.89-18.97,5.67-31.21l3.78-.47Zm-6.62,11.82v.47l.47.47-.47.47v.95h.47l.47-1.89-.47-.47h-.47Zm17.97,7.56c.82,0,1.45,1.26,1.89,3.78v.47h-.47l-1.42-4.26Z"/><path id="E" d="m280.99,94.77l1.31,1.11,4.34-.47.42.53.47.06,1.45-.31c5.3.56,9.13,3.19,11.49,7.9.63.07.86.89.7,2.45l-.36,3.31-.95-.11.06-.47.64-1.36-.42-.53.5-.42-.42-.53-.92-.08c-.2,1.8-2,3.66-5.4,5.59l-.06.47.47.03c1.19.15,2.85-.45,4.98-1.81l-.08.95-2.7,2.56c1.74.19,4.29,2.99,7.65,8.43-.37,3.45-5.52,7.01-15.44,10.68-4.25,2.06-7.52,2.97-9.82,2.73l-.83-1.08-.47-.03c-.09.95-.77,1.34-2.03,1.2-.11.87-.43,1.31-.95,1.31h-.17c-.63-.07-.82-1.21-.56-3.39l-.47-.03-.72,2.28-.47-.06c.33-3.12.03-4.72-.92-4.81l-.25-1.95.53-.42-.45-.53,4.59-19.97-.42-.5.47.06-.42-.5,1.25-7.01.03-.47-.58-3.39.47.03c1.76-.96,3.14-1.45,4.14-1.45.11,0,.21,0,.31.03Zm.36,22.89l-1.42,8.4.42.53.47.06c2.26.26,7.39-1.71,15.38-5.92l1.06-.83c-.05-1.28-1.24-2.04-3.56-2.28l-3.75-.45-8.59.5Zm1.78-12.18l.14,3.34,4.31-.47-.08.95,6.98-3.03-.06.47-3.59,2.45c3.91-1.08,6.02-2.9,6.31-5.48l-.95-.11c-.19,1.56-.74,2.29-1.67,2.2l.08-.95-.47-.03.64-1.39.42.53.47.08.06-.47c-1.15-1.09-2.99-1.77-5.51-2.03-4.38-.5-6.74.82-7.09,3.95Zm6.9-10.65l2.28.72-.06.47-2.34-.25.11-.95Zm1.95,21.17l-.03.44,4.62,1,.47.03.06-.47-1.84-.67-3.28-.33Zm9.37,5.76c-.11.98-3.23,3.34-9.34,7.06,6.97-2.78,10.53-4.92,10.68-6.42l-.47-.06-.39-.53-.47-.06Zm-9.12-20.97l-.06.47,3.73.89c.06-.63-.38-.99-1.31-1.08l-2.36-.28Zm1.92,4.03l-.03.47-1.06.81-.47-.03,1.56-1.25Zm4.12,14.68l-1.14,1.81,2.03-1.2-.42-.53-.47-.08Z"/><path id="F" d="m453.29,96.24l2.28,1.59c-.67,2.8-1.87,4.14-3.62,4.03l-12.35.56-.06.95,2.34.17,2.86-.28.45.53.47.03,3.34-.28.95.08-.03.47-10.99,1.14-.86,6.12.47.03,12.85-1.03.42.5-.03.47-.95-.08v.47l3.25.72-.03.47c-.69,1.76-5.21,3.19-13.57,4.28l-4.76.17.44.47-2.28,6.01h-.47l.28-4.25-.47-.03-.92,6.56c9.44-1.26,16.1-1.76,20-1.5l2.31.64-.03.95-.95-.06.42.5-.08,1.42c-.91,1.19-2.84,1.69-5.79,1.5l-.03.47,3.78.25-.08.95-22,3.23-.47-.03c-1.52-.33-2.28-.83-2.28-1.47v-.08l.08-1.42,1.31-5.12-.45-.5.95.03-.17,2.36.47.06c.18-1.58.56-2.34,1.11-2.28l-.45-.53.33-4.7-.95-.08-.64,2.34.53-.45.47.03-.19,2.84-.47-.06.08-1.39-.47-.03-.06.95-.47-.03.06-.95,1.5-7.98-.47-.03,1.08-2.28-.45-.5.03-.47,1.03-7.98.44.5.47.03.05-.95-.31-2.39.75-4.23.08-1.42.47.06.44.5.5-.45.47.06.45.47.5-.44,1.42.11,16.6-.31Zm-23.67,20.67l-.22,3.31.47.03.22-3.28-.47-.06Zm15.6.61h.47l-.06.47-8.57.86-.45-.53.03-.45,4.28-.19-.03.47,4.31-.64Z"/><path id="G" d="m802.77,95.69l.47,4.25c.63,0,1.1-.95,1.42-2.84h.47l.47,1.89-1.42,7.56,5.2-3.78h.47l-5.67,5.2v.47l10.87-8.04.47.47c4.25-3.47,7.08-5.2,8.51-5.2h.47l.47,1.89-3.78,3.78h.47c.63-1.26,1.58-1.89,2.84-1.89l.47.47v-.47l-.47-.47.47-.47h1.42l.47,1.42c-2.37,1.11-7.89,5.21-16.55,12.29,2.13,4.65,5.91,10.96,11.35,18.91v.95l-.47,3.31-.47-.47h-.47l-.47,1.89h-1.89v-.95h-.47v.95h-.95c0-1.11-3.47-6.94-10.4-17.49l-.95-2.84-2.36.47c-.41,7.58-1.4,12.31-2.98,14.18v.47l-4.73-.47v-1.42l.47-3.31c-.95,0-1.42-.95-1.42-2.84.52-3.15,1.04-4.73,1.56-4.73l-.47-.47c.95-8.68,1.89-13.88,2.84-15.6l-.47-1.42,1.42-3.78v-.47l-.47-.47v-.47h.95v3.31h.47l.47-1.42-.47-.47v-.47c.32-.95,1.26-1.42,2.84-1.42Zm-3.78,5.2l-.47,2.84v1.89h.47l.47-4.25v-.47h-.47Zm13.71-.47h.47l-2.84,2.36h-.47l2.84-2.36Zm-1.89,28.84h.47l1.42,1.42h-.47l-1.42-1.42Zm1.89,1.42c.8,0,1.59,1.58,2.36,4.73v.47h-.47l-1.89-5.2Zm2.36-32.15h.47l-1.89,1.89h-.47l1.89-1.89Zm6.15-3.78l.47.47v.47l-.47.47-.47-.47h-.47l-4.25,2.84h-.47c0-.83,1.89-2.1,5.67-3.78Zm-2.36,7.57l-1.89,1.42-.47.47v.47h.47l1.89-1.42.47-.47v-.47h-.47Z"/></defs></svg>

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
