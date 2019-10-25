<!-- ==============================
    Featured Post
=================================== -->

<?php
    // Load values and assing defaults.
    // $logo             = get_field( 'post_logo' ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_logo.png';
    $logo             = get_field( 'post_logo' );
    $icon             = get_field( 'post_icon' );
    // $background_image = get_field( 'background_image', $post->ID ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_bg.png';
    $background_image = get_field( 'background_image', $post->ID );
    $background_color = get_field( 'background_color' ) ?: '#ffffff';

    $text_color         = get_field( 'text_color' );

    $marginBottom       = get_field( 'margin_Bottom' );

    $image = wp_get_attachment_image_src( get_post_thumbnail_id ( $post->ID ), 'single-post-thumbnail');
?>

<article
    class="post
        <?php if( get_field( 'overlay' ) == 1 ): ?> hero_title_overlay<?php endif; ?>
        <?php if($background_color): ?> hero_color <?php endif; ?>
        <?php if (has_post_thumbnail () ): ?> hero_image <?php endif; ?>"
    style="
        <?php if($background_color): ?>background-color:<?php echo $background_color; ?>;<?php endif; ?>
        <?php if($background_image): ?>
            background-image: url(<?php echo $background_image; ?>);
            <?php elseif (has_post_thumbnail () ): ?> background-image:url('<?php echo $image; ?>');
        <?php endif; ?>"
>
<?php if ( $logo ): ?>
    <div class="twoCol heroLogoContent">
        <div class="heroLogo">
            <img src="<?php echo $logo; ?>">
        </div>
        <div class="heroContent">
<?php elseif ( $icon ): ?>
    <div class="twoCol heroLogoContent">
        <div class="heroLogo">
            <?php echo $icon; ?>
        </div>
        <div class="heroContent">
<?php else: ?>
    <div>
<?php endif; ?>

        <p class="subtitle">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?><?php $post_type = get_post_type(); ?><?php if ( $post_type )
                {
                    $post_type_data = get_post_type_object( $post_type );
                    $post_type_slug = $post_type_data->rewrite['slug'];
                    echo $post_type_slug;
                } ?>">
                <?php $postType = get_post_type_object(get_post_type()); ?>
                <?php if ($postType) {
                    echo esc_html($postType->labels->name);
                } ?>
            </a>
        </p>
        <h2><?php echo get_the_title(); ?></h2>
        <div class="btnBar">
            <a href="<?php echo get_permalink(); ?>" class="button ">Read More</a>
        </div>

<?php if ( $logo ): ?>
        </div>
    </div>
<?php elseif ( $icon ): ?>
        </div>
    </div>
<?php else: ?>
    </div>
<?php endif; ?>

</article>
