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


<?php get_template_part( 'partials/material', 'sidenav' ); ?>

<main class="f-container">

    <div class="post_content staggered_content">
        <?php the_content(); ?>
    </div>

</main>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts. - single.php'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
