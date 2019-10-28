<!--
============================================================

     GENERIC SEARCH RESULTS
    ==============================

============================================================
-->

<?php get_header(); ?>

    <!-- <header class="hero hero_color hero_loggedInPages" style="background-color:#eaeaea;">
        <h1>Search</h1>
        <p class="lead"><?php echo get_search_query(); ?></p>
    </header> -->

    <section class="searchbar">
        <?php get_search_form(); ?>
    </section>

    <section class="post_content SEARCH-TEMPLATE">

        <?php if ( have_posts() ) : ?>

            <section class="postList circleImages">

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

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

                <!-- < ? p h p   get_template_part( 'content', 'search' ); ?>-->
                <a href="<?php the_permalink(); ?>">

                    <?php if($background_color): ?>background-color:<?php echo $background_color; ?>;<?php endif; ?>
                    <?php if($background_image): ?>
                        <img src="<?php echo $background_image; ?>">
                    <?php elseif (has_post_thumbnail () ): ?><img src="'<?php echo $image; ?>'">
                    <?php endif; ?>

                    <!-- <?php /* the_post_thumbnail('thumbnail'); */ ?> -->

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
                        <!-- <p><?php the_excerpt(); ?></p> -->
                    </div>

                </a>

            <?php endwhile; ?>

            </section>

        <?php else : ?>

            <p>No go.</p>

        <?php endif; ?>


    </section>

<?php get_footer(); ?>
