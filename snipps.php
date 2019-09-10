



<!-- Forms - Inline Icons -->


<div class="formgroup socialMedia">

    <!-- Facebook -->
    <label for="Facebook">
        <span class="hidden">Facebook</span>
        <i class="fa fa-facebook"></i>
        <input class="text-box single-line" data-val="true" data-val-length="Facebook cannot exceed 100 characters." data-val-length-max="100" id="Facebook" name="Facebook" placeholder="facebook.com/username" type="text" value="">
        <span class="field-validation-valid" data-valmsg-for="Facebook" data-valmsg-replace="true"></span>
    </label>

    <!-- Twitter -->
    <label for="Twitter">
        <span class="hidden">Twitter</span>
        <i class="fa fa-twitter"></i>
        <input class="text-box single-line" data-val="true" data-val-length="Twitter cannot exceed 100 characters." data-val-length-max="100" id="Twitter" name="Twitter" placeholder="@twitterhandle" type="text" value="">
        <span class="field-validation-valid" data-valmsg-for="Twitter" data-valmsg-replace="true"></span>
    </label>

    <!-- Email -->
    <label for="Email">
        <span class="hidden">Email</span>
        <i class="fa fa-envelope"></i>
        <input class="text-box single-line" data-val="true" data-val-length="Email Address cannot exceed 100 characters." data-val-length-max="100" id="Email" name="Email" placeholder="example@email.com" type="text" value="">
        <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
    </label>

    <!-- Other  -->
    <label for="OtherSocial">
        <span class="hidden">Other Social Media</span>
        <span data-balloon="Please list any additional online points of contact" data-balloon-pos="up">
            <i class="fa fa-plus"></i>
        </span>
        <input class="text-box single-line" data-val="true" data-val-length="Other Social Networks cannot exceed 100 characters." data-val-length-max="100" id="OtherSocial" name="OtherSocial" placeholder="Other..." type="text" value="">
        <span class="field-validation-valid" data-valmsg-for="OtherSocial" data-valmsg-replace="true"></span>
    </label>

</div>


// SOCIAL MEDIA - unique formgroup layout

// .formgroup.inline-icons
.inlineIcons {
    // label {
        margin-bottom: 0;

        // social media icons
        .fa,
        .far,
        .fas,
        .fab {
            display: block;
            float:left;
            width: 15%;
            padding: 1rem;
            margin: auto 0;
            background: $wht;
            border: 0.2rem solid $wht;
            font-size: 1.2rem;
            line-height: $base-line-height;
            max-height: 69.38px; // 3.157rem + $base-horizontal-small;
            text-align: center;
        }

        // input field
        input.single-line,
        input.text-box,
        input[type="text"],
        label > input {
            width: 85%;
            float: right;
            margin-top: 0;
            border: 0.2rem solid $wht;
        }

        @media #{$small-only} {
            .fa {font-size: 1rem; width: 10%;}
            input {width: 90%;}
        }

    // }
}

// .formgroup.socialmedia
.socialMedia {
    label {
        @extend .inlineIcons;
        .fa-facebook {color: $facebook;}
        .fa-twitter {color: $twitter;}
        &:last-child {margin-bottom: $base-horizontal-padding;}
        @media #{$small-only} {
            .fa {padding: 1rem 0 1rem 0.778rem;}
        }
    }
}


















<!-- Get Template Part -->

<?php get_template_part( 'partials/material', 'sidenav' ); ?>





<!-- php if snipp + acf get_field -->

<?php $post_logo = get_field( 'post_logo', $post->ID ); ?>
<?php if ( $post_logo ) { ?>
<div>
    <img src="<?php echo $post_logo ?>" alt="<?php echo get_the_title(); ?>" />
</div>
<?php } ?>








<!-- Categories
========================================================  -->






<!-- Display The Current Post's Categories -->
<?php $the_category = the_category(' '); if ($the_category) { echo '<span class="pipe">|</span>' . $the_category . '';} ?>-->








<!-- Custom Post Types
========================================================  -->



    <!-- Get Current Post Type Slug -->
    <?php $post_type = get_post_type(); ?>
    <?php if ( $post_type )
    {
        $post_type_data = get_post_type_object( $post_type );
        $post_type_slug = $post_type_data->rewrite['slug'];
        echo $post_type_slug;
    } ?>"


    <!-- Get Current Post Type Name -->
    <?php $postType = get_post_type_object(get_post_type()); ?>
    <?php if ($postType) {
        echo esc_html($postType->labels->singular_name);
    } ?>













<?php
    $args = array(
        'post_type'   => 'publications',
        'post_status' => 'publish',
        'post_count'  => '10',
        'offset'      => '1',      // skip over the first post.
        //  'tax_query'   => array(
        //  	array(
        //  		'taxonomy' => 'testimonial_service',
        //  		'field'    => 'slug',
        //  		'terms'    => 'diving'
        //  	)
        //  )
     );


    // Set up fields.
    $logo             = get_field( 'post_logo' );
    $icon             = get_field( 'post_icon' );
    $background_image = get_field( 'background_image' );
    $background_color = get_field( 'background_color' );

    $size             = 'thumbnail';

//    $thumb_id = get_post_thumbnail_id();
//    $thumb_url_array = wp_get_attachment_image_src( get_post_thumbnail_id( '$post-&gt;ID' ), $size, $icon);
//    $thumb_url = $thumb_url_array[0];

    $publications = new WP_Query( $args );
    if( $publications->have_posts() ) :
?>

    <?php
      while( $publications->have_posts() ) :
        $publications->the_post();
        ?>

        <!-- The Featured Image [ url ]  -->
        <img src="<?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail', true);
            echo $thumb_url[0];
        ?>" >

        <!-- Featured Image = [ img ] -->
        <?php if( $background_image ) {
            echo wp_get_attachment_image( $thumb_id, 'thumbnail' );
        } ?>

 <?php
      endwhile;
      wp_reset_postdata();
    ?>

<?php
else :
  esc_html_e( 'For some reason, there is nothing here. idk', 'text-domain' );
endif;
?>




            //    $thumb_id = get_post_thumbnail_id();
            //    $thumb_url_array = wp_get_attachment_image_src( get_post_thumbnail_id( '$post-&gt;ID' ), $size, $icon);
            //    $thumb_url = $thumb_url_array[0];
