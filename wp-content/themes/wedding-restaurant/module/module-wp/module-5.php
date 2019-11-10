<section class="cards cards-pad-30 bg-offset"
    data-image-src="<?php echo get_template_directory_uri();?>/images/kawin-haraffsai-75421.jpg"
    style="background-image: url(&quot;<?php echo get_template_directory_uri();?>/images/kawin-haraffsai-75421.jpg&quot;);">
    <div class="container">
        <div class="block-title">
            <h4 class="card-subtitle">Our menu</h4>
            <h2 class="line-default line-default-f">Discovery menu</h2>
        </div>
        <div class="owl-carousel owl-theme owl-loaded owl-drag owl-theme-1 owl-nav-1 m-b-ab-5 color-3"
            data-itemsdesktop="3" data-itemsdesktopsmall="2" data-itemstablet="1" data-itemsmobile="1" data-nav="false"
            data-margin="30" data-dots="false" data-center="false" data-darg="true">
            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="width: 1620px; transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                    <div class="owl-item active" style="width: 510px; margin-right: 30px;">
                        <div class="card">
                            <div class="card-body p-0">
                                <div>
                                    <div class="title-menu">
                                        <h3>Breadfast</h3>
                                    </div>
                                    <!-- Get post News Query -->
                                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=discovery_menu&category_menu=breadfast'); ?>
                                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                                    <div class="menu-food">
                                        <h4 class="d-flex">
                                            <a href="<?php echo the_permalink(  ); ?>"><?php the_field('food') ?></a>
                                            <span class="col"></span>
                                            <span><?php the_field('money') ?></span>
                                        </h4>
                                        <p><?php the_field('content') ?></p>
                                    </div>
                                    <?php endwhile; wp_reset_postdata(); ?>
                                    <!-- Get post News Query -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 510px; margin-right: 30px;">
                        <div class="card">
                            <div class="card-body p-0">
                                <div>
                                    <div class="title-menu">
                                        <h3>Lunch</h3>
                                    </div>
									<!-- Get post News Query -->
                                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=discovery_menu&category_menu=lunch'); ?>
                                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                                    <div class="menu-food">
                                        <h4 class="d-flex">
                                            <a href="<?php echo the_permalink(  ); ?>"><?php the_field('food') ?></a>
                                            <span class="col"></span>
                                            <span><?php the_field('money') ?></span>
                                        </h4>
                                        <p><?php the_field('content') ?></p>
                                    </div>
                                    <?php endwhile; wp_reset_postdata(); ?>
                                    <!-- Get post News Query -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 510px; margin-right: 30px;">
                        <div class="card">
                            <div class="card-body p-0">
                                <div>
                                    <div class="title-menu">
                                        <h3>Dinner</h3>
                                    </div>
									<!-- Get post News Query -->
                                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=discovery_menu&category_menu=dinner'); ?>
                                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                                    <div class="menu-food">
                                        <h4 class="d-flex">
                                            <a href="<?php echo the_permalink(  ); ?>"><?php the_field('food') ?></a>
                                            <span class="col"></span>
                                            <span><?php the_field('money') ?></span>
                                        </h4>
                                        <p><?php the_field('content') ?></p>
                                    </div>
                                    <?php endwhile; wp_reset_postdata(); ?>
                                    <!-- Get post News Query -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                        aria-label="Previous">‹</span></button><button type="button" role="presentation"
                    class="owl-next"><span aria-label="Next">›</span></button></div>
            <div class="owl-dots disabled"></div>
        </div>
        <div class="m-t-60 text-center">
            <a href="http://templatecs.com/demo/template/deliki/html/home.html#" class="btn btn-lg">view all menu</a>
        </div>
    </div>
</section>