<?php
    /*template name: materiels*/
    /* The template used for displaying page content
        materiels FabLab
    */
?>
<?php
get_header();
?>
<div class="container">
    <main>
        <?php if (get_the_ID()== 13) : ?>
            <div class="row ">
                <div class="col-md-9 text-justify">
                    <?php get_template_part( 'template-parts/content_loop_materiel');?>
                </div>

                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <?php endif; ?>
    </main>
</div>
<?php
    get_footer();
?>
