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

get_header(); ?>

<!--    <div id="primary" class="content-area">-->
<!--        <main id="main" class="site-main" role="main">-->
            <div id="content" class="wrapper">
                <h1>NOTICAS/</h1>
                <div id="feauterd">
                    <section id="main" class="fill-content">
                        <div id="left">
                            <img src="<?=get_template_directory_uri();?>/images/home_main_section_left_image.jpg">
                            <h2>continuerr</h2>
                            <p>industry. Lorem Ipsum has been the industry's standard dummy </p>
                        </div>
                        <div id="right">
                            <ul>
                                <li>
                                    <h2>PRSO SALARIAL</h2>
                                    <p>ext ever since the 1500s, when an unknown printer took a</p>
                                </li>
                                <hr>
                                <li>
                                    <h2>PRSO SALARIAL</h2>
                                    <p>ext ever since the 1500s, when an unknown printer took a</p>
                                </li>
                                <hr>
                                <li>
                                    <h2>PRSO SALARIAL</h2>
                                    <p>ext ever since the 1500s, when an unknown printer took a</p>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <aside>
                        <div class="wrapper">
                            <div id="top">
                                <p> type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                            </div>
                            <div id="bottom">
                                <p> type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                            </div>
                        </div>
                    </aside>
                </div>
                <section id="services">
                    <hr>
                    <img src="<?=get_template_directory_uri();?>\images\home_service-1.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-2.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-3.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-4.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-5.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-6.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-7.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\home_service-8.jpg">
                </section>
                <hr>
                <section id="clients">
                    <img src="<?=get_template_directory_uri();?>\images\client-1.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\client-2.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\client-3.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\client-4.jpg">
                    <img src="<?=get_template_directory_uri();?>\images\client-5.jpg">
                </section>
            </div>

<!--        </main>-->
<!--    </div>-->

<?php
get_sidebar();
get_footer();
