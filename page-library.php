<?php /* Template Name: Library */ ?>

<?php get_header(); ?>

<?php get_template_part( 'partials/material', 'sidenav' ); ?>

<main class="f-container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="searchbar post_content wide_content">
        <?php the_content(); ?>
    <div>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>

</main>

<?php get_footer(); ?>
