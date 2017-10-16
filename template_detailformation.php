<?php
    /*template name: Detail Formation & Atelier
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
                <div class="detail_formation">
                    <?php get_template_part( 'template-parts/content_loop_detailformation');?>
                </div>
            </div>
            <div class="col-md-3 temoignages text-justify">
                <h2>Témoignages</h2>
                <?php get_template_part( 'template-parts/content_loop_temoignages');?>
            </div>
        </div>
    </main>
</div>
<?php
    get_footer();
?>
