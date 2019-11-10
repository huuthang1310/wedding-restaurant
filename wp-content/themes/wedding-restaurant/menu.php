<?php /* Template Name: Menu */ ?>
<?php get_header(); ?>
		<div id="wrap-body">
			<section class="page-title">
				<div class="card bg-offset bg-fixed h250" data-image-src="<?php echo get_template_directory_uri()?>/images/kawin-haraffsai-75421.jpg" style="background-image: url(&quot;<?php echo get_template_directory_uri()?>/images/kawin-haraffsai-75421.jpg&quot;);">
					<div class="card-img-overlay">
						<div class="container">
							<h1 class="">menu</h1>
						</div>
					</div>
				</div>
			</section>
			<section class="cards cards-pad-40 cards-shadow-sm cards-border m-0 bg-fa">
				<div class="container">
					<div class="block-title">
						<h4 class="card-subtitle">Welcome to</h4>
						<h2 class="line-default">Discovery menu</h2>
					</div>
					<div class="row row-15">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body p-0">
									<div class="title-menu">
										<h3>Sea food</h3>
									</div>
									<img src="<?php echo get_template_directory_uri()?>/images/seafood-2187507_960_720.jpg" alt="image" class="m-t-25">
									<!-- Get post News Query -->
                                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=discovery_menu&category_menu=salad'); ?>
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
						<div class="col-md-6">
							<div class="card">
								<div class="card-body p-0">
									<div class="title-menu">
										<h3>Salad</h3>
									</div>
									
									<img src="<?php echo get_template_directory_uri()?>/images/restaurant-1092728_960_720.jpg" alt="image" class="m-t-25">
									<!-- Get post News Query -->
                                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=discovery_menu&category_menu=sea-food'); ?>
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
						<div class="col-md-6 col-lg-4">
							<div class="card">
								<div class="card-body p-0">
									<div class="title-menu">
										<h3>Pizza</h3>
									</div>
								
									<img src="<?php echo get_template_directory_uri()?>/images/pizza-2000614_960_720.jpg" alt="image" class="m-t-25">
									<!-- Get post News Query -->
                                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=discovery_menu&category_menu=pizza'); ?>
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
						<div class="col-md-6 col-lg-4">
							<div class="card">
								<div class="card-body p-0">
									<div class="title-menu">
										<h3>Soup</h3>
									</div>
									
									<img src="<?php echo get_template_directory_uri()?>/images/meal-918639_1280.jpg" alt="image" class="m-t-25">
									<!-- Get post News Query -->
                                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=discovery_menu&category_menu=soup'); ?>
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
						<div class="col-md-6 col-lg-4">
							<div class="card">
								<div class="card-body p-0">
									<div class="title-menu">
										<h3>Desert</h3>
									</div>
					
									<img src="<?php echo get_template_directory_uri()?>/images/cake-1868788_960_720.jpg" alt="image" class="m-t-25">
									<!-- Get post News Query -->
                                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=discovery_menu&category_menu=desert'); ?>
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
			</section>
		</div>
	<?php get_footer(); ?>