<!--
============================================================

     GENERIC SEARCH RESULTS
    ==============================

============================================================
-->

<?php get_header(); ?>

    <header class="hero hero_color hero_loggedInPages" style="background-color:#eaeaea;">
        <h1>Search</h1>
        <p class="lead"><?php echo get_search_query(); ?></p>
    </header>

    <section class="searchbar">
        <?php get_search_form(); ?>
    </section>

    <section class="post_content SEARCH-TEMPLATE">
        <p class="lead"><?php echo get_search_query(); ?></p>


        <?php if ( have_posts() ) : ?>


            <h4>
                <?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?>
            </h4>


            <section class="postList circleImages">

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <!-- < ? p h p   get_template_part( 'content', 'search' ); ?>-->
                <a href="<?php the_permalink(); ?>">

                    <?php the_post_thumbnail('thumbnail'); ?>

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

        <?php else : ?>

            <p>No go.</p>

        <?php endif; ?>


    </section>

<?php get_footer(); ?>
