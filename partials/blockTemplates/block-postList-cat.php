

<?php 


// <!-- 
// ========================================
//        POST LIST TEMPLATE
// ======================================== -->




// set up fields
$category             = get_field( 'category' );
// $post_object          = get_field( 'postType' );

// args
$args = array(
    'post_type'		=> 'any',
    'category_name' => $category,
	'numberposts'	=> -1,
    // 'offset'        => 1,
);

// query
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>
    <section class="postList circleImages">
	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <div>
                
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>

                <?php if ( get_field( 'include_meta' ) == 1 ): ?>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div> 
                <?php endif; ?>
                
                <?php if ( get_field( 'include_excerpt' ) == 1 ): ?>
                    <p><?php the_excerpt(); ?></p>
                <?php endif; ?>

            </div>

        </a>

	<?php endwhile; ?>
        
	</section>
    
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>    
    