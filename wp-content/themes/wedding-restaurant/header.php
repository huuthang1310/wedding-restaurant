<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wedding_Restaurant
 */

?>
<?php $Url = get_template_directory_uri(); ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script type='text/javascript' src='<?php echo $Url ?>/js/jquery.min.js?ver=2'></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="navigationSpecial" class="navigationToggle hidden-lg hidden-md">
        <button class="btn btn-default btn-toggle navigationToggle__button">
            <i class="fa fa-bars"></i>
        </button>
        <div class="navigationToggle__menu">
            <div class="navigationMenu">
                <div class="menu-menu-home-container">
                    <ul id="Menu Home" class="menu-navbar">
                        <li id="menu-item-2135"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1758 current_page_item menu-item-2135">
                            <a href="<?php echo get_site_url() ?>">Trang chủ</a></li>
                        <li id="menu-item-5764"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5764"><a
                                href="<?php echo get_site_url() ?>">Tiệc cưới</a></li>
                        <li id="menu-item-5928"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5928"><a
                                href="<?php echo get_site_url() ?>">Hội nghị</a></li>
                        <li id="menu-item-2136"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2136"><a
                                href="<?php echo get_site_url() ?>">Ẩm thực</a></li>
                        <li id="menu-item-2141"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2141"><a
                                href="<?php echo get_site_url() ?>/tin-tuc">Tin Tức</a></li>
                        <li id="menu-item-2139"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2139"><a
                                href="<?php echo get_site_url() ?>/lien-he">Liên hệ</a></li>
                    </ul>
                </div>
                <form class="navigationSearch" action="/" method="GET">
                    <div class="inputSearch">
                        <input name="s" type="text" class="inputSearch__input" placeholder="Tìm kiếm...">
                        <div class="inputSearch__icon">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="fixedMenu" class="affix-top">
        <div class="bg">
            <div class="bg__white"></div>
            <div class="bg__red"></div>
        </div>
        <div class="container headerContainer">
            <div class="logo">
                <a href="/" title="Nhà hàng tiệc cưới Bách Việt đẹp và sang trọng - Quận 1">
                    <img src="<?php echo $Url ?>/img/logo.jpg"
                        alt="Nhà hàng tiệc cưới Bách Việt đẹp và sang trọng - Quận 1">
                </a>
            </div>
            <div class="navigationMenu">
                <div class="menu-menu-home-container">
                    <ul id="Menu Home" class="menu-navbar">
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1758 current_page_item menu-item-2135">
                            <a href="<?php echo get_site_url() ?>">Trang chủ</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5764"><a
                                href="<?php echo get_site_url() ?>">Tiệc cưới</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5928"><a
                                href="<?php echo get_site_url() ?>">Hội nghị</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2136"><a
                                href="<?php echo get_site_url() ?>">Ẩm thực</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2141"><a
                                href="<?php echo get_site_url() ?>/tin-tuc">Tin Tức</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2139"><a
                                href="<?php echo get_site_url() ?>/lien-he">Liên hệ</a></li>
                    </ul>
                </div>
                <form class="navigationSearch" action="/" method="GET">
                    <div class="inputSearch">
                        <input name="s" type="text" class="inputSearch__input" placeholder="Tìm kiếm...">
                        <div class="inputSearch__icon">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>