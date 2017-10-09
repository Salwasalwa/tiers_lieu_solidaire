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
                <article class="">
                    <p>Une bonne ambiance !!!</p>
                    <p class="temoignage_nom"><i class="fa fa-chevron-right" aria-hidden="true"></i>Plop</p>
                </article>
                <article class="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua!!!.</p>
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
