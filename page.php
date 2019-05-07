<!--
============================================================

     PAGE TEMPLATE
    ==============================

        1. HERO - Background Image pulled from "Featured Image"
        2. CONTENT - article, title, subtitle, metadata, content

============================================================
-->
<?php get_header(); ?>


<!-- TOP NAV - MOBILE SIDE SLIDEOUT MENU -->
<nav data-scroll-header class="accordion_sidenav accordion_sidenav_strapless f-menu sidenav_strapless_JSref">
	
	<div class="sidenav_header">
	    <!-- <a href="/webappstandards.html" data-balloon="Back to All Components" data-balloon-pos="bottom">
	        <i class="fa fa-chevron-left"></i>
	        <span>Back</span>
	    </a> -->
	    <p class="sidenav_title">
	        <i class="fa fa-paint-brush"></i> <span>Structure</span>
        </p> 
	</div> 
    
    <div class="tabs" data-tabgroup="components_tabs">
	   <a href="#01-info" class="active">What Is This?</a>
        <?php
            $args = array(
              'orderby' => 'name',
              'parent' => 0
              );
            $categories = get_categories( $args );
            foreach ( $categories as $category ) {
                echo '<a href="<?php the_permalink(); ?>" class="f-menu__heading">' . $category->name . '</a>';
            }
        ?>
        <a href="#02-page" class="f-menu__heading">
            Page
        </a>
        <a href="#03-templates" class="f-menu__heading">
            Templates
        </a>
        <a href="#04-content_containers" class="f-menu__heading">
            Content Containers
        </a>
        <a href="#05-hierarchy" class="f-menu__heading">
            Hierarchy
        </a>
        <a href="#06-specifications" class="f-menu__heading">
            Specifications
        </a>
    </div>
	
</nav>

<div class="f-control-bar">
    <div class="f-control f-menu-toggle">
        <svg>
            <use xlink:href="#f-icon-menu" />
        </svg>
    </div>
</div>


<main class="f-container">
    

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
    // This code aquires the ID of the the posts's thumbnail, in order to extract its url
    $thumbnail = '';
    // Get the ID of the post_thumbnail (if it exists)
    $post_image_id = get_post_thumbnail_id($post_to_use->ID);
        // if it exists
        if ($post_image_id) {
            $thumbnail = wp_get_attachment_image_src( $post_image_id, 'full', false);
            if ($thumbnail) (string)$thumbnail = $thumbnail[0];}
            if (!empty($thumbnail)) {
?>
<?php } else { ?><?php } ?>
	<header 
        <?php if( get_field('background_color') ): ?>
            class="hero" style="background-color:<?php the_field('background_color'); ?>"
        <?php else : ?>
            class="hero hero_image" style="background-image:url(<?php if ($thumbnail) { echo $thumbnail ;} ?>)"
        <?php endif; ?>       
    >
	   <h1><?php the_title(); ?></h1>
	</header>
	<section class="article">
        <?php if( get_field('lead') ): ?>
            <p class="lead"><?php the_field('lead'); ?></p>
        <?php endif; ?>
	    <?php the_content(); ?>
	</section>
<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>
    

</main>

<?php get_footer(); ?>
