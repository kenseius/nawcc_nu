<?php get_header(); ?>

    <header class="hero">
        <section class="hero_image" style="background-image:url(<?php if ($thumbnail) { echo $thumbnail ;} ?>)">
            <?php $post_logo = get_field( 'post_logo' ); ?>
            <?php if ( $post_logo ) { ?>
                <img src="<?php echo $post_logo['url']; ?>" alt="<?php echo $post_logo['alt']; ?>" />
            <?php } ?>
            <!-- <img src="./assets/strapless/images/dev/clockworkfest_logo.png" alt=""> -->
        </section>
        <section class="article_title">
            <p class="subtitle"><?php $the_category = the_category(' '); if ($the_category) { echo '<span class="pipe">|</span>' . $the_category . '';} ?></p>
            <h1><?php the_title(); ?></h1>
            <section class="meta meta_article">
                <p>Written by <?php the_author(); ?></p>
                <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
            </section>        
            <div class="btnBar">
                <?php $the_tags = the_tags(' ',' '); if ($the_tags) { echo $the_tags;} ?> 
            </div>
        </section>
    </header>

    <section class="post_content">
        <?php if( get_field('lead') ): ?>
            <p class="lead"><?php the_field('lead'); ?></p>
        <?php endif; ?>
        <?php the_content(); ?>
    </section>

<?php get_footer(); ?>
