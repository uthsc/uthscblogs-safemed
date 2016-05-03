<!doctype html>
<!--[if lt IE 7]>
<html class="no-js ie6 lt-ie9 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7 lt-ie9 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 lt-ie9 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!--[if IE 9]>
<html class="no-js ie9" <?php language_attributes(); ?> "> <![endif]-->

<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right');
        bloginfo('name'); ?></title>
    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="apple-mobile-web-app-title" content="Project SafeMed"/>
    <meta property="og:image" content="images/safemed-icon.jpg"/>
    <meta property="og:title" content="Project SafeMed"/>
    <meta property="og:site_name" content="Project SafeMed"/>
    <meta property="og:url" content="http://safemed.org"/>
    <meta property="og:description"
          content="SafeMed: A joint venture between University of Tennessee Health Science Center (UTHSC) and Methodist LeBonheur HealthCare"/>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-71447945-1', 'auto');
        ga('send', 'pageview');

    </script>
    <!-- Favicon and Feed -->
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed"
          href="<?php echo home_url(); ?>/feed/">
    <!--  iPhone Web App Home Screen Icon -->

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/apple-touch-icon-57x57.png?v=nggaAjnBdX">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/apple-touch-icon-60x60.png?v=nggaAjnBdX">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/apple-touch-icon-72x72.png?v=nggaAjnBdX">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/apple-touch-icon-76x76.png?v=nggaAjnBdX">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/apple-touch-icon-114x114.png?v=nggaAjnBdX">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/apple-touch-icon-120x120.png?v=nggaAjnBdX">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/apple-touch-icon-144x144.png?v=nggaAjnBdX">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/apple-touch-icon-152x152.png?v=nggaAjnBdX">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/apple-touch-icon-180x180.png?v=nggaAjnBdX">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/favicon-32x32.png?v=nggaAjnBdX" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/favicon-194x194.png?v=nggaAjnBdX" sizes="194x194">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/favicon-96x96.png?v=nggaAjnBdX" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/android-chrome-192x192.png?v=nggaAjnBdX" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/favicon-16x16.png?v=nggaAjnBdX" sizes="16x16">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/manifest.json?v=nggaAjnBdX">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/safari-pinned-tab.svg?v=nggaAjnBdX" color="#9e0e26">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/safemed-icons/favicon.ico?v=nggaAjnBdX">
    <meta name="apple-mobile-web-app-title" content="SafeMed">
    <meta name="application-name" content="SafeMed">
    <meta name="msapplication-TileColor" content="#efefef">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/safemed-icons/mstile-144x144.png?v=nggaAjnBdX">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/safemed-icons/browserconfig.xml">
    <meta name="theme-color" content="#efefef">

    <?php wp_head(); ?>
</head>
<body <?php body_class('antialiased'); ?>>

<div id="sticky-footer-root">
    <section id="banner" class="hero">
        <div class="row brand-text logo-background">
            <div id="brand" class="columns">
                <div class="row">
                    <div class="columns small-4">
                        <a href="/" title="Home">
                            <img src="/wp-content/themes/uthscblogs-safemed/images/safemed-logo.png" alt="safemed logo"/>
                        </a>
                    </div>
                    <div class="columns small-8 large-12">
                        <h2 class="safemed-slogan">Making sure all parts of your&nbsp;care fit&nbsp;together</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="seam"></div>
    </section>

    <header class="contain-to-grid sticky">
        <!-- Starting the Top-Bar -->
        <nav class="top-bar" data-topbar data-options="scrolltop:false;">
            <ul class="title-area">
                <li class="name">
                    <div class="row hide-for-large-up search-form">
                        <div class="small-9 medium-5 columns">
                            <?php //get_search_form() ?>
                        </div>
                    </div>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">
                <ul class="left">
                    <li>
                        <a href="/">
                            <span class="safemed-home-menu-icon fa fa-home fa-2x"></span>
                        </a>
                    </li>
                    <li class="divider"></li>
                </ul>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'depth' => 0,
                    'items_wrap' => '<ul class="left">%3$s</ul>',
                    'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
                    'walker' => new reverie_walker(array(
                        'in_top_bar' => true,
                        'item_type' => 'li',
                        'menu_type' => 'main-menu'
                    )),
                ));
                ?>
                <?php get_search_form() ?>
            </section>
        </nav>
        <!-- End of Top-Bar -->
    </header>
    <!-- Start the main container -->
    <div class="container" role="document">
        <div class="row content-area">