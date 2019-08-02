<!-- ==============================
    Featured Post
=================================== -->

<?php 
    $image              = wp_get_attachment_image_src( get_post_thumbnail_id ( $post->ID ), 'single-post-thumbnail'); 
    $background_image   = get_field( 'background_image', $post->ID );
    $post_logo          = get_field( 'post_logo', $post->ID );
?>

<article class="post <?php if ( $post_logo ) { ?>twoCol<?php } ?>" style="background-image:url('<?php if (has_post_thumbnail () ) { echo $image[0]; } else { echo $background_image; } ?>')">
    <div>   
        <p class="subtitle">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?><?php $post_type = get_post_type(); ?><?php if ( $post_type )
                {
                    $post_type_data = get_post_type_object( $post_type );
                    $post_type_slug = $post_type_data->rewrite['slug'];
                    echo $post_type_slug;
                } ?>">
                <?php $postType = get_post_type_object(get_post_type()); ?>
                <?php if ($postType) {
                    echo esc_html($postType->labels->name);
                } ?>
            </a>
        </p>
        <h2><?php echo get_the_title(); ?></h2>    
        <div class="btnBar">
            <a href="<?php echo get_permalink(); ?>" class="button ">Read More</a>
        </div>
    </div>
    <?php if ( $post_logo ) { ?>
    <div>
        <img src="<?php echo $post_logo ?>" alt="<?php echo get_the_title(); ?>" />
    </div>
    <?php } ?>
</article>   
      