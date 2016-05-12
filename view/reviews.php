<?php if ( $my_query->have_posts() ) {
    while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <div class="comment__item">
            <div class="comment__item_thumb">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="comment__item_text">
                <h5><b><?php the_title(); ?></b><br><?php echo get_post_meta( get_the_ID(), "city", 1 ); ?></h5>
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile;
}
wp_reset_query(); ?>