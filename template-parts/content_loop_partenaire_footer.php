<?php
    $recentPosts = new WP_Query( array(
        'category_name' => "partenaire",
        'showposts' => 20,
        'orderby'          => 'date',
        'order'            => 'ASC',
    ));
?>
<ul>
    <?php while ($recentPosts->have_posts()): $recentPosts->the_post();?>
        <div class="col-md-12 col-sm-6">
            <li>

                <a href="<?php echo get_post_meta($post->ID, 'siteweb', true) ?>" target="_blank">
                    <?php the_title();?>
                </a>

            </li>
        </div>
    <?php endwhile; ?>
</ul>
