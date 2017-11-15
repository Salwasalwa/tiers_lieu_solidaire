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
                    <h2>Événements</h2>
                <?php endif ?>
                <div class="">
                    <?php dynamic_sidebar( 'home_eventbrite' ); ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </main>
</div>
<?php
    get_footer();
?>
