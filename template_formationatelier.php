<?php
    /*template name:  Formation & Atelier*/

    // template-parts-> content_loop_formationatelier
?>
<?php
get_header();
?>
<div class="container">
    <main>
        <div class="row">
            <div class="col-md-9 formation_atelier">
                <?php if (get_the_ID()== 17) : ?>
                    <div class="espace_content">
                        <?php get_template_part( 'template-parts/content_loop_post');?>
                    </div>

                    <?php
                        $args = array('category_name' => "formation&Atelier",
                                'posts_per_page' => 20
                        );
                        $posts = get_posts($args);
                        get_template_part( 'template-parts/content_loop_formationatelier');
                    ?>
                <?php endif; ?>
            </div>
            <div class="col-md-3 col-sm-12 temoignages text-justify">
                <h2>Témoignages</h2>
                <?php get_template_part(    'template-parts/content_loop_temoignages');?>
            </div>
        </div>
    </main>
</div>
<?php
    get_footer();
?>
