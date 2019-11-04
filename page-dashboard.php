<?php /* Template Name: Dashboard */ ?>

<?php get_header(); ?>

<?php get_template_part( 'partials/material', 'sidenav' ); ?>

<main class="f-container">


    <!-- TEST -->


<div class="wp-block-media-text">
    <div class="wp-block-media-text__content article" style="background: #fafafa;">
        <p class="subtitle">Your Dashboard</p>
        <h2><i class="fa fa-user-circle"></i> Calvin Hobbes</h2>
        <!-- <p class="has-large-font-size">
            <i class="fa fa-user-circle"></i>
            Calvin Hobbes
        </p> -->
    </div>
    <div class="wp-block-media-text__content article" style="/*border-left: 2px solid #999;*/">
        <!-- <div class="buttonList sidenav">
            <a href="#blog" >
                <i class="fa fa-bullhorn"></i>
                <p>Community</p>
            </a>
            <a href="#publications">
                <i class="fa fa-book"></i>
                <p>Publications</p>
            </a>
            <a href="#events">
                <i class="fa fa-calendar"></i>
                <p>Events</p>
            </a>
            <a href="#education" >
                <i class="fa fa-graduation-cap"></i>
                <p>Education</p>
            </a>
            <a href="#museum">
                <i class="fa fa-university"></i>
                <p>Museum</p>
            </a>
            <a href="#research">
                <i class="fa fa-comment-alt"></i>
                <p>Message Board</p>
            </a>
            <a href="#causes">
                <i class="fa fa-star"></i>
                <p>Donate</p>
            </a>
            <a href="#research">
                <i class="fa fa-book"></i>
                <p>Library &amp; Research</p>
            </a>
        </div> -->
    </div>

</div>



<!-- ==============================
    Hero
=================================== -->
<?php $background_color = get_field( 'background_color' ) ?: '#fafafa'; ?>
<?php if($background_color): ?>
<!-- <header class="hero hero_color hero_loggedInPages" style="background-color:<?php echo $background_color; ?>"> -->
<?php endif; ?>
    <!-- <p class="subtitle"><?php the_title(); ?></p>
    <p>Welcome</p>
    <h1>
        <i class="fa fa-user-circle"></i>
        Calvin Hobbes
    </h1>
    <section class="searchbar">
        <?php /* get_search_form(); */ ?>
    </section>
</header> -->

<?php $background_color = get_field( 'background_color' ) ?: '#fff'; ?>
<?php if($background_color): ?>
<!-- <header class="hero hero_color hero_loggedInPages" style="background-color:<?php echo $background_color; ?>"> -->
<?php endif; ?>
    <!-- <div>
        <p class="subtitle"><?php the_title(); ?></p>
        <p>Welcome</p>
        <h1>
            <i class="fa fa-user-circle"></i>
            Calvin Hobbes
        </h1>
    </div>
    <section class="searchbar">
        <?php /* get_search_form(); */ ?>
    </section>
</header> -->


<div class="wp-block-columns leftcol_8">
	<div class="wp-block-column">
		<div class="buttonList sidenav">
		  <a href="#" class="active">
		    <i class="fa fa-file" aria-hidden="true"></i>
		    <span>Fund Info Sheet</span>
		  </a>
		  <a href="#">
		    <i class="fa fa-file" aria-hidden="true"></i>
		    <span>Pledge Form</span>
		  </a>
		</div>
	</div>

	<div class="wp-block-column">

<!-- <div class="dashboard_layout"> -->


<div>

<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'post',
    'posts_per_page' => 3
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>
            <i class="fa fa-bullhorn"></i>
            <span>HQ News</span>
        </h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>






<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'publications',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Publications</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'events',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Events</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>



<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'exhibits',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Exhibits</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'classes',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Classes</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'webinars',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Webinars</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>



<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'causes',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Causes</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>




<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'research',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Research</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>





<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'resources',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Resources</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>




</div>

</div>

</div>




<div class="dashboard_layout">



<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'post',
    'posts_per_page' => 3
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>
            <i class="fa fa-bullhorn"></i>
            <span>HQ News</span>
        </h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>






<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'publications',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Publications</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'events',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Events</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>



<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'exhibits',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Exhibits</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'classes',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Classes</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'webinars',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Webinars</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>



<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'causes',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Causes</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>




<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'research',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Research</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>





<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'resources',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Resources</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>




</div>

</main>

<?php get_footer(); ?>
