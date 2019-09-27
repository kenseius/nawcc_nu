<!--
============================================================

     POST TEMPLATE
    ==============================

        1. HERO - Background Image pulled from "Featured Image"
        2. CONTENT - article, title, subtitle, metadata, content

============================================================
-->

<?php get_header(); ?>

<main class="funds
post_content staggered_content">

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

    <header
        class="hero wideTitle hero_title_overlay
            <?php if($background_color): ?> hero_color <?php endif; ?>
            <?php if (has_post_thumbnail () ): ?> hero_image <?php endif; ?>"
        style="
            <?php if($background_color): ?>background-color:<?php echo $background_color; ?>;<?php endif; ?>
            <?php if (has_post_thumbnail () ): ?> background-image:url('<?php echo $image[0]; ?><?php else: ?><?php echo $background_image; ?>');<?php endif; ?>"
    >

        <div>


            <?php if ( get_field( 'subtitle' ) == 1 ): ?>

                <?php /* ------ for multiple subtitle_link inputs -------
                    * foreach ( $subtitle_link_items as $subtitle_link_item ) { ?>
                	* <a class="subtitle" href="<?php echo $subtitle_link_item; ?>"><?php the_field( 'subtitle_text' ); ?></a>
                <?php } */ ?>

                <?php if ( get_field( 'subtitle_link' ) ): ?>
                    <a class="subtitle" href="<?php the_field( 'subtitle_link' ); ?>"><?php the_field( 'subtitle_text' ); ?></a>
                    <?php else: ?>
                    <p><?php the_field( 'subtitle_text' ); ?></p>
                <?php endif; ?>

            <?php endif; ?>

            <h1><?php the_title(); ?></h1>

            <?php if ( get_field( 'secondary_cta_button' ) == 1 ): ?><div class="wp-block-columns has-2-columns hero_ctaButtons"><?php endif; ?>

            <?php if ( get_field( 'cta_button' ) == 1 ): ?>
                <a class="button wp-block-column" href="<?php the_field( 'cta_button_link' ); ?>">
                    <?php the_field( 'cta_button_text' ); ?>
                </a>
            <?php endif; ?>

            <?php if ( get_field( 'secondary_cta_button' ) == 1 ): ?>
                <a class="button gry wp-block-column" href="<?php the_field( 'secondary_cta_button_link' ); ?>">
                    <?php the_field( 'secondary_cta_button_text' ); ?>
                </a>
            <?php endif; ?>

            <?php if ( get_field( 'secondary_cta_button' ) == 1 ): ?></div><?php endif; ?>

        </div>

        <?php if ( $logo ): ?>
            <!-- Logo -->
        <?php elseif ( $icon ): ?>
            <div>
                <?php echo $icon; ?>
            </div>
        <?php endif; ?>

    </header>

    <?php the_content(); ?>

</main>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>
