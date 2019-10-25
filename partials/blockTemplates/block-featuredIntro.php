<?php
    /**
     * The template used for displaying a Featured Intro block.
     *
     */

    $introTitle = get_field( 'intro_title');
    $introText = get_field ( 'intro_text' );

$featuredsubTitle = get_field ( 'featured_subtitle' );
$featuredTitle = get_field ( 'featured_title' );
$featuredText = get_field ( 'featured_text' );


    $postType = get_field( 'post_type');
    $background_image   = get_field( 'background_image');
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large-size', true);
    $image = $thumb_url_array[0];
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

    <div class="wp-block-media-text__content hero hero_image hero_title_overlay"
        style="<?php if($background_image): ?>
            background-image: url(<?php echo $background_image; ?>);
            <?php elseif (has_post_thumbnail () ): ?> background-image:url('<?php echo $image; ?>');
        <?php endif; ?>"
    >
        <div>
            <?php if($featuredsubTitle): ?>
                <p class="subtitle" style="color:#eaeaea; font-size: 1rem;"><?php echo $featuredsubTitle; ?></p>
            <?php endif; ?>
            <?php if($featuredTitle): ?>
                <h2><?php echo $featuredTitle; ?></h2>
            <?php endif; ?>
            <?php if($featuredText): ?>
                <?php echo $featuredText; ?>
            <?php endif; ?>
            <!-- <p class="subtitle" style="color:#eaeaea; font-size: 1rem;">Featured Article</p>
            <a class="link" href="<?php the_permalink(); ?>">
                <h2 style="font-size: 3rem; font-weight: normal"><?php the_title(); ?></h2>
            </a> -->
            <!-- <a class="button" href="<?php the_permalink(); ?>">Read Article</a> -->
        </div>
    </div>

</<?php if( get_field('block_semantics') == 'Header' ): ?>header<?php endif; ?><?php if( get_field('block_semantics') == 'Section' ): ?>section<?php endif; ?><?php if( get_field('block_semantics') == 'Div' ): ?>div<?php endif; ?>>
