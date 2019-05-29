<!--
============================================================

     POST TEMPLATE
    ==============================

        1. HERO - Background Image pulled from "Featured Image"
        2. CONTENT - article, title, subtitle, metadata, content

============================================================
-->

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <?php 
        $image = wp_get_attachment_image_src( get_post_thumbnail_id ( $post->ID ), 'single-post-thumbnail'); 
        $background_image = get_field( 'background_image', $post->ID );
    ?>

    <header class="hero wideTitle">

        <section class="hero_image" style="background-image:url('<?php if (has_post_thumbnail () ) { echo $image[0]; } else { echo $background_image; } ?>')">

        </section>

        <section class="article_title">
            <p class="subtitle">Exhibits</p>
            <h1><?php the_title(); ?></h1>
        </section>

    </header>

    <section class="post_content">
        <?php the_content(); ?>
    </section>


<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>




