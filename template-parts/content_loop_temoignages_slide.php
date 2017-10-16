<?php
    $recentPosts = new WP_Query( array(
        'category_name' => "temoignages",
        'showposts' => 20
    ));
    $cont = 0;
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php while ($recentPosts->have_posts()): $recentPosts->the_post();
            $cont = $cont+1;
            if ($cont <= 1) :
        ?>
            <div class="item active ">
                <blockquote>

                    <p><?php the_content(); ?></p>
                    <p class="temoignage_nom">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <?php
                            echo get_post_meta($post->ID, 'temoignage_nom', true);
                        ?>
                    </p>

                </blockquote>
            </div>
            <?php else :?>
                <div class="item">
                    <blockquote>


                        <p><?php the_content(); ?></p>
                        <p class="temoignage_nom">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <?php
                                echo get_post_meta($post->ID, 'temoignage_nom', true);
                            ?>
                        </p>

                    </blockquote>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
</div>
