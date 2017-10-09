<?php
    $recentPosts = new WP_Query( array(
        'category_name' => "evenements",
        'showposts' => 8
    ));
?>
<div class="derniers_articles">
    <?php while ($recentPosts->have_posts()): $recentPosts->the_post();?>
        <div class="col-md-3 col-sm-6">
            <article class="">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                    <h3><?php the_title(); ?></h3>
                </a>
                <p>
                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    <?php
                        echo get_post_meta($post->ID, 'Date', true);
                    ?>
                </p>
            </article>
        </div>
    <?php endwhile; ?>
</div>
