<div class="flex">

<?php
foreach ($posts as $post) {
    setup_postdata($post);
    $tags = wp_get_post_tags($post->ID);
    ?>
    <div class="col-md-4 col-sm-6">
        <article class ="article_formation">
            <a href="<?php the_permalink(); ?>">
                <figure class="">
                    <?php the_post_thumbnail(); ?>
                </figure>

                <h3>
                    <?php echo $txt = cutString(get_the_title(), 0, 30, '...'); ?>
                    <!-- j’ai appelé a la function ‘cutString’
                    Comme maximo 30 caracter de titre et après ajouter trois points c’est superior. -->
                </h3>
                <div class="calendar">
                    <p class="">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                        <?php
                        echo get_post_meta($post->ID, 'Horaires', true);
                        ?>
                    </p>

                </div>
            </a>
        </article>
    </div>

<?php } ?>
</div>
