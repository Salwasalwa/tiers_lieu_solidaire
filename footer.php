<div class="container">
    <footer>
        <div id="footer-sidebar1">
            <?php if ( !function_exists('dynamic_sidebar') ||   !dynamic_sidebar(1) ) : ?>
            <?php endif; ?>
        </div>
        <div class="row ">
            <div class="col-sm-6 col-md-3">
                <h3><i class="fa fa-chevron-right" aria-hidden="true"></i>Contact</h3>

                <?php
                    $args = array('category_name' => "contact",
                            'posts_per_page' => 1
                    );
                    $posts = get_posts($args);
                    get_template_part( 'template-parts/content_loop_contact');
                ?>

                <h3><i class="fa fa-chevron-right" aria-hidden="true"></i>Horaires</h3>
                <?php
                    $args = array('category_name' => "horaires",
                            'posts_per_page' => 1
                    );
                    $posts = get_posts($args);
                    get_template_part( 'template-parts/content_loop_horaires');
                ?>
            </div>
            <div class="col-sm-6 col-md-3">
                <h3><i class="fa fa-chevron-right" aria-hidden="true"></i>Liens Utils</h3>
                <?php wp_nav_menu(array(
                    'menu' => 'liens_utils'
                ));?>

            </div>
            <div class="col-sm-12 col-md-3 partenaire">
                <h3><i class="fa fa-chevron-right" aria-hidden="true"></i>Partenaire</h3>

                <?php get_template_part( 'template-parts/content_loop_partenaire_footer');?>
            </div>
            <div class="col-sm-6 col-md-3">
                <h3><i class="fa fa-chevron-right" aria-hidden="true"></i>Newsletter</h3>

                <form method="post">
                   <input type="email" name="Email" placeholder="Votre E-Mail">
                   <?php
                       if (!isset($_POST['Email'])) {
                           $wpdb->insert(
                               'Emails',  array(   'Email' => $_POST['Email'])
                            );
                       } ?>
                   <button type="submit" name="button">OK</button>
                </form>
        
                <h3><i class="fa fa-chevron-right" aria-hidden="true"></i>follow us</h3>
                <?php wp_nav_menu(array(
                    'menu' => 'social'
                ));?>

            </div>
        </div>
        <div class="row mentions">
            <p class="text-center">© 2017 <a href="<?php bloginfo('url'); ?>/index.php/mention-legales/">Mentions Légales</a></p>
        </div>
    </footer>
</div>
</body>
</html>
