<?php get_header(); ?>

<div class="container accueil">
    <?php if (get_the_ID()== 109) : ?>
    <div class="row">
        <div class="col-md-9 nopadding">
            <div id="carousel-example-generic" class="carousel slide slide_header" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active ">
                        <div class="mllorange">
                            <div class=" flex_img">
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/tiersLieu.JPG" alt="First slide">
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/tiers.jpg" alt="First slide" width="700px" height="300px">
                            </div>
                        </div>
                        <div class="carousel-caption">
                            <h3>Horaires</h3>
                            <p>Du Mardi au Samedi</p>
                            <p>9h-12h 14h-18h</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="flex_img">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/12.jpeg" alt="Second slide">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/ partenaire/logo-orange.png" alt="Second slide" width="700px" height="300px">
                        </div>
                        <div class="carousel-caption">
                            <h3>Second slide</h3>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/10.jpg" alt="Third slide" width="700px" height="300px">
                        <div class="carousel-caption">
                            <h3>Third slide</h3>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/10.jpg" alt="Third slide">
                        <div class="carousel-caption">
                            <h3>4 slide</h3>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                    href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                    </span>
                </a>
            </div>
            <main>
                <div class="row orderindex">
                    <div class="col-md-4 partenaires">
                        <?php get_template_part( 'template-parts/content_loop_partenaire');?>
                    </div>

                    <div class="col-md-8">
                        <div class="tiers_lieu text-justify">
                            <?php get_template_part( 'template-parts/content_loop_post');?>
                        </div>
                        <div class="temoignages ">
                            <h2 class="text-center">Témoignages</h2>
                            <?php get_template_part( 'template-parts/content_loop_temoignages_slide');?>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="col-md-3 nopadding">
            <div class="facebook">
                <?php dynamic_sidebar( 'home_facebook' ); ?>
            </div>
            <main>
                <div class="row">

                    <div class="evenements text-center">
                        <!-- Derniers articles -->
                        <div class="derniers_articles flex">
                            <?php dynamic_sidebar( 'derniers_articles_accuiel' ); ?>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php get_footer();?>
