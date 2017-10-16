<?php
foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <figure>
            <?php the_post_thumbnail(); ?>
        </figure>

        <p><?php the_content(); ?></p>

        <p>
            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
            <?php
                echo get_post_meta($post->ID, 'Date', true);
            ?>
        </p>
    </article>

<?php } ?>
