<?php $Url2 = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php 
        wp_title('|', true, 'right');
        bloginfo( 'name' );
    ?>
    </title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic|Asap:regular,italic,500,500italic,600,600italic,700,700italic&#038;subset=latin-ext,latin,vietnamese,cyrillic-ext,greek,greek-ext,cyrillic&#038;ver=4.9.5'
        type='text/css' media='all'>
</head>

<body
    class="home page-template-default page page-id-2039 gdlr-core-body financity-body financity-body-front financity-full  financity-with-sticky-navigation gdlr-core-link-to-lightbox">
    <div class="financity-mobile-header-wrap">
        <div class="financity-mobile-header financity-header-background financity-style-slide"
            id="financity-mobile-header">
            <div class="financity-mobile-header-container financity-container">
                <div class="financity-logo  financity-item-pdlr">
                    <div class="financity-logo-inner">
                        <a href="<?php echo get_site_url(); ?>"><img
                                src="<?php echo $Url2 ?>/upload/logo.png"
                                alt="" width="211" height="48"></a>
                    </div>
                </div>
                <div class="financity-mobile-menu-right">
                    <div class="financity-mobile-menu"><a
                            class="financity-mm-menu-button financity-mobile-menu-button financity-mobile-button-hamburger"
                            href="#financity-mobile-menu"><span></span></a>
                        <div class="financity-mm-menu-wrap financity-navigation-font" id="financity-mobile-menu"
                            data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                                <li
                                    class="menu-item menu-item-home current-menu-item page_item page-item-2039 current_page_item">
                                    <a href="/">Home</a></li>
                                <li class="menu-item menu-item-has-children"><a href="<?php echo get_site_url(); ?>/services">Our Services</a>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="<?php echo get_site_url(); ?>/learnmore">Learn More</a>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="<?php echo get_site_url(); ?>/about/#dedicated">Dedicated Account Provider</a>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="<?php echo get_site_url(); ?>/about/#compliance">Legal Compliance</a>
                                </li>
                                <li class="menu-item menu-item-has-children"><a
                                        href="<?php echo get_site_url(); ?>/About">About Us</a>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="<?php echo get_site_url(); ?>/ContactUs">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="financity-body-outer-wrapper ">
        <div class="financity-body-wrapper clearfix  financity-with-transparent-navigation financity-with-frame">
            <div class="financity-header-background-transparent">
                <?php get_sidebar('top-menu'); ?>

                <header class="financity-header-wrap financity-header-style-bar  financity-style-left">
                    <div class="financity-header-background"></div>
                    <div class="financity-header-container clearfix  financity-container">
                        <div class="financity-header-container-inner">
                            <div class="financity-logo  financity-item-pdlr">
                                <div class="financity-logo-inner">
                                    <a href="<?php echo get_site_url(); ?>"><img
                                            src="<?php echo $Url2 ?>/images/logo.png"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php get_sidebar('main-menu'); ?>
                </header>
            </div>