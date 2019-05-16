<!-- 
========================================
        POST LIST TEMPLATE
======================================== -->
    
<section class="postList circleImages">

    <a href="<?php the_permalink(); ?>">
        <?php if( $thumbnail ): ?>
        <img src="<?php echo $thumbnail ;} ?>" />
        <?php else : ?>
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
    