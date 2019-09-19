<?php /* Template Name: Donate */ ?>

<?php get_header(); ?>

<?php
/** get_template_part( 'partials/material', 'sidenav' );  */
?>


<main class="funds nospaceCovers">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- ==============================
    Hero
    =================================== -->
    <?php $background_color = get_field( 'background_color' ) ?: '#fafafa'; ?>
    <?php if($background_color): ?>
    <header class="hero hero_color hero_loggedInPages" style="background-color:<?php echo $background_color; ?>">
    <?php endif; ?>
        <h1><?php the_title(); ?></h1>
    </header>

    <section class="post_content">
        <?php the_content(); ?>
    </section>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>

</main>

<?php get_footer(); ?>
