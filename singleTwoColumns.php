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

    <?php get_template_part( 'partials/blocks', 'hero_article' ); ?>

    <section class="wp-block-columns leftcol_8">
        <div class="wp-block-column">
            <?php dynamic_sidebar( 'sidenav-main' ); ?>
        </div>
        <div class="post_content staggered_content wp-block-column">
            <?php the_content(); ?>
        </div>
    </section>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts. - single.php'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
