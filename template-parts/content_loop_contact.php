<?php
foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
        <p><?php the_title(); ?></p>
        <p>
            <i class="fa fa-map-marker" aria-hidden="true"></i>Adresse :
            <?php
            echo get_post_meta($post->ID, 'Adresse', true);
            ?>
        </p>
        <p>
            <i class="fa fa-phone" aria-hidden="true"></i>Tél :
            <?php
            echo get_post_meta($post->ID, 'Tél', true);
            ?>
        </p>

    </article>

<?php } ?>
