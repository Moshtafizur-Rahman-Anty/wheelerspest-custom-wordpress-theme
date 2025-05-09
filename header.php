<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="5-214AVkA9rL6N9HxTZsQg4siIgY92FUy5bINa_t34E" />

    <title><?php wp_title(' ', true, 'right'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="Pest Control, pest service, pest removal">
    <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/frontend/bootstrap.min.css">

    <?php wp_head(); ?>
</head>  

<body <?php body_class(); ?>>

<header>
    <!--Mobile-view-->
    <div class="mobile-top-head">
                <div class="mobile-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="true">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="mobiletext">Menu</span>
                </div>
                <div class="mob_navi menu">
                    <div class="mob_sub_navigate">
                        <span class="fas fa-chevron-left"></span>
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="col-sm-2 mobile-logo">
                        <a href="<?php echo esc_url(home_url('/services/rodents/')); ?>">
                            <img width="250" height="79" src="<?php echo get_template_directory_uri(); ?>/images/home/logo.webp" alt="Pest Control Company">
                        </a>
                    </div>
                    
                    <ul id="mob_menu" class="nav_mob mob_menu_rk">
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                        </li>
                        <li class="mob_sub_link">
                            <a>Services</a>
                            <span class="fas fa-chevron-right"></span>
                            <ul class="mob_sub_menu">
                                <li>
                                    <a href="<?php echo esc_url(home_url('/services/ants')); ?>">Ants</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/services/beg-bugs/')); ?>">Bed Bug</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/services/rodents/')); ?>">Rat & Mice</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/services/spiders/')); ?>">Spiders</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/services/wildlife-control/')); ?>">Wildlife Control</a>
                                </li>
                            </ul>
                        </li>
                       
                        <li>
                            <a href="<?php echo esc_url(home_url('/commercial')); ?>commercial">Commercial</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/services/mosquitos/')); ?>">Mosquitos</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/services/bees-wasps-hornets/')); ?>">Bees, Wasps & Hornets
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/services/fleas/')); ?>gopher-control">Fleas</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a>
                        </li>
                        <li class="mob_sub_link">
                            <a>Service Areas</a>
                            <span class="fas fa-chevron-right"></span>
                            <ul class="mob_sub_menu">
                                <li>
                                    <a href="<?php echo esc_url(home_url('/west-covina')); ?>">West Covina, CA</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/san-gabriel')); ?>">San Gabriel, CA</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/contact-page')); ?>contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

    <!--Header Section-->
    <div class="header_wrapper">
        <div class="container">
            <div class="row header_hle">
                <div class="col-sm-12 header_wrapper_blck">

                    <!-- Logo -->
                    <div class="col-sm-2 header_logo">
                        <div class="header_logo_inner">
                            <a href="<?php echo home_url(); ?>">
                            <img width="120" height="90"src="<?php echo get_template_directory_uri(); ?>/images/home/logo.webp" alt="Pest Service">                            </a>
                        </div>
                    </div>

                    <!-- Navigation + Login + Phone (col-sm-10) -->
                    <div class="col-sm-10 header_menu_section">
                        <div class="row">

                            <!-- Menu -->
                            <div class="col-sm-10 header_menus">
                                <div class="header-nav">
                                    <nav>
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'main_menu',
                                            'container'      => false,
                                            'fallback_cb'    => false,
                                            'menu_class'     => 'main-nav',
                                        ));
                                        ?>
                                    </nav>
                                </div>
                            </div>

                            <!-- Login -->
                    

                            <!-- Phone -->
                    

                        </div> <!-- /.row -->
                    </div> <!-- /.col-sm-10 -->

                </div> <!-- /.col-sm-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.header_wrapper -->
</header>

<section>
