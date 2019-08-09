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
                <a class="button" href="#">Explore The Beta Site</a>
            </div>
        <?php } elseif ( $icon ) { ?> 
            <div>
                <?php echo $icon; ?>
            </div>
        <?php } ?>

    </section>

</header>
    
 
    
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
    
    
<!-- 
========================================
    Featured Post 
======================================== -->   
    
<?php 

// args
$args = array(
	'numberposts'	=> 1,
	'post_type'		=> 'website',
    'posts_per_page'=> '1',
    'post_count'    => '1',
);

// query
$the_query = new WP_Query( $args ); ?>
    
<?php if( $the_query->have_posts() ): ?>
	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
        <!-- Featured Post - Events --> 
        <?php get_template_part( 'partials/material', 'featuredPost' ); ?>

	<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>   
    
    

<!-- 
========================================
    Post List 
======================================== -->   
<?php 

// args
$args = array(
	'numberposts'	=> -1,
    'offset'        => 1,
	'post_type'		=> 'website'
);


// query
$the_query = new WP_Query( $args );
    
$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>
    
    <section class="postList circleImages">
	
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?> 

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div> 
                <p><?php the_excerpt(); ?></p>
            </div>

        </a>
        
	<?php endwhile; ?>
        
	</section>
    
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>    
    

</main>

<?php get_footer(); ?>
