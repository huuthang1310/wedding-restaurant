
<?php $queryObject = new  Wp_Query( array(
    'post_type' => 'post',
    ));?>
    <?php if ( $queryObject->have_posts() ) :
    while ( $queryObject->have_posts() ) :
        $queryObject->the_post(); ?>
<div class="card card-5x">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
    <div class="card-body">
        <h2 class="card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <p class="card-date"><?php the_time('F j, Y'); ?></p>
        <p><?php echo $rest = substr(get_the_excerpt(), 0, 400 ); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn">read more</a>
    </div>
</div>
<?php endwhile;?>
<?php endif; ?>
