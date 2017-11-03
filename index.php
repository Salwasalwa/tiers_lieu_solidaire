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
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/tiers.jpg" alt="First slide">
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
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/ partenaire/logo-orange.png" alt="Second slide">
                        </div>
                        <div class="carousel-caption">
                            <h3>Second slide</h3>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/10.jpg" alt="Third slide">
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
                <div class="row">
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
            <div class="facebook ">
                <iframe name="f2b7e3377692d4" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like_box Facebook Social Plugin" style="border: medium none; visibility: visible; width: 100%; height: 299px;" src="https://www.facebook.com/v2.0/plugins/like_box.php?app_id=488390501239538&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FK6RbmRhg2m2.js%3Fversion%3D42%23cb%3Dfd9b123aa13738%26domain%3D127.0.0.1%26origin%3Dhttp%253A%252F%252F127.0.0.1%253A8080%252Ff26ad644901cdbe%26relation%3Dparent.parent&amp;container_width=575&amp;force_wall=false&amp;height=560&amp;href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FWeblizar%2F1440510482872657&amp;locale=en_US&amp;sdk=joey&amp;show_border=true&amp;show_faces=true&amp;stream=false&amp;width=292" width="100%" height="299px" frameborder="0"></iframe>

            </div>
            <main>
                <div class="row">

                    <div class="evenements text-center">
                        <!-- Derniers articles -->
                        <?php get_template_part( 'template-parts/content_loop_derniersarticles');?>
                    </div>
                </div>

            </main>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php get_footer();?>
