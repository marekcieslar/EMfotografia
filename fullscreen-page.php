<?php 
/**
 * Template Name: Full Screen Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */ 
?>

<?php get_header(); ?>

<main>
    <header>

    </header>

    <section id='rotator' class="rotator">

    </section>

    <section id='content'>
        <div class="container">
            <h2>Hello world!</h2>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>