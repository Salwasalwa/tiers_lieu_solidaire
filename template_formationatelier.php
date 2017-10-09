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
                    <h2 class="">Formation</h2>
                    <?php
                        $args = array('category_name' => "formation&Atelier",
                                'posts_per_page' => 15
                        );
                        $posts = get_posts($args);
                        get_template_part( 'template-parts/content_loop_formationatelier');
                    ?>
                <?php endif; ?>
            </div>
            <div class="col-md-3 temoignages text-justify">
                <h2>Témoignages</h2>
                <article class="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <p class="temoignage_nom"><i class="fa fa-chevron-right" aria-hidden="true"></i>JK</p>
                </article>
                <article class="">
                    <p>Quoi Tier Lieu Solidaire? Une 2ème Maison!!!.</p>
                    <p class="temoignage_nom"><i class="fa fa-chevron-right" aria-hidden="true"></i>JP</p>
                </article>
                <article class="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p class="temoignage_nom"><i class="fa fa-chevron-right" aria-hidden="true"></i>JP</p>
                </article>
            </div>
        </div>
    </main>
</div>
<?php
    get_footer();
?>
