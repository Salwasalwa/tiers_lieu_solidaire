<?php
    $args = array(
        'category_name' => "materiel",
        'order' => 'ASC',
        'posts_per_page'   => 30,
    );
    $posts = get_posts($args);
    $cont = 0;
?>
<?php
    foreach ($posts as $post) {
        setup_postdata( $post );
        $tags = wp_get_post_tags($post->ID);
        $cont = $cont+1;
        ?>
        <?php if ($cont%2 == 0) :?>
            <div class="article_materiel">
                <figure>
                    <?php the_post_thumbnail(); ?>
                </figure>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </article>
            </div>
        <?php else :?>
            <div class="article_materiel">
                <article>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </article>
                <figure>
                    <?php the_post_thumbnail(); ?>
                </figure>
            </div>
        <?php endif;
    }
?>
