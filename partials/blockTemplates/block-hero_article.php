<?php
/**
 * The template used for displaying a Hero block.
 *
 * @package _s
 */

// Set up fields.
$logo             = get_field( 'post_logo' );
$icon             = get_field( 'post_icon' );
$background_color = get_field( 'background_color' );
$background_image = get_field( 'background_image' );
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large-size', true);
$image = $thumb_url_array[0];
?>

<header class="hero">

    <section
        class="
        <?php if( get_field('hero_background_buttons') == 'Image' ): ?>hero_image<?php endif; ?>
        <?php if( get_field('hero_background_buttons') == 'Color' ): ?>hero_color<?php endif; ?>"

        style="
            <?php if( get_field('hero_background_buttons') == 'Color' ): ?>
                <?php if($background_color): ?>background-color:<?php echo $background_color; ?>;<?php endif; ?>
            <?php endif; ?>
            <?php if( get_field('hero_background_buttons') == 'Image' ): ?>
                <?php if($background_image): ?>
                    background-image: url(<?php echo $background_image; ?>);
                    <?php elseif (has_post_thumbnail () ): ?> background-image:url('<?php echo $image; ?>');
                <?php endif; ?>
            <?php endif; ?>"
    >

        <?php if( get_field('hero_content_buttons') == 'Logo' ): ?>
            <img src="<?php echo $logo; ?>" alt="<?php echo $logo; ?>">
        <?php endif; ?>
        <?php if( get_field('hero_content_buttons') == 'Icon' ): ?>
            <?php echo $icon; ?>
        <?php endif; ?>

    </section>

    <section class="article_title">
        <p class="subtitle">
            <?php $postType = get_post_type_object(get_post_type()); ?>
            <?php if ($postType) {
                echo esc_html($postType->labels->singular_name);
            } ?>
        </p>
        <h1><?php the_title(); ?></h1>
        <section class="meta meta_article">
            <p>Written by <?php the_author(); ?> | <time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
            <p>Tags:
            <?php
                $posttags = get_the_tags();
                if ($posttags) {
                  foreach($posttags as $tag) {
                    echo $tag->name . '',', ',' ';
                  }
                }
            ?>
            </p>
        </section>
    </section>

</header>
