<footer>
    <div class="container">
        <div class="footer-column">
            <h2>
<?php
echo get_theme_mod('emfotografia_footer1_title', 'emfotografia.eu');
?>
            </h2>
            <p>
<?php
echo get_theme_mod('emfotografia_footer1_description', 'emfotografia.eu');
?>
            </p>
        </div>
    </div>
</footer>
<? if (is_front_page()): ?>
<script>
    let intervalTime = <?php echo get_theme_mod('emfotografia_rotator_interval', 4500); ?>;
    let photos = [];
    if ( <?php echo '"'.get_theme_mod('emfotografia_rotator_1_img').'"'; ?> ) {
        photos.push({
            title: 'title',
            img: <?php echo '"'.get_theme_mod('emfotografia_rotator_1_img').'"'; ?>
        });
    }
    if ( <?php echo '"'.get_theme_mod('emfotografia_rotator_2_img').'"'; ?> ) {
        photos.push({
            title: 'title',
            img: <?php echo '"'.get_theme_mod('emfotografia_rotator_2_img').'"'; ?>
        });
    }
    if ( <?php echo '"'.get_theme_mod('emfotografia_rotator_3_img').'"'; ?> ) {
        photos.push({
            title: 'title',
            img: <?php echo '"'.get_theme_mod('emfotografia_rotator_3_img').'"'; ?>
        });
    }
    if ( <?php echo '"'.get_theme_mod('emfotografia_rotator_4_img').'"'; ?> ) {
        photos.push({
            title: 'title',
            img: <?php echo '"'.get_theme_mod('emfotografia_rotator_4_img').'"'; ?>
        });
    }
    if ( <?php echo '"'.get_theme_mod('emfotografia_rotator_5_img').'"'; ?> ) {
        photos.push({
            title: 'title',
            img: <?php echo '"'.get_theme_mod('emfotografia_rotator_5_img').'"'; ?>
        });
    }
    if ( <?php echo '"'.get_theme_mod('emfotografia_rotator_6_img').'"'; ?> ) {
        photos.push({
            title: 'title',
            img: <?php echo '"'.get_theme_mod('emfotografia_rotator_6_img').'"'; ?>
        });
    }
    if ( <?php echo '"'.get_theme_mod('emfotografia_rotator_7_img').'"'; ?> ) {
        photos.push({
            title: 'title',
            img: <?php echo '"'.get_theme_mod('emfotografia_rotator_7_img').'"'; ?>
        });
    }
</script>
<?php endif ?>

<script src="<?php echo get_template_directory_uri(); ?>/app.js"></script>
<?php if (is_front_page()) : ?> 
    <script src="<?php echo get_template_directory_uri(); ?>/app-rotator.js"></script>
<?php endif ?>
<?php wp_footer(); ?>
</body>
</html>
