<?php get_header(); ?>

<main>
    <header>

    </header>

    <section id='rotator' class="rotator">

    </section>
    <button id='btn-stop'>STOP</button>

    <section id='content'>
        <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
