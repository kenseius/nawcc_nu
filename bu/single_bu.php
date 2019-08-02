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

    <header class="hero">
        <section class="hero_image" style="background-image:url(<?php if ($thumbnail) { echo $thumbnail ;} ?>)">
            <?php $post_logo = get_field( 'post_logo' ); ?>
            <?php if ( $post_logo ) { ?>
                <img src="<?php echo $post_logo['url']; ?>" alt="<?php echo $post_logo['alt']; ?>" />
            <?php } ?>
            <!-- <img src="./assets/strapless/images/dev/clockworkfest_logo.png" alt=""> -->
        </section>
        <section class="article_title">
            <p class="subtitle"><?php $the_category = the_category(' '); if ($the_category) { echo '<span class="pipe">|</span>' . $the_category . '';} ?></p>
            <h1><?php the_title(); ?></h1>
            <section class="meta meta_article">
                <p>Written by <?php the_author(); ?></p>
                <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
            </section>        
            <div class="btnBar">
                <?php $the_tags = the_tags(' ',' '); if ($the_tags) { echo $the_tags;} ?> 
            </div>
        </section>
    </header>

    <section class="post_content">
        <?php if( get_field('lead') ): ?>
            <p class="lead"><?php the_field('lead'); ?></p>
        <?php endif; ?>
        <?php the_content(); ?>
    </section>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
