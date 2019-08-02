<?php 
/* ==============================
    
    Breadcrumbs

    <div class="breadcrumbs">
        <a href="#">Top Level</a> <i class="fa fa-chevron-right"></i>
        <a href="#">Second Level</a> <i class="fa fa-chevron-right"></i>
        <p>Current Level</p>
    </div>
    
    - add .subtitle to make font large

=================================== */ ?>

<!-- Breadcrumbs -->
<div class="breadcrumbs">
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
    </a><i class="fa fa-chevron-right"></i>
    <a href="#">Second Level</a> <i class="fa fa-chevron-right"></i>
    <p>Current Level</p>
</div>
