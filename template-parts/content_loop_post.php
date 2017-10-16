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
        <?php the_content(); ?>
    </article>

<?php } ?>
