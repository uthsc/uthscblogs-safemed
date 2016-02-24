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
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed"
          href="<?php echo home_url(); ?>/feed/">
    <!--  iPhone Web App Home Screen Icon -->
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png"/>
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png"/>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/uthsc-icon.png"/>
    <!-- Enable Startup Image for iOS Home Screen Web App -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png"/>
    <!-- Startup Image iPad Landscape (748x1024) -->
    <link rel="apple-touch-startup-image"
          href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png"
          media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)"/>
    <!-- Startup Image iPad Portrait (768x1004) -->
    <link rel="apple-touch-startup-image"
          href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png"
          media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)"/>
    <!-- Startup Image iPhone (320x460) -->
    <link rel="apple-touch-startup-image"
          href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png"
          media="screen and (max-device-width: 320px)"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class('antialiased'); ?>>


    <!-- Header --><!--Hero Image-->
    <header class="hero medium-text-left small-text-center">
        <a href="/" title="Home">
            <div class="columns logo-background">
                <div class="row">
                    <div class="columns small-4">
                        <img src="/wp-content/themes/uthscblogs-safemed/images/safemed-logo.png" alt="safemed logo"/>
                    </div>
                    <div class="columns small-8 large-12">
                        <h2>Making sure all parts of your&nbsp;care fit&nbsp;together</h2>
                    </div>
                </div>
            </div>
        </a>
    </header>
    <div class="contain-to-grid sticky">
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
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="/" title="Home"><i class="fa fa-home fa-2x home-icon"></i></a></h1>
                    </li>
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
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
    </div>
    <!-- End Header -->
    <!-- Start the main container -->
    <div class="container" role="document">
        <div class="row">