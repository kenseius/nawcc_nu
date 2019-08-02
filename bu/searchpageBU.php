<!--
============================================================

     PAGE TEMPLATE
    ==============================

        1. HERO - Background Image pulled from "Featured Image"
        2. CONTENT - article, title, subtitle, metadata, content

============================================================
-->

<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>
    
    <header class="hero hero_color hero_loggedInPages" style="background-color:#eaeaea;">
        <h1><?php the_title(); ?></h1>   
        <p class="lead"><?php echo get_search_query(); ?></p>
    </header>   

    <section class="post_content SEARCH-TEMPLATE">
        <p class="lead"><?php echo get_search_query(); ?></p>
        <?php get_search_form(); ?>   

        <?php if ( have_posts() ) : ?>
 
            <h4>
                <?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?>
            </h4>

            <?php shape_content_nav( 'nav-above' ); ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'search' ); ?>

            <?php endwhile; ?>

            <?php shape_content_nav( 'nav-below' ); ?>

        <?php else : ?>

            <?php get_template_part( 'no-results', 'search' ); ?>

        <?php endif; ?>
 
             
    </section>

<?php get_footer(); ?>
