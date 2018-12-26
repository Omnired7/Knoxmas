<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kno-x-mas_tree-removal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kno-x-mas_tree-removal' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="fb-link">
			<a>FB.COM/KNOXMAS</a>
		</div>
		<div class="site-branding">
			<?php the_custom_logo(); ?>
		</div><!-- .site-branding -->
		<div class="phn-link">
			<a>(423)-301-1238</a>
		</div>
		<div class="e-mail">
			<a>CONTACT@KNOXMASTREEREMOVAL.COM</a>
		</div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
