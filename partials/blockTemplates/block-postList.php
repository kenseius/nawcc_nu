<!-- 
========================================
        POST LIST TEMPLATE
======================================== -->
    
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
        <?php if( $thumbnail ): ?>
        <img src="<?php echo $thumbnail ;} ?>" />
        <?php else : ?>
        <img src="<?php echo $background_image; ?>)">
        <?php endif; ?>  
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
    