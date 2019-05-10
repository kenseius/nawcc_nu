<?php
/**
 * The template used for displaying a Hero block.
 *
 * @package _s
 */

// Set up fields.
$logo             = get_field( 'post_logo' ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_logo.png';
$icon             = get_field( 'post_icon' );
$background_image = get_field( 'background_image' ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_bg.png';
$background_color = get_field( 'background_color' ) ?: '#fafafa';
?>
    
<?php if ( $logo ): ?>

<header class="hero">
    <section class="hero_image" style="background-image:url(<?php echo $background_image; ?>)">?>
        <?php if ( $logo ) { ?>
            <img src="<?php echo $logo; ?>" alt="<?php echo $logo; ?>" />
        <?php } ?>
    </section>
    <section class="article_title">
        <p class="subtitle"><?php $the_category = the_category(' '); if ($the_category) { echo '<span class="pipe">|</span>' . $the_category . '';} ?></p>
        <h1><?php the_title(); ?></h1>
        <section class="meta meta_article">
            <p>Written by <?php the_author(); ?></p>
            <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
        </section>        
        <div class="btnBar">
            <?php $the_tags = the_tags(' ',' '); if ($the_tags) { echo $the_tags;} ?> 
        </div>
    </section>
    
<?php else : ?> 
    
<?php if( $background_color ): ?>
<header class="hero" style="background-color:<?php echo $background_image; ?>">
<?php else : ?>
<header class="hero hero_image" style="background-image:url(<?php echo $background_image; ?>)">
<?php endif; ?>  
<h1><?php the_title(); ?></h1>
        
<?php endif; ?>  
        
</header>