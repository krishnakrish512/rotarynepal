<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;700&family=Roboto:wght@400;500&display=swap"
          rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Blog Demo Specific Stylesheet -->
    <!-- <link rel="stylesheet" href="assets/blog/fonts.css" type="text/css" /> -->
    <link rel="stylesheet" href="assets/css/blog.css" type="text/css"/>

    <!-- Document Title
    ============================================= -->
    <title>Blog Demo | Canvas</title>
    <?php wp_head(); ?>
</head>

<body class="stretched search-overlay">

<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=915724525182895&autoLogAppEvents=1"></script>

<!-- Document Wrapper
============================================= -->
<div id="wrapper">

    <!-- Header
    ============================================= -->
    <header id="header" class="header-size-custom" data-sticky-shrink="false">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row justify-content-lg-between">

                    <!-- Logo
                    ============================================= -->
                    <?php
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_url($custom_logo_id, 'full');
//                            var_dump($logo);
//                            exit();
                    } ?>

                    <div id="logo" class="mx-lg-auto col-auto flex-column order-lg-2 px-0">
                        <a href="<?= get_home_url(); ?>" class="standard-logo"
                           data-dark-logo="<?php echo $logo; ?>"
                           data-mobile-logo="<?php echo $logo; ?>"><img
                                    src="<?php echo $logo; ?>" alt="Canvas Logo"></a>
                        <a href="<?= get_home_url(); ?>" class="retina-logo"
                           data-dark-logo="assets/images/blog/logo-dark@2x.png"
                           data-mobile-logo="assets/images/blog/mobile-logo@2x.png"><img
                                    src="<?php echo $logo; ?>" alt="Canvas Logo"></a>
                        <span class="divider divider-center date-today mt-1"><span class="divider-text"></span></span>
                    </div><!-- #logo end -->
                    <?php $social = get_field('social', 'option'); ?>

                    <div class="col-auto col-lg-3 order-lg-1 d-none d-md-flex px-0">
                        <div class="social-icons">
                            <a href="<?= $social['facebook_url'] ?>"
                               class="social-icon si-rounded si-dark si-mini si-facebook" target="_blank">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="<?= $social['twitter_url'] ?>"
                               class="social-icon si-rounded si-dark si-mini si-twitter" target="_blank">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>
                            <a href=" <?= $social['instagram_url'] ?>"
                               class="social-icon si-rounded si-dark si-mini si-instagram" target="_blank">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>
                        </div>
                    </div>

                    <div class="header-misc col-auto col-lg-3 justify-content-lg-end ml-0 ml-sm-3 px-0">

                        <!-- Bookmark
                        ============================================= -->
                        <div class="dropdown dropdown-langs d-none">
                            <button class="btn dropdown-toggle px-1" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="demos/seo/images/flags/eng.png" alt="French">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right d-none" aria-labelledby="dropdownMenuButton">
                                <a href="#" class="dropdown-item"><img src="demos/seo/images/flags/fre.png" alt="Lang">
                                    French</a>
                                <a href="#" class="dropdown-item"><img src="demos/seo/images/flags/ara.png" alt="Lang">
                                    Arabic</a>
                                <a href="#" class="dropdown-item"><img src="demos/seo/images/flags/tha.png" alt="Lang">
                                    Thailand</a>
                                <a href="#" class="dropdown-item disabled" tabindex="-1" aria-disabled="true"><img
                                            src="demos/seo/images/flags/eng.png" alt="Lang"> English</a>

                            </div>
                        </div>

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search" class="header-misc-icon">
                            <a href="<?php echo esc_url(home_url('/')); ?>" id="top-search-trigger"><i
                                        class="icon-line-search"></i><i
                                        class="icon-line-cross"></i></a>
                        </div><!-- #top-search end -->

                        <div class="dark-mode header-misc-icon d-none d-md-block">
                            <a href="#"><i class="icon-dark"></i></a>
                        </div>
                    </div>

                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100">
                            <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                            <path d="m 30,50 h 40"></path>
                            <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                        </svg>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="header-row justify-content-lg-center header-border">

                    <!-- Primary Navigation
                    ============================================= -->
                    <!--                    <nav class="primary-menu with-arrows">-->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
//                            'container' => 'nav',
                        'menu_class' => 'menu-container justify-content-between',
//                            'container_class' => 'primary-menu',
//
                    )); ?>
                    <ul class="menu-container justify-content-between d-none">
                        <li class="menu-item current"><a class="menu-link" href="index.html">
                                <div>Home</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="demo-blog-categories.html">
                                <div>World</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="events-list.html">
                                <div>Events</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="demo-blog-categories.html">
                                <div>Lifestyle</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="demo-blog-categories.html">
                                <div>Business</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="demo-blog-categories.html">
                                <div>Finance</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="demo-blog-categories.html">
                                <div>Food</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="demo-blog-categories.html">
                                <div>Sports</div>
                            </a></li>
                    </ul>

                    <!--                    </nav>-->
                    <!-- #primary-menu end -->

                    <form class="top-search-form" action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.."
                               autocomplete="off">
                    </form>

                </div>
            </div>
        </div>
        <div class="header-wrap-clone d-none"></div>

    </header><!-- #header end -->
