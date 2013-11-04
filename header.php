<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/main.css">
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
            <header role="banner">
                <div id="logo">
                    <a href="<?php bloginfo( 'siteurl' ); ?>" title="Retournez à l'accueil">
                        <h1><?php bloginfo( 'name' ); ?></h1>
                        <h2 class="job"><?php bloginfo( 'description' ); ?></h2>
                    </a>
                </div>
                    <?php 
                    wp_nav_menu( array('theme_location'  => 'primary',
                        'menu'  => 'Primary Menu','container' => 'nav','items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',)); // ou wp_nav_menu( array('theme_location'  => 'primary')
                    ?>
            </header><!-- END HEADER -->
