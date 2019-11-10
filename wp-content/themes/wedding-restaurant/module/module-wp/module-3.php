<section class="cards cards-3x2 icns-round-100 color-3 m-0 bg-offset text-center"
    data-image-src="<?php echo get_template_directory_uri()?>/images/food-2863553_960_720.jpg"
    style="background-image: url(&quot;<?php echo get_template_directory_uri()?>/images/food-2863553_960_720.jpg&quot;);">
    <div class="container">
        <div class="block-title m-b-25">
            <h4 class="card-subtitle f-30 f-sm-25 m-b-15">Welcome to</h4>
            <h2 class="f-40 f-sm-30 line-default">Deli<strong class="main-color">ki</strong> Restaurant</h2>
        </div>
        <div class="row row-15">
            <!-- Get post News Query -->
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=welcome_to_home'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
            <div class="col-md-4">
                <div class="card box-shadow-sm border-1x">
                    <div class="icn icn-70 border-dotted card-icon m-b-5">
                        <i class="fa fa-cutlery"></i>
                    </div>
                    <div class="card-body p-t-20">
                        <h3 class="card-title">
                            <a href="<?php echo the_permalink(  ); ?>"><?php echo the_title(  ); ?></a>
                        </h3>
                        <p class="card-text"><?php echo the_content(  ); ?></p>
                        <a href="<?php echo the_permalink(  ); ?>" class="btn">read
                            more</a>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- Get post News Query -->
            <!-- Get post News Query -->
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=welcome_to_home&offset=1&3'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
            <div class="col-md-4">
                <div class="card main-bg box-shadow-sm color-f">
                    <div class="icn icn-70 border-dotted card-icon m-b-5">
                        <i class="fa fa-beer"></i>
                    </div>
                    <div class="card-body p-t-20">
                        <h3 class="card-title">
                            <a href="<?php echo the_permalink(  ); ?>"><?php echo the_title(  ); ?></a>
                        </h3>
                        <p class="card-text"><?php echo the_content(  ); ?></p>
                        <a  class="btn bg-f" href="<?php echo the_permalink(  ); ?>" class="btn">read
                            more</a>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- Get post News Query -->
            <!-- Get post News Query -->
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=welcome_to_home&offset=1&2'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
            <div class="col-md-4">
                <div class="card box-shadow-sm border-1x">
                    <div class="icn icn-70 border-dotted card-icon m-b-5">
                        <i class="fa fa-bullhorn"></i>
                    </div>
                    <div class="card-body p-t-20">
                        <h3 class="card-title">
                            <a href="<?php echo the_permalink(  ); ?>"><?php echo the_title(  ); ?></a>
                        </h3>
                        <p class="card-text"><?php echo the_content(  ); ?></p>
                        <a href="<?php echo the_permalink(  ); ?>" class="btn">read
                            more</a>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- Get post News Query -->
        </div>
    </div>
</section>