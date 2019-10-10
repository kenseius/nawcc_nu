<?php /* Template Name: Website */ ?>

<?php get_header(); ?>


<main class="funds">


<!--
========================================
    Hero
======================================== -->

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
        class="hero wideTitle hero_title_overlay hero_event
            <?php if($background_color): ?> hero_color <?php endif; ?>
            <?php if (has_post_thumbnail () ): ?> hero_image <?php endif; ?>"
        style="
            <?php if($background_color): ?>background-color:<?php echo $background_color; ?>;<?php endif; ?>
            <?php if (has_post_thumbnail () ): ?> background-image:url('<?php echo $image[0]; ?><?php else: ?><?php echo $background_image; ?>');<?php endif; ?>"
    >

        <?php if ( $logo ) { ?>
            <div>
                <p class="subtitle">HQ Projects</p>
                <h1><?php the_title(); ?></h1>
                <a class="button" href="http://wp.nawcc.org/home/">Explore The Beta Site</a>
            </div>
        <?php } elseif ( $icon ) { ?>
            <div>
                <?php echo $icon; ?>
            </div>
        <?php } ?>

    </section>

</header>

<section class="hero wideTitle scroll-animations">

    <section
        class="hero wideTitle hero_title_overlay hero_event
            <?php if($background_color): ?> hero_color <?php endif; ?>
            <?php if (has_post_thumbnail () ): ?> hero_image <?php endif; ?>"
        style="
            <?php if($background_color): ?>background-color:<?php echo $background_color; ?>;<?php endif; ?>
            <?php if (has_post_thumbnail () ): ?> background-image:url('<?php echo $image[0]; ?><?php else: ?><?php echo $background_image; ?>');<?php endif; ?>"
    >

        <?php if ( $logo ) { ?>
            <div class="animated">
                <p class="subtitle">HQ Projects</p>
                <h1><?php the_title(); ?></h1>
                <a class="button" href="http://wp.nawcc.org/home/">Explore The Beta Site</a>
            </div>
        <?php } elseif ( $icon ) { ?>
            <div class="animated">
                <?php echo $icon; ?>
            </div>
        <?php } ?>

    </section>

    <section
        class="hero wideTitle hero_title_overlay hero_event
            <?php if($background_color): ?> hero_color <?php endif; ?>
            <?php if (has_post_thumbnail () ): ?> hero_image <?php endif; ?>"
        style="
            <?php if($background_color): ?>background-color:<?php echo $background_color; ?>;<?php endif; ?>
            <?php if (has_post_thumbnail () ): ?> background-image:url('<?php echo $image[0]; ?><?php else: ?><?php echo $background_image; ?>');<?php endif; ?>"
    >

        <?php if ( $logo ) { ?>
            <div class="animated">
                <p class="subtitle">HQ Projects</p>
                <h1><?php the_title(); ?></h1>
                <a class="button" href="http://wp.nawcc.org/home/">Explore The Beta Site</a>
            </div>
        <?php } elseif ( $icon ) { ?>
            <div class="animated">
                <?php echo $icon; ?>
            </div>
        <?php } ?>

    </section>

</section>



<!--
========================================
    Content
======================================== -->

<section class="post_content">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


</section>


</main>

<?php get_footer(); ?>
