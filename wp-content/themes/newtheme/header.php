<?php defined('ABSPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
<head>
    <title>Unearth &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="site-logo">
                    <a href="index.html" class="text-black"><span class="text-primary">Unearth</a>
                </div>
                <div class="col-12">
                    <nav class="site-navigation text-right ml-auto " role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                            <?php

                            $menu = wp_nav_menu(array('theme_location' => 'primary', 'items_wrap' => '%3$s', 'container' => ''));
                            ?>
                           <!-- <li><a href="#home-section" class="nav-link">Home</a></li>
                            <li><a href="#services-section" class="nav-link">Services</a></li>
                            <li class="has-children">
                                <a href="#about-section" class="nav-link">About Us</a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="#team-section" class="nav-link">Team</a></li>
                                    <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                                    <li><a href="#faq-section" class="nav-link">FAQ</a></li>

                                </ul>
                            </li>
                            <li><a href="#press-section" class="nav-link">Press</a></li>

                            <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                            <li><a href="#blog-section" class="nav-link">Blog</a></li>
                            <li><a href="#contact-section" class="nav-link">Contact</a></li>
                            -->
                        </ul>
                    </nav>
                </div>
                <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
            </div>
        </div>
    </header>
    <div class="owl-carousel slide-one-item">
        <div class="site-section-cover overlay img-bg-section" id="" style="background-image: url('img/hero_3.jpg'); " >
            <div class="container">
                <!--<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_3.jpg" alt="logo">-->
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-12 col-lg-7">
                        <h1 data-aos="fade-up" data-aos-delay="">Welcome to UnEarth</h1>
                        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, cumque vitae animi.</p>
                        <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-outline-white border-w-2 btn-md">Get in touch</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>