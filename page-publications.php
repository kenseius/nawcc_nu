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

    <?php
      while( $publications->have_posts() ) :
        $publications->the_post();
        ?>
    
    
        <section class="postList circleImages">

            <a href="<?php the_permalink(); ?>">
                <?php if( $background_image ): ?>
                    <img src="<?php echo $background_image; ?>)">
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

        </section>

        <?php
      endwhile;
      wp_reset_postdata();
    ?>

<?php
else :
  esc_html_e( 'For some reason, there is nothing here. idk', 'text-domain' );
endif;
?>

</main>

<?php get_footer(); ?>
