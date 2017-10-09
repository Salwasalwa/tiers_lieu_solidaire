<?php
    /*template name: page espace*/
    /* The template used for displaying page content
        Co-Working
        FabLab
        Espace Fablab
        Média-Lab
        À propos

        template-parts-> content_loop_post.
    */
?>
<?php
get_header();
?>
<div class="container">
    <main>
        <?php if (get_the_ID()== 6) : ?>
            <!-- Page Salle Multimedia -->
            <div class="row">
                <div class="col-md-12 img_espace">
                    <img src="http://placehold.it/1200x300" alt="salle_multimedia">
                </div>
            </div>
        <?php elseif (get_the_ID()== 10 ): ?>
            <!-- Page Co-working -->
            <div class="row">
                <div class="col-md-12 img_espace">
                    <img src="http://placehold.it/1200x300" width="1200" height="300" alt="salle_multimedia">
                </div>
            </div>
        <?php elseif (get_the_ID()== 12 ): ?>
            <!-- Page Fablab -->
            <div class="row">
                <div class="col-md-12 img_espace">
                    <img src="http://placehold.it/1200x300" alt="salle_multimedia">
                </div>
            </div>
        <?php elseif (get_the_ID()== 14 ): ?>
            <!-- Page MediaLab -->
            <div class="row">
                <div class="col-md-12 img_espace">
                    <img src="http://placehold.it/1200x300" alt="salle_multimedia">
                </div>
            </div>
        <?php endif; ?>
        <div class="row ">
            <div class="col-md-9 text-justify">
                <div class="espace_content">
                    <?php get_template_part( 'template-parts/content_loop_post');?>
                </div>
            </div>
            <div class="col-md-3 hidden-xs">
                
                <?php get_sidebar(); ?>
            </div>
        </div>
    </main>
</div>
<?php
    get_footer();
?>
