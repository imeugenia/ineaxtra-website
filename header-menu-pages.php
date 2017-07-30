<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title(); ?></title>
        <meta name="description" content="Marketing and communication consulting">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <meta name="theme-color" content="#FF3B3F">
        <meta name="msapplication-navbutton-color" content="#FF3B3F">
        <meta name="apple-mobile-web-app-status-bar-style" content="#FF3B3F">
        <link rel="icon" type="image/x-icon" href="img/favicon.png" />
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="outer-wrapper">
        <div class="header-container">
            <header class="container"> 
                <div class="row">
                    <div class="col-xs-3 inextra-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Inextra Partners"/>
                        </a>
                    </div>
                    <div class="lang-bar col-xs-9">
                        <ul>
                            <?php
                              $defaults1 = array(
                                  'container' => false, 
                                  'theme_location' => 'language-menu',
                                  'menu_class' => 'no-bullet', 
                                );
                              wp_nav_menu( $defaults1 );
                            ?>
                        </ul>
                    </div>
                </div>
            </header>
        </div>
        <div class="menu-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 inextra-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Inextra Partners"/>
                        </a>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <nav>
                            <?php
                              $defaults = array(
                                  'container' => false, 
                                  'theme_location' => 'primary-menu',
                                  'menu_class' => '', 
                                );
                              wp_nav_menu( $defaults );
                            ?>
                        </nav>
                    </div>
                </div>
            </div>  
        </div>