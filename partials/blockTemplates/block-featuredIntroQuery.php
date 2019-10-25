<?php
    /**
     * The template used for displaying a Featured Intro block.
     *
     */

    $introTitle = get_field( 'intro_title');
    $introText = get_field ( 'intro_text' );

?>

<<?php if( get_field('block_semantics') == 'Header' ): ?>header<?php endif; ?><?php if( get_field('block_semantics') == 'Section' ): ?>section<?php endif; ?><?php if( get_field('block_semantics') == 'Div' ): ?>div<?php endif; ?>
    class="heroFeaturedIntro marginBottom wp-block-media-text alignwide has-media-on-the-right">
    <div class="wp-block-media-text__content" style="background: #fff;">
        <h2>
            <?php if($introTitle): ?>
                <?php echo $introTitle; ?>
                <?php else: ?><?php the_title(); ?>
            <?php endif; ?>
        </h2>
        <?php if($introText): ?>
            <p class="has-large-font-size"><?php echo $introText; ?></p>
        <?php endif; ?>
        <?php get_template_part( 'partials/blockTemplates/block', 'linkList' ); ?>
    </div>

    <?php
        $postType = get_field( 'post_type');
        $background_image   = get_field( 'background_image');
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large-size', true);
        $image = $thumb_url_array[0];
    $args = array( 'numberposts' => 1, 'post_type' => '$postType', 'posts_per_page' => '1', 'post_count' => '1', );
    $the_query = new WP_Query( $args ); ?>
    <?php if( $the_query->have_posts() ): ?>
    	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="wp-block-media-text__content hero hero_image hero_title_overlay"
            style="<?php if($background_image): ?>
                background-image: url(<?php echo $background_image; ?>);
                <?php elseif (has_post_thumbnail () ): ?> background-image:url('<?php echo $image; ?>');
            <?php endif; ?>"
        >
            <p class="subtitle" style="color:#eaeaea; font-size: 1rem;">Featured Article</p>
            <a class="link" href="<?php the_permalink(); ?>">
                <h2 style="font-size: 3rem; font-weight: normal"><?php the_title(); ?></h2>
            </a>
            <!-- <a class="button" href="<?php the_permalink(); ?>">Read Article</a> -->
        </div>
    	<?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

</<?php if( get_field('block_semantics') == 'Header' ): ?>header<?php endif; ?><?php if( get_field('block_semantics') == 'Section' ): ?>section<?php endif; ?><?php if( get_field('block_semantics') == 'Div' ): ?>div<?php endif; ?>>
