<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="post_content">
        <?php the_content(); ?>
    </section>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts. - index.php'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
