<?php
    /*template name: page espace*/
    /* The template used for displaying page content
        Salle Multimédia.
        Co-Working
        Espace Fablab
        Média-Lab
        Maison Digitale
        À propos
        Mention Légales
        
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
            <div class="row hidden-xs">
                <div class="col-md-12 img_espace">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/tiers.png" alt="salle_multimedia">
                </div>
            </div>
        <?php elseif (get_the_ID()== 10 ): ?>
            <!-- Page Co-working -->
            <div class="row hidden-xs">
                <div class="col-md-12 img_espace">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/9.jpg" width="1200" height="300" alt="salle_multimedia">
                </div>
            </div>
        <?php elseif (get_the_ID()== 12 ): ?>
            <!-- Page Fablab -->
            <div class="row hidden-xs">
                <div class="col-md-12 img_espace">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/1.jpg" alt="salle_multimedia">
                </div>
            </div>
        <?php elseif (get_the_ID()== 14 ): ?>
            <!-- Page MediaLab -->
            <div class="row hidden-xs">
                <div class="col-md-12 img_espace">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/6.jpg" alt="salle_multimedia">
                </div>
            </div>
        <?php elseif (get_the_ID()== 261 ): ?>
            <!-- Page Maison Digitale -->
            <div class="row hidden-xs">
                <div class="col-md-12 img_espace">
                    <!-- <img src= "<?php #echo get_bloginfo( 'template_directory' ); ?>/static/img/6.jpg" alt="Maison_Digitale"> -->
                </div>
            </div>
        <?php endif; ?>
        <div class="row ">
            <div class="col-md-9 text-justify">
                <div class="espace_content">
                    <?php get_template_part( 'template-parts/content_loop_post');?>
                </div>
            </div>

            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </main>
</div>
<?php
    get_footer();
?>
