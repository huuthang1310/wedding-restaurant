<section class="banner p-0">
    <!-- Get post News Query -->
    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=image_home'); ?>
    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
        <div class="card bg-offset card-5x"
            data-image-src="<?php echo $featured_img_url ?>"
            style="background-image: url(&quot;<?php echo $featured_img_url ?>&quot;);">
            <div></div>
            <div class="card-img-overlay">
                <div class="container">
                    <div class="max-w-700">
                        <h4 class="card-subtitle f-30 color-f f-sm-25 m-b-15">Save up to 25%</h4>
                        <h1 class="card-title f-sm-40 f-xs-35 f-weight-900"><?php echo the_title(  ); ?><strong
                                class="main-color"></strong> </h1>
                        <h6 class="card-text max-w-800 f-20 f-sm-13"><?php echo the_content(  ); ?></h6>
                        <a href=""
                            class="btn btn-lg m-t-50">discovery menu</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
    <!-- Get post News Query -->

</section>