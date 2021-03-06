<section class="cards team cards-img-round text-center">
    <div class="container">
        <div class="block-title">
            <h4 class="card-subtitle">Our chef</h4>
            <h2 class="line-default">Meet Our team</h2>
        </div>
        <div class="owl-carousel owl-theme owl-loaded owl-drag owl-theme-1 owl-nav-1 m-b-ab-5" data-itemsdesktop="4"
            data-itemsdesktopsmall="3" data-itemstablet="3" data-itemsmobile="1" data-nav="false" data-margin="30"
            data-dots="false" data-center="false" data-darg="true">
            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="width: 720px; transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                    <!-- Get post News Query -->
                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=our_chef'); ?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                    <div class="owl-item active" style="width: 150px; margin-right: 30px;">
                        <div class="card">
                            <img src="<?php echo $featured_img_url ?>" alt="image">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a><?php echo the_title(  ); ?></a>
                                </h4>
                                <p>chef</p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <!-- Get post News Query -->
                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                        aria-label="Previous">‹</span></button><button type="button" role="presentation"
                    class="owl-next"><span aria-label="Next">›</span></button></div>
            <div class="owl-dots disabled"></div>
        </div>
    </div>
</section>
<section class="cards">
    <div class="container">
        <div class="block-title">
            <h4 class="card-subtitle">Our blog</h4>
            <h2 class="line-default">Featured Press</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Get post News Query -->
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=featured_press'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                <div class="card card-inline m-b-60">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo $featured_img_url ?>"
                                alt="image">
                        </div>
                        <div class="col-sm-6">
                            <div class="card-body m-t-xs-30">
                                <div class="card-date-1 m-b-25">
                                    <div class="card-date-inner">
                                        <h6 class="main-color f-50">12</h6>
                                        <p>jannuary</p>
                                    </div>
                                </div>
                                <h3 class="card-title">
                                    <a href="<?php echo the_permalink(  ); ?>"><?php echo the_title(  ); ?></a>
                                </h3>
                                <p class="card-text"><?php echo the_content(  ); ?></p>
                                <a href="<?php echo the_permalink(  ); ?>" class="btn">read
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
                <!-- Get post News Query -->
               
            </div>
        </div>
    </div>
</section>