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
 * @package blank
 */

//get_header(); ?>

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
                    <form action="http://localhost/task/" id="searchform" method="get">
                        <input type="text" placeholder="Search" name="s" id="s" class="box-design" style="width: 116px">
                        <input type="submit" value="Search" class="search-btn">
                    </form>
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
                <img src="<?=get_template_directory_uri();?>/images/home-banner.jpg">
            </div>
        </div>
    </header>

    <div id="content" class="site-content wrapper">

<!--    <div id="primary" class="content-area">-->
<!--        <main id="main" class="site-main" role="main">-->
            <div id="content" class="wrapper">
                <h1>NOTICAS/</h1>

                <div id="featured" class="fill-content">
                    <section id="main" class="fill-content">
                        <div id="left">
                            <img src="<?=get_template_directory_uri();?>/images/home_main_section_left_image.jpg">
                            <h2>continuerr</h2>
                            <p>industry. Lorem Ipsum has been the industry's standard dummy <a href="http://localhost/task/detail-1">go next</a></p>
                        </div>
                        <div id="right">
                            <ul>
                                <li>
                                    <h2>PRSO SALARIAL</h2>
                                    <p>ext ever since the 1500s, when an unknown printer took a <a href="http://localhost/task/detail-1">go next</a></p>
                                </li>
                                <hr>
                                <li>
                                    <h2>PRSO SALARIAL</h2>
                                    <p>ext ever since the 1500s, when an unknown printer took a <a href="http://localhost/task/detail-1">go next</a></p>
                                </li>
                                <hr>
                                <li>
                                    <h2>PRSO SALARIAL</h2>
                                    <p>ext ever since the 1500s, when an unknown printer took a <a href="http://localhost/task/detail-1">go next</a></p>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <aside>
                        <div class="wrapper">
                            <div id="top">
                                <p>type and scrambled it to make a type specimen book. It has survived not only five centurieso</p>
                            </div>
                            <div id="bottom">
                                <p>type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                <input type="text" class="box-design"style="width: 130px">
                                <input type="submit" class="blue-btn-design" value="Subscribe">
                            </div>
                        </div>
                    </aside>
                </div>
                <section id="services">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-1.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-2.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-3.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-4.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-5.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-6.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-7.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-8.jpg">
                </section>
                <section id="clients" class="fill-content">
                    <a id="prev" class="fill-content"><</a>
                    <img src="<?=get_template_directory_uri();?>\images\client-1.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\client-2.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\client-3.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\client-4.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\client-5.jpg">
                    <a id="next" class="fill-content">></a>
                </section>
            </div>

<!--        </main>-->
<!--    </div>-->

<?php
//get_sidebar();
get_footer();
