<?php
foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
        <p><?php the_content(); ?></p>
        <p>
            <?php
            echo get_post_meta($post->ID, 'Horaires', true);
            ?>
        </p>

    </article>

<?php } ?>
