<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blank' ); ?></a>

	<header>
		<div class="wrapper">
			<div id="top-header">
				<div id="logo">
					<img src="<?=get_template_directory_uri();?>/images/logo.jpg">
				</div>
				<div id="search">
					<input type="text" placeholder="Search"">
<!--					<img src="--><?//=get_template_directory_uri();?><!--/images/search.png" style="width:22px">-->
				</div>
				<div id="sign-in">
					<input type="text" placeholder="Login">
					<input type="password" placeholder="password">
					<input type="submit" value="ok" class="btn-design">
					<p>Escused a senhai</p>
				</div>
				<div id="foot">
					<div id="left">
						<ul>
							<li>Muhammad Younas</li>
							<li>HAris Zafar</li>
							<li>Usama Imran</li>
							<img src="<?=get_template_directory_uri();?>/images/abc-icon.png">
							<img src="<?=get_template_directory_uri();?>/images/twitter-icon.png">
							<img src="<?=get_template_directory_uri();?>/images/facebook-icon.png">
						</ul>
					</div>
				</div>
			</div>
			<nav class="fill-content">
				<ul>
					<li><a href="#">QUEM SOMOS</a></li>
					<li><a href="#">FALE CONOSCO</a></li>
				</ul>
			</nav>
			<div id="banner">
				<img src="<?=get_template_directory_uri();?>/images/home-banner.jpg">
			</div>
		</div>
	</header>

	<div id="content" class="site-content wrapper">
