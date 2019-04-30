<?php get_header(); ?>

<main>

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
    
    <!-- Featured Post -->
    <article class="post twoCol" style="background-image:url(<?php if ($thumbnail) { echo $thumbnail ;} ?>)">
        <div>   
            <p class="subtitle"><?php $the_category = the_category(' '); if ($the_category) { echo '<span class="pipe">|</span>' . $the_category . '';} ?></p>
            <h2><?php the_title(); ?></h2>    
            <div class="btnBar">
                <a href="<?php the_permalink(); ?>" class="button ">Read More</a>
            </div>
        </div>
        <?php $post_logo = get_field( 'post_logo' ); ?>
        <?php if ( $post_logo ) { ?>
        <div>
            <img src="<?php echo $post_logo['url']; ?>" alt="<?php echo $post_logo['alt']; ?>" />
        </div>
        <?php } ?>
    </article>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>
    
</main>

<?php get_footer(); ?>
