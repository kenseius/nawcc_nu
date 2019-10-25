<?php /* Template Name: Publications */ ?>

<?php get_header(); ?>

<?php get_template_part( 'partials/material', 'sidenav' ); ?>

<main class="f-container">

<?php

// args
$args = array(
	'numberposts'	=> 1,
	'post_type'		=> 'publications',
    'posts_per_page'=> '1',
    'post_count'    => '1',
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>

	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <?php
            $background_image   = get_field( 'background_image');
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large-size', true);
            $image = $thumb_url_array[0];
        ?>

        <div class="heroFeaturedIntro marginBottom wp-block-media-text alignwide has-media-on-the-right">
            <div class="wp-block-media-text__content" style="background: #fff;">
                <h2>Publications</h2>
                <p class="has-large-font-size">The team that brings you <span class="italic">The Watch & Clock Bulletin, The Mart & Watchnews</span></p>
                <!--
                <div class="buttonList">
                    <a href="#">
                            <i class="far fa-grin-squint" aria-hidden="true"></i>
                            <span>Hi</span>
                    </a>
                    <a href="#">
                            <i class="far fa-grin-squint" aria-hidden="true"></i>
                            <span>Hi</span>
                    </a>
            	</div>
                <button class="button">Button</button> -->
            </div>
            <div class="wp-block-media-text__content hero hero_image hero_title_overlay" style="<?php if($background_image): ?>
                background-image: url(<?php echo $background_image; ?>);
                <?php elseif (has_post_thumbnail () ): ?> background-image:url('<?php echo $image; ?>');
            <?php endif; ?>">
				<p class="subtitle" style="color:#eaeaea; font-size: 1rem;">Featured Article</p>
                <a class="link" href="<?php the_permalink(); ?>">
					<h2 style="font-size: 3rem; font-weight: normal"><?php the_title(); ?></h2>
				</a>
				<!-- <a class="button" href="<?php the_permalink(); ?>">Read Article</a> -->
            </div>
        </div>

	<?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>



<section class="searchbar post_content wide_content">
	<h3>Browse Publications</h3>
    <?php get_search_form(); ?>





<?php

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'publications',
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>
    <section class="postList circleImages">
	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

	    <?php
		    $background_image   = get_field( 'background_image');
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large-size', true);
			$image = $thumb_url_array[0];
	    ?>

        <a href="<?php the_permalink(); ?>">

            <!-- ?php the_post_thumbnail('thumbnail'); ? -->

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



	<?php endwhile; ?>

	</section>

<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


</main>

<?php get_footer(); ?>
