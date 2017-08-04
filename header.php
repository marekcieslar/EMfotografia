<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header class="page-header">
    <div class="container"> 
        <a href="<?php echo esc_url( home_url( '/') ); ?>" title="EMfotografia strona główna, main page"><object class="header-logo" data="<?php echo get_template_directory_uri(); ?>/logo/logoEM-web.svg" type="image/svg+xml"></object></a>
        <nav>
            <ul>
                <li>O nas</li>
                <li>Galeria</li>
                <li>Kontakt</li>
            </ul>
        </nav>
    </div>
</header>
