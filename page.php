<!--
============================================================

     PAGE TEMPLATE
    ==============================

        1. HERO - Background Image pulled from "Featured Image"
        2. CONTENT - article, title, subtitle, metadata, content

============================================================
-->
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
    // This code aquires the ID of the the posts's thumbnail, in order to extract its url
    $thumbnail = '';
    // Get the ID of the post_thumbnail (if it exists)
    $post_image_id = get_post_thumbnail_id($post_to_use->ID);
        // if it exists
        if ($post_image_id) {
            $thumbnail = wp_get_attachment_image_src( $post_image_id, 'full', false);
            if ($thumbnail) (string)$thumbnail = $thumbnail[0];}
            if (!empty($thumbnail)) {
?>
<?php } else { ?><?php } ?>
	<header 
        <?php if( get_field('background_color') ): ?>
            class="hero" style="background-color:<?php the_field('background_color'); ?>"
        <?php else : ?>
            class="hero hero_image" style="background-image:url(<?php if ($thumbnail) { echo $thumbnail ;} ?>)"
        <?php endif; ?>       
    >
	   <h1><?php the_title(); ?></h1>
	</header>
	<section class="article">
        <?php if( get_field('lead') ): ?>
            <p class="lead"><?php the_field('lead'); ?></p>
        <?php endif; ?>
	    <?php the_content(); ?>
	</section>
<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
