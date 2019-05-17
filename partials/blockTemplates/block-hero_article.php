<?php
/**
 * The template used for displaying a Hero block.
 *
 * @package _s
 */

// Set up fields.
$logo             = get_field( 'post_logo' );
$icon             = get_field( 'post_icon' );
$background_image = get_field( 'background_image' );
$background_color = get_field( 'background_color' );
?>
    
<header class="hero">
    
    <?php if( get_field('hero_background_buttons') == 'Image' ): ?>
    <section class="hero_image" style="background-image:url(<?php echo $background_image; ?>)">
    <?php endif; ?>
        
    <?php if( get_field('hero_background_buttons') == 'Color' ): ?>
    <section class="hero_color" style="background-color:<?php echo $background_color; ?>">
    <?php endif; ?>
        
        <?php if( get_field('hero_content_buttons') == 'Logo' ): ?>
            <img src="<?php echo $logo; ?>" alt="<?php echo $logo; ?>">
        <?php endif; ?>
        <?php if( get_field('hero_content_buttons') == 'Icon' ): ?>
            <?php echo $icon; ?>
        <?php endif; ?>
        
    </section>
        
    <section class="article_title">
        <p class="subtitle">Category</p>
        <h1>The Artice Title</h1>
        <section class="meta meta_article">
            <p>Written by Johny Johnson</p>
            <p><time>April 11, 2019</time></p>
        </section>        
        <div class="btnBar">
            <a href="#">Tag</a>
            <a href="#">Tag</a>
        </div>
    </section>
    
</header>