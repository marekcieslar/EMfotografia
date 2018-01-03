<?php get_header(); ?>

<main>
    <header>

    </header>

    </section>

    <section id='content'>
        <div class="container">

        <div class="article-gallery">
            <a href="<?php echo get_theme_mod('emfotografia_portfolio_1_link', '#'); ?>">
                <div class="image" style="background-image: url(<?php echo get_theme_mod('emfotografia_portfolio_1_img'); ?>);">
                    <div class="info">
                        <h3><?php echo get_theme_mod('emfotografia_portfolio_1_title'); ?></h3>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_theme_mod('emfotografia_portfolio_2_link', '#'); ?>">
                <div class="image" style="background-image: url(<?php echo get_theme_mod('emfotografia_portfolio_2_img'); ?>);">
                    <div class="info">
                        <h3><?php echo get_theme_mod('emfotografia_portfolio_2_title'); ?></h3>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_theme_mod('emfotografia_portfolio_3_link', '#'); ?>">
                <div class="image" style="background-image: url(<?php echo get_theme_mod('emfotografia_portfolio_3_img'); ?>);">
                    <div class="info">
                        <h3><?php echo get_theme_mod('emfotografia_portfolio_3_title'); ?></h3>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_theme_mod('emfotografia_portfolio_4_link', '#'); ?>">
                <div class="image" style="background-image: url(<?php echo get_theme_mod('emfotografia_portfolio_4_img'); ?>);">
                    <div class="info">
                        <h3><?php echo get_theme_mod('emfotografia_portfolio_4_title'); ?></h3>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_theme_mod('emfotografia_portfolio_5_link', '#'); ?>">
                <div class="image" style="background-image: url(<?php echo get_theme_mod('emfotografia_portfolio_5_img'); ?>);">
                    <div class="info">
                        <h3><?php echo get_theme_mod('emfotografia_portfolio_5_title'); ?></h3>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_theme_mod('emfotografia_portfolio_6_link', '#'); ?>">
                <div class="image" style="background-image: url(<?php echo get_theme_mod('emfotografia_portfolio_6_img'); ?>);">
                    <div class="info">
                        <h3><?php echo get_theme_mod('emfotografia_portfolio_6_title'); ?></h3>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_theme_mod('emfotografia_portfolio_7_link', '#'); ?>">
                <div class="image" style="background-image: url(<?php echo get_theme_mod('emfotografia_portfolio_7_img'); ?>);">
                    <div class="info">
                        <h3><?php echo get_theme_mod('emfotografia_portfolio_7_title'); ?></h3>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_theme_mod('emfotografia_portfolio_8_link', '#'); ?>">
                <div class="image" style="background-image: url(<?php echo get_theme_mod('emfotografia_portfolio_8_img'); ?>);">
                    <div class="info">
                        <h3><?php echo get_theme_mod('emfotografia_portfolio_8_title'); ?></h3>
                    </div>
                </div>
            </a>
        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
