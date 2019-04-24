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
	<header class="hero" style="background-image:url(<?php if ($thumbnail) { echo $thumbnail ;} ?>)">
		<div>
	    	<h1><?php the_title(); ?></h1>
		</div>
	</header>
	<article>
	    <p class="subheader"><?php  get_bloginfo('name'); ?></p>
	    <h1><?php the_title(); ?></h1>
	    <div class="meta meta_article">
	        <p>
				<?php $the_category = the_category(' '); if ($the_category) { echo '<span class="pipe">|</span>' . $the_category . '';} ?>
				<?php $the_tags = the_tags(' '); if ($the_tags) { echo '<span class="pipe">|</span>' . $the_tags . '';} ?>
			</p>
	        <p class="meta_right"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>
	    </div>
	    <?php the_content(); ?>
	</article>
<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
