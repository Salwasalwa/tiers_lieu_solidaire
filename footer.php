<div class="container">
    <footer>
        <div id="footer-sidebar1">
            <?php if ( !function_exists('dynamic_sidebar') ||   !dynamic_sidebar(1) ) : ?>
            <?php endif; ?>
        </div>
        <div class="row ">
            <div class="col-sm-6 col-md-3">
                <h3 class=""><i class="fa fa-chevron-right" aria-hidden="true"></i>Contact</h3>
                <p>Tiers Lieu Solidaire</p>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i>Adresse : Place du Foirail</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i>Tél : 04 66 42 61 47</p>
                <h3 class=""><i class="fa fa-chevron-right" aria-hidden="true"></i>Horaires</h3>
                <p>Du Mardi au Samedi</p>
                <p>9h-12h 14h-18h</p>

            </div>
            <div class="col-sm-6 col-md-3">
                <h3 class=""><i class="fa fa-chevron-right" aria-hidden="true"></i>Liens Utils</h3>
                <?php wp_nav_menu("liens_utils");?>
            </div>
            <div class="col-sm-6 col-md-3">
                <h3 class=""><i class="fa fa-chevron-right" aria-hidden="true"></i>Partenaire</h3>

                <p><a href="#"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/maisonEmploi.jpeg" alt="maisonEmploi"></a></p>

                <p><a href="http://www.mende.fr/"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/mende_mairie.jpg" alt="mairieMende"></a></p>

                <p><a href="#"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/img/lozerDeveloppement.jpeg" alt="lozerDevlop"></a></p>
            </div>
            <div class="col-sm-6 col-md-3">
                <h3 class=""><i class="fa fa-chevron-right" aria-hidden="true"></i>Newsletter</h3>
                <?php

                    $wpdb->insert(
                        'Emails',
                            array(
                        'Email' => $_GET['Email'])
                    );
                    echo '<form>';
                    echo '<input class="text-center" type="email" name="Email" value="" placeholder="Votre E-Mail">';
                    echo '<button type="submit" name="submit">OK</button>';
                    echo '</form>';
                ?>

                <h3 class=""><i class="fa fa-chevron-right" aria-hidden="true"></i>follow us</h3>
                <ul id="nav_social">
                    <li>
                    <a href="#" target="blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                    <a href="#" target="blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                    <a href="#" target="blank"><i class="fa fa-google-plus-official"></i></a>
                    </li>
                    <li>
                    <a href="#" target="blank"><i class="fa fa-youtube-play"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mentions">
            <p class="text-center">© 2017<a href="#"></a>Mentions Légales</p>
        </div>
    </footer>
</div>
</body>
</html>
