<!--
============================================================

     POST TEMPLATE
    ==============================

        1. HERO - Background Image pulled from "Featured Image"
        2. CONTENT - article, title, subtitle, metadata, content

============================================================
-->

<?php get_header(); ?>

<main class="websitePost">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php

    // Load values and assing defaults.
    $logo             = get_field( 'post_logo' ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_logo.png';
    $icon             = get_field( 'post_icon' );
    $background_image = get_field( 'background_image', $post->ID ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_bg.png';
    $background_color = get_field( 'background_color' ) ?: '#fafafa';

    $image = wp_get_attachment_image_src( get_post_thumbnail_id ( $post->ID ), 'single-post-thumbnail');

    ?>

    <header class="hero wideTitle">

        <section
            class="hero wideTitle hero_event
                <?php if($background_color): ?> hero_color <?php endif; ?>
                <?php if (has_post_thumbnail () ): ?> hero_title_overlay hero_image <?php endif; ?>"
            style="
                <?php if($background_color): ?>background-color:<?php echo $background_color; ?>;<?php endif; ?>
                <?php if (has_post_thumbnail () ): ?> background-image:url('<?php echo $image[0]; ?><?php else: ?><?php echo $background_image; ?>');<?php endif; ?>"
        >

            <?php if ( $logo ) { ?>
                <div>
                    <p class="subtitle">The Website Project</p>
                    <h1><?php the_title(); ?></h1>
                </div>
            <?php } elseif ( $icon ) { ?>
                <div>
                    <?php echo $icon; ?>
                </div>
            <?php } ?>

        </section>

    </header>

    <section class="blog_content staggered_content article">
        <?php the_content(); ?>
    </section>

</main>

<?php comments_template(); ?>

<?php

    function format_comment($comment, $args, $depth) {

       $GLOBALS['comment'] = $comment; ?>

        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

            <div class="comment-intro">
                <em>commented on</em>
                <a class="comment-permalink" href="<?php echo htmlspecialchars ( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?></a>
                <em>by</em>
                <?php printf(__('%s'), get_comment_author_link()) ?>
            </div>

            <?php if ($comment->comment_approved == '0') : ?>
                <em><php _e('Your comment is awaiting moderation.') ?></em><br />
            <?php endif; ?>
            
            <?php comment_text(); ?>

            <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>

<?php } ?>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>
