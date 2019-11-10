<section data-image-src="<?php echo get_template_directory_uri()?>/images/food-3327977_960_720.png"
    class="bg-offset bg-size-70 p-t-0"
    style="background-image: url(&quot;<?php echo get_template_directory_uri()?>/images/food-3327977_960_720.png&quot;);">
    <div class="container">
        <div class="row">
            <!-- Get post News Query -->
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=about_page'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
            <div class="col-md-12 col-lg-12">
                <div class="card card-5x m-t-150 bg-f p-40 p-xs-30 relative box-shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title">About Deli<strong class="main-color">ki</strong> </h2>
                        <h4><?php echo the_title(  ); ?></h4>
                        <p class="card-text"><?php echo the_content(  ); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- Get post News Query -->
           
        </div>
    </div>
</section>