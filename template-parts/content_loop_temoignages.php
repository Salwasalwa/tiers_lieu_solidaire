<?php
    $recentPosts = new WP_Query( array(
        'category_name' => "temoignages",
        'showposts' => 4
    ));
?>
<div>
    <?php while ($recentPosts->have_posts()): $recentPosts->the_post();?>
        <div class="col-md-12 col-sm-6">
            <article>
                <p><?php the_content(); ?></p>

                <p class="temoignage_nom">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <?php
                        echo get_post_meta($post->ID, 'temoignage_nom', true);
                    ?>
                </p>
            </article>
        </div>
    <?php endwhile; ?>
</div>
