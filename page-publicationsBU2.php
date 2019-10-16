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

        <div class="heroFeaturedIntro wp-block-media-text alignwide has-media-on-the-right">
            <div class="wp-block-media-text__content">
                <h2>Publications</h2>
                <p class="has-large-font-size">NAWCC's Official Horological magazine.</p>
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
                <h2 class="has-large-font-size txt-wht"><?php the_title(); ?></h2>
            </div>
        </div>

	<?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>



<div class="heroFeaturedIntro wp-block-media-text alignwide has-media-on-the-right">
    <div class="wp-block-media-text__content hero hero_image hero_title_overlay" style="<?php if($background_image): ?>
        background-image: url(<?php echo $background_image; ?>);
        <?php elseif (has_post_thumbnail () ): ?> background-image:url('<?php echo $image; ?>');
    <?php endif; ?>">
        <p class="has-large-font-size">The National Watch &amp; Clock Museum</p>
    </div>
    <div class="wp-block-media-text__content">
        <h2><?php the_title(); ?></h2>
        <p class="has-large-font-size">The National Watch &amp; Clock Museum</p>
        <button class="button">Button</button>
    </div>
</div>

<div class="wp-block-media-text alignwide has-media-on-the-right">
    <figure class="wp-block-media-text__media">
        <img src="http://localhost/nawcc_wpLocal/wp-content/uploads/2019/05/matt-seymour-1489876-unsplash-1024x1024.jpg" alt="" class="wp-image-560" srcset="http://localhost/nawcc_wpLocal/wp-content/uploads/2019/05/matt-seymour-1489876-unsplash-1024x1024.jpg 1024w, http://localhost/nawcc_wpLocal/wp-content/uploads/2019/05/matt-seymour-1489876-unsplash-150x150.jpg 150w, http://localhost/nawcc_wpLocal/wp-content/uploads/2019/05/matt-seymour-1489876-unsplash-300x300.jpg 300w, http://localhost/nawcc_wpLocal/wp-content/uploads/2019/05/matt-seymour-1489876-unsplash-768x768.jpg 768w, http://localhost/nawcc_wpLocal/wp-content/uploads/2019/05/matt-seymour-1489876-unsplash.jpg 1499w" sizes="(max-width: 1024px) 100vw, 1024px">
    </figure>
    <div class="wp-block-media-text__content hero_image" style="<?php if($background_image): ?>
        background-image: url(<?php echo $background_image; ?>);
        <?php elseif (has_post_thumbnail () ): ?> background-image:url('<?php echo $image; ?>');
    <?php endif; ?>">
        <p class="has-large-font-size">The National Watch &amp; Clock Museum</p>
    </div>
</div>



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
	'post_type'		=> 'publications',
    'posts_per_page'=> '1',
    'post_count'    => '1',
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );


// Set up fields.
// $logo             = get_field( 'post_logo' ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_logo.png';
// $icon             = get_field( 'post_icon' );
// $background_image = get_field( 'background_image' ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_bg.png';
// $background_color = get_field( 'background_color' ) ?: '#fafafa';

$image = wp_get_attachment_image_src( get_post_thumbnail_id ( $post->ID ), 'single-post-thumbnail');


?>
<?php if( $the_query->have_posts() ): ?>

	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php
        // $image = wp_get_attachment_image_src( get_post_thumbnail_id ( $post->ID ), 'single-post-thumbnail');
        // $background_image = get_field( 'background_image', $post->ID );
	    $background_image   = get_field( 'background_image');
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large-size', true);
		$image = $thumb_url_array[0];
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

<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>










    <section class="searchbar">
        <?php get_search_form(); ?>
    </section>


<?php get_template_part( 'partials/blockTemplates/block', 'linkList' ); ?>


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



</section>


</main>

<?php get_footer(); ?>
