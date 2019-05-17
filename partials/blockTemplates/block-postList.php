<!-- 
========================================
        POST LIST TEMPLATE
======================================== -->

<section class="postList circleImages">
    
    <a href="<?php the_permalink(); ?>">
        
        <?php if ( $thumb_url ) : ?>
            <img src="<?php echo $thumb_url ;} ?>" >
        <?php endif; ?>   
        
        <?php 
            $background_image = get_field('background_image');
            $size             = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
            if( $background_image ) {
                echo wp_get_attachment_image( $image, $size );
            }
        ?>
        
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
    