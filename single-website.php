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
            class="hero wideTitle hero_title_overlay hero_event 
                <?php if($background_color): ?> hero_color <?php endif; ?> 
                <?php if (has_post_thumbnail () ): ?> hero_image <?php endif; ?>"
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
    
<!--
    <section class="article_title event_title">
        <p class="subtitle">The Website Project</p>
        <h1><?php the_title(); ?></h1> 
    </section>
--> 
<!--
    <section class="post_content nospaceCovers">
        <?php the_content(); ?>
    </section>
-->
    
    <section class="blog_content staggered_content">
        <?php the_content(); ?>
    </section>
    

    <section><hr /><hr /><hr /></section>
    
    
    <section class="post_content">
        <?php the_content(); ?>
    </section>


</main>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>
