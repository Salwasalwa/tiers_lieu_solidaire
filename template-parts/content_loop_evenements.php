<?php
    $args = array(
        'category_name' => "evenements",
        'order' => 'ASC',
        'posts_per_page'   => 16,
    );
    $posts = get_posts($args);
?>
<div class="flex">
<?php
    foreach ($posts as $post) {
        setup_postdata( $post );
        $tags = wp_get_post_tags($post->ID);
        ?>
            <div class="col-md-4 col-sm-6 text-center">
                <article>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                        <h3><?php the_title(); ?></h3>
                    </a>

                </article>
            </div>

        <?php
    }
?>
</div>
