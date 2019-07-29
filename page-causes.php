<?php /* Template Name: Causes */ ?>

<?php get_header(); ?>

<?php get_template_part( 'partials/material', 'sidenav' ); ?>

<main class="f-container">
    
    
    <!-- TEST -->
    
    
<!-- ==============================
    Hero
=================================== -->   
<?php $background_color = get_field( 'background_color' ) ?: '#fafafa'; ?>
<?php if($background_color): ?>
<header class="hero hero_color hero_loggedInPages" style="background-color:<?php echo $background_color; ?>">
<?php endif; ?>
    <h1><?php the_title(); ?></h1>   
</header>    

    
    
<?php 

// args
$args = array(
	'numberposts'	=> 1,
	'post_type'		=> 'causes',
    'posts_per_page'=> '1',
    'post_count'    => '1',
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );


// Set up fields.
$logo             = get_field( 'post_logo' ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_logo.png';
$icon             = get_field( 'post_icon' );
$background_image = get_field( 'background_image' ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_bg.png';
$background_color = get_field( 'background_color' ) ?: '#fafafa';

$image = wp_get_attachment_image_src( get_post_thumbnail_id ( $post->ID ), 'single-post-thumbnail');


?>
<?php if( $the_query->have_posts() ): ?>

	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php 
        $image = wp_get_attachment_image_src( get_post_thumbnail_id ( $post->ID ), 'single-post-thumbnail'); 
        $background_image = get_field( 'background_image', $post->ID );
    ?>
    
    <!-- Featured Post --> 
    <article class="post twoCol" style="background-image:url('<?php if (has_post_thumbnail () ) { echo $image[0]; } else { echo $background_image; } ?>')">
        <div>   
            <p class="subtitle"><?php $the_category = the_category(' '); if ($the_category) { echo '<span class="pipe">|</span>' . $the_category . '';} ?></p>
            <h2><?php the_title(); ?></h2>    
            <div class="btnBar">
                <a href="<?php the_permalink(); ?>" class="button ">Read More</a>
            </div>
        </div>
        <?php $post_logo = get_field( 'post_logo' ); ?>
        <?php if ( $post_logo ) { ?>
        <div>
            <img src="<?php echo $post_logo['url']; ?>" alt="<?php echo $post_logo['alt']; ?>" />
        </div>
        <?php } ?>
    </article>   
      
	<?php endwhile; ?>
        
	</section>
    
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>    
        
    
    
<?php 

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'causes',
    'offset'        => '1'
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
    

    
</section>    
    

</main>

<?php get_footer(); ?>
