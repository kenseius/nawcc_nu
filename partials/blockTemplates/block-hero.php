<?php
/**
 * The template used for displaying a Hero block.
 *
 */

    // Load values and assing defaults.
    $logo               = get_field( 'post_logo' ); // , $post->ID ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_bg.png';
    $icon               = get_field( 'post_icon' );
    $background_color   = get_field( 'background_color' ); // ?: '#ffffff';
    $text_color         = get_field( 'text_color' );
    $marginBottom       = get_field( 'margin_Bottom' );

    $background_image   = get_field( 'background_image');
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large-size', true);
	$image = $thumb_url_array[0];

    // doesn't work for some reason? todo: remove if no errors from thumb_id code
    // $image = wp_get_attachment_image_src( get_post_thumbnail_id ( $post->ID ), 'single-post-thumbnail');


    // $subtitle_link_items =  get_field( 'subtitle_link' ); // for multiple link items

?>

<header
    class="hero wideTitle
        <?php if ( get_field( 'is_this_an_event' ) == 1 ): ?>hero_event<?php endif; ?>
        <?php if ( get_field( 'hero_Padding' ) == 1 ): ?>hero_Padding<?php endif; ?>
        <?php if( get_field( 'overlay' ) == 1 ): ?> hero_title_overlay<?php endif; ?>
        <?php if($background_color): ?> hero_color <?php endif; ?>
        <?php if (has_post_thumbnail () ): ?> hero_image <?php endif; ?>"
    style="
        <?php if($background_color): ?>background-color:<?php echo $background_color; ?>;<?php endif; ?>
        <?php if($background_image): ?>
            background-image: url(<?php echo $background_image; ?>);
            <?php elseif (has_post_thumbnail () ): ?> background-image:url('<?php echo $image; ?>');
        <?php endif; ?>
        <?php if($marginBottom): ?>margin: 0 auto <?php echo $marginBottom; ?>rem;<?php endif; ?>"
>

<?php if ( $logo ): ?>
    <div class="twoCol heroLogoContent">
        <div class="hero_Logo">
            <img src="<?php echo $logo; ?>">
        </div>
        <div class="hero_Content">
<?php elseif ( $icon ): ?>
    <div class="twoCol heroLogoContent">
        <div class="hero_Logo">
            <?php echo $icon; ?>
        </div>
        <div class="hero_Content">
<?php else: ?>
    <div>
<?php endif; ?>

        <?php if ( get_field( 'subtitle' ) == 1 ): ?>

            <?php /* ------ for multiple subtitle_link inputs -------
                * foreach ( $subtitle_link_items as $subtitle_link_item ) { ?>
            	* <a class="subtitle" href="<?php echo $subtitle_link_item; ?>"><?php the_field( 'subtitle_text' ); ?></a>
            <?php } */ ?>

            <?php if ( get_field( 'subtitle_link' ) ): ?>
                <a class="subtitle" href="<?php the_field( 'subtitle_link' ); ?>" <?php if ( $text_color ): ?>style="color:<?php echo $text_color; ?>;"<?php endif; ?> ><?php the_field( 'subtitle_text' ); ?></a>
                <?php else: ?>
                <p class="subtitle" <?php if ( $text_color ): ?>style="color:<?php echo $text_color; ?>;"<?php endif; ?>><?php the_field( 'subtitle_text' ); ?></p>
            <?php endif; ?>

        <?php endif; ?>

        <h1 <?php if ( $text_color ): ?>style="color:<?php echo $text_color; ?>;"<?php endif; ?> ><?php the_title(); ?></h1>

        <?php if ( get_field( 'is_this_an_event' ) == 1 ): ?>
            <p class="date"><?php the_field( 'event_weekday' ); ?>, <?php the_field( 'event_date' ); ?> | <?php the_field( 'event_startTime' ); ?> - <?php the_field( 'event_endTime' ); ?></p>
        <?php endif; ?>

        <?php if ( get_field( 'secondary_cta_button' ) == 1 ): ?><div class="wp-block-columns has-2-columns hero_ctaButtons"><?php endif; ?>

            <?php if ( get_field( 'cta_button' ) == 1 ): ?>
            <a class="button <?php if ( get_field( 'secondary_cta_button' ) == 1 ): ?> wp-block-column <?php else: ?>hero_ctaButton<?php endif; ?>" href="<?php the_field( 'cta_button_link' ); ?>">
                <?php the_field( 'cta_button_text' ); ?>
            </a>
            <?php endif; ?>

            <?php if ( get_field( 'secondary_cta_button' ) == 1 ): ?>
            <a class="button gry wp-block-column" href="<?php the_field( 'secondary_cta_button_link' ); ?>">
                <?php the_field( 'secondary_cta_button_text' ); ?>
            </a>
            <?php endif; ?>

        <?php if ( get_field( 'secondary_cta_button' ) == 1 ): ?></div><?php endif; ?>

<?php if ( $logo ): ?>
        </div>
    </div>
<?php elseif ( $icon ): ?>
        </div>
    </div>
<?php else: ?>
    </div>
<?php endif; ?>

</header>
