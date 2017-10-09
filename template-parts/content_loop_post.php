<?php
foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
    <article class="">
        <h2><?php the_title(); ?></h2>
        <figure>
            <?php the_post_thumbnail(); ?>
        </figure>
        <p><?php the_content(); ?></p>
    </article>

<?php } ?>
