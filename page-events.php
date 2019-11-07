<?php /* Template Name: Events */ ?>

<?php get_header(); ?>

<?php get_template_part( 'partials/material', 'sidenav' ); ?>

<main class="f-container">




<!--
========================================
    Events
======================================== -->
<section class="heroFeaturedIntro wp-block-media-text alignwide">

    <div class="wp-block-media-text__content" style="background: #fafafa;">
        <h2>Events</h2>
        <br>
        <p class="lead">
            We use events to engage with the community.
        </p>
        <br>
        <ul>
            <li>18 regional U.S. conventions and 1 annual, international convention for horology enthusiasts</li>
            <li>An internationally and academically renowned annual symposium on time-related topics</li>
        </ul>

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

    <?php
    $args = array( 'numberposts' => 1, 'post_type' => 'events', 'posts_per_page' => '1', 'post_count' => '1', );
    $the_query = new WP_Query( $args ); ?>
    <?php if( $the_query->have_posts() ): ?>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <?php
            // Load values and assing defaults.
            $logo               = get_field( 'post_logo' ); // , $post->ID ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_bg.png';
            $icon               = get_field( 'post_icon' );
            $background_color   = get_field( 'background_color' ); // ?: '#ffffff';
            $text_color         = get_field( 'text_color' );
            $background_image   = get_field( 'background_image');
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large-size', true);
            $image = $thumb_url_array[0];
        ?>

        <div
            class="wp-block-media-text__media hero hero_image hero_title_overlay
                <?php if ( get_field( 'is_this_an_event' ) == 1 ): ?>hero_event<?php endif; ?>
                <?php if($background_color): ?> hero_color <?php endif; ?>"

            style="<?php if($background_color): ?>background-color:<?php echo $background_color; ?>;<?php endif; ?>
                    <?php if($background_image): ?>
                        background-image: url(<?php echo $background_image; ?>);
                        <?php elseif (has_post_thumbnail () ): ?> background-image:url('<?php echo $image; ?>');
                    <?php endif; ?>"
        >
            <p class="subtitle" style="color:#eaeaea; font-size: 1rem;">Featured Event</p>
            <a class="link" href="<?php the_permalink(); ?>">
                <h2 style="font-size: 3rem; font-weight: normal"><?php the_title(); ?></h2>
            </a>
            <?php if ( get_field( 'is_this_an_event' ) == 1 ): ?>
                <p class="date"><?php the_field( 'event_weekday' ); ?>, <?php the_field( 'event_date' ); ?> | <?php the_field( 'event_startTime' ); ?> - <?php the_field( 'event_endTime' ); ?></p>
            <?php endif; ?>
            <!-- <a class="button" href="<?php the_permalink(); ?>">Read Article</a> -->
        </div>

        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

</section>

<!-- Control buttons -->
<div id="myBtnContainer" class="tabButtonBar">
    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
    <button class="btn" onclick="filterSelection('publications')">Upcoming</button>
    <button class="btn" onclick="filterSelection('events')">Past</button>
</div>


<?php

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'events',
    'order' => 'DESC',
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

// $background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <?php

            $background_image   = get_field( 'background_image');
        	$thumb_id = get_post_thumbnail_id();
        	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail', true);
        	$image = $thumb_url_array[0];
            // doesn't work for some reason? todo: remove if no errors from thumb_id code

        ?>

        <a href="<?php the_permalink(); ?>">

            <?php if($background_image): ?>
                <img src="<?php echo $background_image; ?>">
                <?php elseif (has_post_thumbnail () ): ?><img src="<?php echo $image; ?>">
            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <?php if ( get_field( 'is_this_an_event' ) == 1 ): ?>
                    <p class="date"><?php the_field( 'event_weekday' ); ?>, <?php the_field( 'event_date' ); ?> | <?php the_field( 'event_startTime' ); ?> - <?php the_field( 'event_endTime' ); ?></p>
                <?php endif; ?>
                <!-- <div class="meta meta_article">
                    <?php if ( get_field( 'is_this_an_event' ) == 1 ): ?>
                        <p class="date"><?php the_field( 'event_weekday' ); ?>, <?php the_field( 'event_date' ); ?> | <?php the_field( 'event_startTime' ); ?> - <?php the_field( 'event_endTime' ); ?></p>
                    <?php endif; ?>
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div> -->
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
