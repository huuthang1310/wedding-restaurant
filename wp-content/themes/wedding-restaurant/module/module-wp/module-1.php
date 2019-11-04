<header class="header-fixed smaller">
    <div class="main-header bg-f">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="<?php echo get_site_url(); ?>home" class="logo"><img
                            src="<?php echo get_template_directory_uri() ?>/images/logo-foody.png" alt="image"></a>
                </div>
                <div class="col-6 col-md-8 col-lg-7 hidden-md hidden-lg">
                    <nav id="holder_mn" class="menu-nav pull-right sub-menu-light">
                        <div class="menu-btn"></div>
                        <div class="menu-wrap">
                            <div class="menu-btn-close"></div>
                            <ul class="menu">
                            <?php wp_nav_menu( array( 'li' => '%3$s' ) ); ?>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-2 d-none d-lg-block">
                    <a href="<?php echo get_site_url(); ?>/reservations" class="btn float-right">Book a
                        table</a>
                </div>
            </div>
        </div>
    </div>
</header>