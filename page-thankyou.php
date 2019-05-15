<?php /* Template Name: Publications */ ?>
<?php get_header(); ?>

<?php
$args = array(
    'post_type'   => 'publications',
    'post_status' => 'publish',
    //  'tax_query'   => array(
    //  	array(
    //  		'taxonomy' => 'testimonial_service',
    //  		'field'    => 'slug',
    //  		'terms'    => 'diving'
    //  	)
    //  )
 );
 
$testimonials = new WP_Query( $args );
if( $testimonials->have_posts() ) :
?>
  <ul>
    <?php
      while( $testimonials->have_posts() ) :
        $testimonials->the_post();
        ?>
          <li><?php printf( '%1$s - %2$s', get_the_title(), get_the_content() );  ?></li>
        <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </ul>
<?php
else :
  esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
endif;
?>


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

    <!--
    ============================================================

         Thank You Page
        ==============================

            1. THANK YOU MESSAGE: using .messageScreen styles for this, amended to match current site

    ============================================================
    -->

	<main class="code4pa_saveTheDate messageScreen">
        <section class="code4pa_ThankYou">
    		<h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <a href="<?php echo site_url(); ?>" class="button"><i class="fa fa-arrow-left"></i> Back to the "Save The Date" Page</a>
        </section>
	</main>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
