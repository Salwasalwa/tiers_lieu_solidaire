<div class="flex">

<?php
foreach ($posts as $post) {
    setup_postdata($post);
    $tags = wp_get_post_tags($post->ID);
    ?>
    <div class="col-md-4 col-sm-6">
        <article class ="article_formation">
            <a href="<?php the_permalink(); ?>">
                <figure class="">
                    <?php the_post_thumbnail(); ?>
                </figure>
                <h3><?php the_title(); ?></h3>
                <p class="calendar">
                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    <?php
                    echo get_post_meta($post->ID, 'Horaires', true);
                    ?>
                </p>
            </a>
        </article>
    </div>

<?php } ?>
</div>
