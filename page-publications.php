<?php /* Template Name: Publications */ ?>

<?php get_header(); ?>

<!-- SIDENAV - MOBILE SIDE SLIDEOUT MENU -->
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

<?php get_template_part( 'partials/blockTemplates/block', 'hero' ); ?>

<?php
    $args = array(
        'post_type'   => 'publications',
        'post_status' => 'publish',
        'post_count'  => '1',
        //  'tax_query'   => array(
        //  	array(
        //  		'taxonomy' => 'testimonial_service',
        //  		'field'    => 'slug',
        //  		'terms'    => 'diving'
        //  	)
        //  )
     ); 
    
    // Set up fields.
    $logo             = get_field( 'post_logo' );
    $icon             = get_field( 'post_icon' );
    $background_image = get_field( 'background_image' );
    $background_color = get_field( 'background_color' );

    $publications = new WP_Query( $args );
    if( $publications->have_posts() ) :
?>

    <?php
      while( $publications->have_posts() ) :
        $publications->the_post();
        ?>
            <!-- Featured Post -->
            <article class="post twoCol" style="background-image:url(<?php if ($background_image) { echo $background_image ;} ?>)">
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
        <?php
      endwhile;
      wp_reset_postdata();
    ?>

<?php
else :
  esc_html_e( 'For some reason, there is nothing here. idk', 'text-domain' );
endif;
?>

<?php
    $args = array(
        'post_type'   => 'publications',
        'post_status' => 'publish',
        'post_count'  => '10',
        'offset'      => '1',      // skip over the first post.
        // 'post_parent' => '$post->ID',
        //  'tax_query'   => array(
        //  	array(
        //  		'taxonomy' => 'testimonial_service',
        //  		'field'    => 'slug',
        //  		'terms'    => 'diving'
        //  	)
        //  )
     ); 

    $publications = new WP_Query( $args );
    if( $publications->have_posts() ) :
    
?>
    
    <section class="postList circleImages">

    <?php
      while( $publications->have_posts() ) :
        $publications->the_post();
        ?>
    
            <?php 
        
                // Set up fields.
                $logo             = get_field( 'post_logo' );
                $icon             = get_field( 'post_icon' );
                $background_image = get_field( 'background_image' );
                $background_color = get_field( 'background_color' );

                $size             = 'thumbnail';
                $thumb_id         = get_post_thumbnail_id('$post-&gt;ID');
        
            ?>
            
            <a href="<?php the_permalink(); ?>">
                
                <?php the_post_thumbnail('thumbnail'); ?>
                
                <?php if( $background_image ): ?>

                    <?php echo wp_get_attachment_image( $background_image, $size ); ?>
                
                <?php else : ?> 
                
                    <!-- Featured Image = [ img ] -->
                    <?php echo wp_get_attachment_image( $thumb_id, 'thumbnail' ); ?>
                
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

            <!--
            <a href="<?php the_permalink(); ?>">
                <?php if( $background_image ): ?>
                    <img src="<?php echo $background_image; ?>)">
                <?php endif; ?>  
                <div>
                     <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>
                    <h4><?php the_title(); ?></h4>
                    <div class="meta meta_article">
                        <p>Written by <?php the_author(); ?></p>
                        <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                    </div> 
                    <p><?php the_excerpt(); ?></p>
                </div>
            </a>
    -->

        <?php
      endwhile;
      wp_reset_postdata();
    ?>
    
    </section>

<?php
else :
  esc_html_e( 'For some reason, there is nothing here. idk', 'text-domain' );
endif;
?>

</main>

<?php get_footer(); ?>
