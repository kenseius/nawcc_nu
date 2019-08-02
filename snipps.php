



<!-- Get Template Part -->

<?php get_template_part( 'partials/material', 'sidenav' ); ?>





<!-- php if snipp + acf get_field -->

<?php $post_logo = get_field( 'post_logo', $post->ID ); ?>
<?php if ( $post_logo ) { ?>
<div>
    <img src="<?php echo $post_logo ?>" alt="<?php echo get_the_title(); ?>" />
</div>
<?php } ?>








<!-- Categories
========================================================  -->






<!-- Display The Current Post's Categories -->   
<?php $the_category = the_category(' '); if ($the_category) { echo '<span class="pipe">|</span>' . $the_category . '';} ?>-->








<!-- Custom Post Types 
========================================================  -->



    <!-- Get Current Post Type Slug -->
    <?php $post_type = get_post_type(); ?>
    <?php if ( $post_type )
    {
        $post_type_data = get_post_type_object( $post_type );
        $post_type_slug = $post_type_data->rewrite['slug'];
        echo $post_type_slug;
    } ?>"

           
    <!-- Get Current Post Type Name -->
    <?php $postType = get_post_type_object(get_post_type()); ?>
    <?php if ($postType) {
        echo esc_html($postType->labels->singular_name);
    } ?>













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


    // Set up fields.
    $logo             = get_field( 'post_logo' );
    $icon             = get_field( 'post_icon' );
    $background_image = get_field( 'background_image' );
    $background_color = get_field( 'background_color' );
    
    $size             = 'thumbnail';
    
//    $thumb_id = get_post_thumbnail_id();
//    $thumb_url_array = wp_get_attachment_image_src( get_post_thumbnail_id( '$post-&gt;ID' ), $size, $icon);
//    $thumb_url = $thumb_url_array[0];

    $publications = new WP_Query( $args );
    if( $publications->have_posts() ) :
?>

    <?php
      while( $publications->have_posts() ) :
        $publications->the_post();
        ?>

        <!-- The Featured Image [ url ]  -->
        <img src="<?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail', true);
            echo $thumb_url[0];
        ?>" >

        <!-- Featured Image = [ img ] -->
        <?php if( $background_image ) { 
            echo wp_get_attachment_image( $thumb_id, 'thumbnail' );
        } ?>

 <?php
      endwhile;
      wp_reset_postdata();
    ?>

<?php
else :
  esc_html_e( 'For some reason, there is nothing here. idk', 'text-domain' );
endif;
?>




            //    $thumb_id = get_post_thumbnail_id();
            //    $thumb_url_array = wp_get_attachment_image_src( get_post_thumbnail_id( '$post-&gt;ID' ), $size, $icon);
            //    $thumb_url = $thumb_url_array[0];
