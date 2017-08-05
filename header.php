<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<header class="page-header" id="page-header">
    <div class="container"> 
        <a href="<?php echo esc_url( home_url( '/') ); ?>" title="EMfotografia strona główna, main page"><object class="header-logo" data="<?php echo get_template_directory_uri(); ?>/logo/logoEM-web.svg" type="image/svg+xml"></object></a>
        <nav>
            <?php
                $args = array(
                    'theme_location' => 'primary'
                );
                wp_nav_menu();
            ?>
            <button class="hamburger" id="hamburger">
                <i class="material-icons menu-icon">menu</i>
                <i class="material-icons clear-icon">clear</i>
            </button>
        </nav>
    </div>
</header>
