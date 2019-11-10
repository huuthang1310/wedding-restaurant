<section class="cards">
    <div class="container">
        <div class="block-title">
            <h4 class="card-subtitle">Gallery</h4>
            <h2 class="line-default">Our Gallery</h2>
        </div>
        <div class="row row-15">
            <!-- Get post News Query -->
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=our_gallery'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
            <div class="col-sm-6 col-md-4">
                <div class="card hover-img hover-img-top-bottom">
                    <a class="image-zoom card-img" href="<?php echo $featured_img_url ?>"><img
                            src="<?php echo $featured_img_url ?>" alt="image"></a>
                    <div class="card-img-overlay">
                        <i class="fa fa-search-plus f-35"></i>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- Get post News Query -->

        </div>
    </div>
</section>