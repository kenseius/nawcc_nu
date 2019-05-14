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
    
<?php if( $title ): ?>
<header class="hero" style="background-color:<?php echo $background_image; ?>">
<?php else : ?>
<header class="hero hero_image" style="background-image:url(<?php echo $background_image; ?>)">
<?php endif; ?>  
    <h1><?php the_title(); ?></h1>   
</header>