<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if ( is_front_page() && is_home() ) { ?> The National Association Of Watch &amp; Clock Collectors<?php }
            elseif ( is_front_page() ) { ?> The National Association Of Watch &amp; Clock Collectors<?php }
            else { echo get_the_title(); ?> | NAWCC <?php } ?>
    </title>

    <!-- METADATA -->
    <meta name="description" content="<?php if ( is_front_page() && is_home() ) { ?> The National Association Of Watch &amp; Clock Collectors<?php } elseif ( is_front_page() ) { ?> The National Association Of Watch &amp; Clock Collectors<?php } else { echo get_the_title(); ?> | NAWCC <?php } ?>" />
	<meta name="keywords"    content="<?php if ( is_front_page() && is_home() ) { ?> The National Association Of Watch &amp; Clock Collectors<?php } elseif ( is_front_page() ) { ?> The National Association Of Watch &amp; Clock Collectors<?php } else { echo get_the_title(); ?> | NAWCC <?php } ?>" />

    <!-- METADATA - facebook -->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content="<?php if ( is_front_page() && is_home() ) { ?>The National Association Of Watch &amp; Clock Collectors<?php } elseif ( is_front_page() ) { ?>The National Association Of Watch &amp; Clock Collectors<?php } else { echo get_the_title(); ?><?php } ?>"/>
	<meta property="og:title" content="NAWCC"/>

	<!-- METADATA - google+ -->
	<meta itemprop="name" content="<?php if ( is_front_page() && is_home() ) { ?>The National Association Of Watch &amp; Clock Collectors<?php } elseif ( is_front_page() ) { ?>The National Association Of Watch &amp; Clock Collectors<?php } else { echo get_the_title(); ?> | NAWCC<?php } ?>"/>
	<meta itemprop="description" content="The National Association Of Watch &amp; Clock Collectors">
	<meta itemprop="image" content="">

    <!--    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/assets/fabricator/styles/f.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/assets/strapless/styles/strapless.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <!-- Old Font Awesome CDN TODO: remove if nothing breaks
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- <script src="https://use.fontawesome.com/542aaeaad9.js"></script> -->
  <script src="https://kit.fontawesome.com/ab8e8b3651.js"></script>


</head>

<!--
<body
      <?php if ( is_front_page() && is_home() ) { ?> id="particles"<?php }
            elseif ( is_page_template( 'page-home.php' ) ) { ?> id="particles"<?php }
            else { ?> style="margin-top:0;padding-top: 0;" <?php }
      ?>
>
-->

<body>

  <?php if ( is_front_page() && is_home() ) { ?><?php get_template_part( 'partials/material', 'topnavSearch' ); ?><?php }
        elseif ( is_page_template( 'page-home.php' ) ) { ?><?php get_template_part( 'partials/material', 'topnavSearch' ); ?><?php }
        elseif ( is_page_template( 'page-events.php' ) ) { ?><?php get_template_part( 'partials/material', 'topnavSearch' ); ?><?php }
        else { ?><?php get_template_part( 'partials/material', 'topnav' ); ?><?php }
  ?>
