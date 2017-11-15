<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiers Lieu</title>

    <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:600,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <?php wp_head(); ?>
 </head>

<body>
    <div class="container">
        <header class="row">
            <?php require_once('wp-bootstrap-navwalker.php'); ?>

            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>">Tiers Lieu Solidaire</a>

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a class="navbar-brand" href="#"><img src="./static/img/brand-white.png" alt=""></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <?php
                    $args = array (
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'bs-example-navbar-collapse-1',
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'menu' => 'navbar_header',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker());

                        wp_nav_menu($args)
                    ?>
                </div>
            </div>
        </header>
    </div>
