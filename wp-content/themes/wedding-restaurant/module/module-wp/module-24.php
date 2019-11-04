<section class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 cards cards-pad-30 cards-border">
                <div class="m-r-20 m-r-sm-0">
                    <div class="card">
                        <div>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                                 class="card-top-img">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">
                                <a
                                    href="http://templatecs.com/demo/template/deliki/html/single_blog.html#"><?php the_title( ) ?></a>
                            </h2>
                            <p class="card-date"><?php the_time('F jS, Y'); ?></p>
                            <p><?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wedding-restaurant' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wedding-restaurant' ),
			'after'  => '</div>',
		) );
		?></p>
                            