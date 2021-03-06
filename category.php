<?php get_header(); ?>

<main>

    <header class="hero hero_short">
        <h1><?php $the_category = the_category(' '); if ($the_category) { echo '<span class="pipe">|</span>' . $the_category . '';} ?></h1>
    </header>

    <!-- Two Col -->
    <div class="twoCol_grid">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php

    // Load values and assing defaults.
    $logo             = get_field( 'post_logo' ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_logo.png';
    $icon             = get_field( 'post_icon' );
    $background_image = get_field( 'background_image', $post->ID ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_bg.png';
    $background_color = get_field( 'background_color' ) ?: '#fafafa';

    $image = wp_get_attachment_image_src( get_post_thumbnail_id ( $post->ID ), 'single-post-thumbnail');

    // $subtitle_link_items =  get_field( 'subtitle_link' ); // for multiple link items

?>

        <article class="post" style="
            <?php if($background_color): ?>background-color:<?php echo $background_color; ?>;<?php endif; ?>
            <?php if (has_post_thumbnail () ): ?> background-image:url('<?php echo $image[0]; ?><?php else: ?><?php echo $background_image; ?>');<?php endif; ?>"
        ">
            <div>
                <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>
                <h2><?php the_title(); ?></h2>
                <div class="btnBar">
                    <a href="<?php the_permalink(); ?>" class="button ">Read More</a>
                </div>
            </div>
        </article>

        <?php endwhile; else: ?>
          <p><?php _e('Sorry, there are no posts.'); ?></p>
        <?php endif; ?>

    </div>

    <section class="postList circleImages">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php
            // This code aquires the ID of the the posts's thumbnail, in order to extract its url
            $thumbnail = '';
            // Get the ID of the post_thumbnail (if it exists)
            $post_image_id = get_post_thumbnail_id($post_to_use->ID);
                // if it exists
                if ($post_image_id) {
                    $thumbnail = wp_get_attachment_image_src( $post_image_id, 'thumbnail', false);
                    if ($thumbnail) (string)$thumbnail = $thumbnail[0];}
                    if (!empty($thumbnail)) {
        ?>
        <?php } else { ?><?php } ?>

        <a href="<?php the_permalink(); ?>">
            <img src="<?php if ($thumbnail) { echo $thumbnail ;} ?>" />
            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p><?php the_excerpt(); ?></p>
            </div>
        </a>

        <?php endwhile; else: ?>
          <p><?php _e('Sorry, there are no posts.'); ?></p>
        <?php endif; ?>

    </section>


</main>

<?php get_footer(); ?>
