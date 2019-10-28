<?php get_header(); ?>
<div class="financity-page-wrapper" id="financity-page-wrapper">
    <div class="financity-not-found-wrap" id="financity-full-no-header-wrap">
        <div class="financity-not-found-background"></div>
        <div class="financity-not-found-container financity-container">
            <div class="financity-header-transparent-substitute"></div>
            <div class="financity-not-found-content financity-item-pdlr">
                <h1 class="financity-not-found-head">404</h1>
                <h3 class="financity-not-found-title financity-content-font">Page Not Found</h3>
                <div class="financity-not-found-caption">Sorry, we couldn&#039;t find the page you&#039;re looking for.
                </div>
                <form role="search" method="get" class="search-form" action="#">
                    <input type="text" class="search-field financity-title-font" placeholder="Type Keywords..." value=""
                        name="s">
                    <div class="financity-top-search-submit"><i class="fa fa-search"></i></div>
                    <input type="submit" class="search-submit" value="Search">
                </form>
                <div class="financity-not-found-back-to-home"><a href="<?php echo get_site_url(); ?>">Or Back To Homepage</a></div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>