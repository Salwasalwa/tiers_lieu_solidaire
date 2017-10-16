<div class="flex">

<?php
foreach ($posts as $post) {
    setup_postdata($post);
    $tags = wp_get_post_tags($post->ID);
    ?>
    <div class="col-md-4 col-sm-6">
        <article>
            <a href="<?php the_permalink(); ?>">
                <figure>
                    <?php the_post_thumbnail(); ?>
                </figure>
                <p>
                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    <?php
                    echo get_post_meta($post->ID, 'Horaires', true);
                    ?>
                </p>
                <h3 id=""><?php the_title(); ?></h3>

            </a>
        </article>
    </div>

<?php } ?>
</div>
