<?php
    /*template name: Detail Evenements
    template post type: post
    */

    // template-parts-> content_loop_detailformation
?>
<?php
get_header();
?>
<div class="container">
    <main>
        <div class="row ">
            <div class="col-md-9 text-justify">
                <div class="espace_content">

                    <?php get_template_part( 'template-parts/content_loop_detailevenements');?>
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
