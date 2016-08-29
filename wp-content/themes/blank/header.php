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
                    <a href="<?=get_home_url();?>"><img src="<?=get_template_directory_uri();?>/images/logo.jpg"></a>
				</div>
				<div id="search">
                    <form action="<?=get_home_url();?>" id="searchform" method="get">
                        <input type="text" placeholder="Search" name="s" id="s" class="box-design" style="width: 116px">
                        <input type="submit" value="Search" class="search-btn">
                    </form>
				</div>
				<div id="sign-in">
                    <?php if(!is_user_logged_in()){ ?>
                    <form action="<?=get_home_url();?>/wp-login.php" method="post">
                        <p>signin credenntails</p>
                        <input type="text" placeholder="Login" name="log" id="user_login" class="box-design">
                        <input type="password" placeholder="password" name="pwd" id="user_pass" class="box-design">
                        <input type="submit" value="ok" name="user-submit" class="red-btn-design">
                        <input type="hidden" name="redirect_to" value="/task/<?php global $post;echo $post->post_name; ?>/">
                        <input type="hidden" name="user-cookie" value="1">
                        <p>Escused a senhai</p>
                    </form>
                    <?php } else{ ?>
                    <p>Welcome <?php echo wp_get_current_user()->user_login;}?>!</p>

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
					<li><a href="<?=get_home_url();?>/quem-somos">QUEM SOMOS</a></li>
					<li><a href="<?=get_home_url();?>/fale-conosco">FALE CONOSCO</a></li>
				</ul>
			</nav>
			<div id="banner">
				<img src="<?=get_template_directory_uri();?>/images/banner-all.jpg">
			</div>
		</div>
	</header>

	<div id="content" class="site-content wrapper">
