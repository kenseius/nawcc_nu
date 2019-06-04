<!-- 
========================================
        POST LIST TEMPLATE
======================================== -->

<section class="postList circleImages">
    
    <a href="<?php the_permalink(); ?>">
        
        <img src="<?php block_field( 'imagefield' ); ?>" > 
        
        <div>
            <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
            <h4><?php block_field( 'test' ); ?></h4>
            <div class="meta meta_article">
                <p>Written by <?php the_author(); ?></p>
                <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
            </div> 
            <p><?php the_excerpt(); ?></p>
            <?php block_field( 'new-field' ); ?>
        </div>
    </a>

</section>
    