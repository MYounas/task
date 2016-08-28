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
<script src="<?=get_template_directory_uri();?>/js/jquery-3.1.0.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blank' ); ?></a>

	<header>
		<div class="wrapper">
			<div id="top-header">
				<div id="logo">
                    <a href="http://localhost/task"><img src="<?=get_template_directory_uri();?>/images/logo.jpg"></a>
				</div>
				<div id="search">
					<input type="text" placeholder="Search" class="box-design" style="width: 116px">
					<img src="<?=get_template_directory_uri();?>/images/search.png" style="width:22px">
				</div>
				<div id="sign-in">
					<p>signin credenntails</p>
					<input type="text" placeholder="Login" class="box-design">
					<input type="password" placeholder="password" class="box-design">
					<input type="submit" value="ok" class="red-btn-design">
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
					<li><a href="http://localhost/task/quem-somos">QUEM SOMOS</a></li>
					<li><a href="http://localhost/task/fale-conosco">FALE CONOSCO</a></li>
				</ul>
			</nav>
			<div id="banner">
				<img src="<?=get_template_directory_uri();?>/images/banner-all.jpg">
			</div>
		</div>
	</header>

	<div id="content" class="site-content wrapper">
