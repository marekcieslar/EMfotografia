<?php
function emfotografia_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'emfotografia_resources');

include_once ( 'functions-rotator.php' );
include_once ( 'functions-portfolio.php' );
include_once ( 'functions-footer.php' );

?>