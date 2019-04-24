<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hackathon</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/assets/strapless/styles/strapless.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
        // This code aquires the ID of the the posts's thumbnail, in order to extract its url
        $thumbnail = '';
        // Get the ID of the post_thumbnail (if it exists)
        $post_image_id = get_post_thumbnail_id($post_to_use->ID);
            // if it exists
            if ($post_image_id) {
                $thumbnail = wp_get_attachment_image_src( $post_image_id, 'full', false);
                if ($thumbnail) (string)$thumbnail = $thumbnail[0];}
                if (!empty($thumbnail)) {
    ?>
    <?php } else { ?><?php } ?>
    
    <style>
        .hero_bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.25)), url(<?php if ($thumbnail) { echo $thumbnail ;} ?>);
        }
    </style> 

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>
    
</head>
<body 
      <?php if ( is_front_page() && is_home() ) { ?> id="particles"<?php } 
            elseif ( is_page_template( 'page-thankyou.php' ) ) { ?> id="particles"<?php } 
            else { ?> style="margin-top:0;padding-top: 0;" <?php } 
      ?> 
>
