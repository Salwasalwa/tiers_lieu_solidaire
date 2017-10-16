<?php
    /*template name:  evenements*/
?>
<?php
get_header();
?>
<div class="container">
    <main>
        <div class="row">
            <div class="col-md-9 evenements">
                <?php if (get_the_ID()== 69) : ?>
                    <h2>Événemens</h2>
                    <?php get_template_part( 'template-parts/content_loop_evenements');?>
                <?php endif ?>
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
