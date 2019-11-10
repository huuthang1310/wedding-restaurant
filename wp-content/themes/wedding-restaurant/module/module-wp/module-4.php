<section>
    <div class="container">
        <div class="bg-offset bg-size-80"
            data-image-src="<?php echo get_template_directory_uri()?>/images/food-3327977_960_720.png"
            style="background-image: url(&quot;<?php echo get_template_directory_uri()?>/images/food-3327977_960_720.png&quot;);">
            <div class="row">
                <div class="col-md-8 col-lg-6 f-right">
                    <div class="bg-f p-40 p-xs-20 card box-shadow-sm border-1x">
                        <div class="card-body">
                            <div>
                                <div class="block-title m-b-50">
                                    <h4 class="card-subtitle">Sale up to 20%</h4>
                                    <h2 class="line-default f-30">week's special</h2>
                                </div>
                                <!-- Get post News Query -->
                                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=discovery_menu&category_menu=weeks-special'); ?>
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
    </div>
</section>