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
            elseif ( is_page_template( 'page-thankyou.php' ) ) { ?> id="particles"<?php }
            else { ?> style="margin-top:0;padding-top: 0;" <?php }
      ?>
>
-->

<body>

<nav class="nav primary_navigation" role="navigation">
    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <svg width="370" height="65" viewBox="0 0 370 55" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Logo">
                <g id="Logo Icon">
                    <g id="Background">
                        <rect id="Background_2" x="2.16516" y="2.16504" width="49.7996" height="49.7996" fill="#EAEAEA"/>
                        <g id="Vector">
                            <path d="M2.16516 6.76609C12.8902 11.261 15.7742 15.1339 21.652 24.8996C26.2939 35.669 26.4979 40.2499 25.1704 51.9646H2.16516V6.76609Z" fill="#FAFAFA"/>
                            <path d="M43.304 2.16504H51.9648V16.7801C50.4272 13.3973 49.5669 11.5015 47.6344 8.11934C45.9698 5.58002 45.0359 4.29779 43.304 2.16504Z" fill="#FAFAFA"/>
                        </g>
                    </g>
                    <g id="bottom hand">
                        <path id="Polygon" d="M40.7068 33.1302L1.35363 41.4095L1.35363 38.9737L40.7068 33.1302Z" fill="#252525"/>
                        <circle id="Ellipse 2.9" cx="18.8869" cy="36.9399" r="1.7065" fill="white" stroke="#252525" stroke-width="2"/>
                    </g>
                    <g id="top hand">
                        <path id="Polygon_2" d="M22.2574 5.11528L1.89465 30.3119L1.89435 27.6054L22.2574 5.11528Z" fill="#252525"/>
                        <circle id="Ellipse 2.10" cx="7.80956" cy="21.9049" r="1.7065" transform="rotate(-39.3836 7.80956 21.9049)" fill="white" stroke="#252525" stroke-width="2"/>
                    </g>
                    <g id="clock numbers">
                        <g id="II">
                            <path d="M24.3658 16.9786L24.7613 17.6731C25.1506 18.3566 25.5482 18.6704 25.9543 18.6143C26.3645 18.5656 27.9882 17.7335 30.8251 16.1179L34.5624 13.9897C37.5023 12.3155 39.0894 11.3339 39.3238 11.0447C39.5581 10.7555 39.5079 10.3169 39.1731 9.72893L38.6645 8.83595L39.3591 8.44043C40.0024 9.68977 40.6631 10.9098 41.3411 12.1004C41.9061 13.0926 42.4446 13.9783 42.9564 14.7575L42.2619 15.153L41.7785 14.3041C41.4813 13.7823 41.2326 13.4908 41.0323 13.4296C40.832 13.3685 40.472 13.4713 39.9524 13.738C39.145 14.1491 37.7344 14.9281 35.7206 16.0748L31.9172 18.2408C29.0582 19.8689 27.5173 20.8291 27.2944 21.1215C27.0789 21.4096 27.1637 21.8918 27.5488 22.568L27.9631 23.2956L27.2686 23.6911C26.8052 22.7578 26.2701 21.7583 25.6632 20.6926C24.9559 19.4505 24.2919 18.3443 23.6713 17.3741L24.3658 16.9786Z" fill="#444444"/>
                            <path d="M27.4119 22.3276L27.8074 23.0222C28.1967 23.7057 28.5943 24.0194 29.0004 23.9634C29.4107 23.9147 31.0343 23.0826 33.8712 21.467L37.6085 19.3388C40.5484 17.6646 42.1355 16.6829 42.3699 16.3938C42.6042 16.1046 42.554 15.666 42.2192 15.078L41.7107 14.185L42.4052 13.7895C43.0485 15.0388 43.7092 16.2588 44.3872 17.4495C44.9522 18.4417 45.4907 19.3274 46.0025 20.1065L45.308 20.502L44.8246 19.6532C44.5274 19.1313 44.2787 18.8399 44.0784 18.7787C43.8781 18.7176 43.5181 18.8204 42.9985 19.0871C42.1911 19.4982 40.7805 20.2771 38.7667 21.4239L34.9633 23.5898C32.1043 25.2179 30.5634 26.1782 30.3405 26.4705C30.125 26.7587 30.2098 27.2409 30.5949 27.9171L31.0092 28.6447L30.3147 29.0402C29.8513 28.1069 29.3162 27.1074 28.7093 26.0417C28.002 24.7996 27.338 23.6934 26.7174 22.7232L27.4119 22.3276Z" fill="#444444"/>
                        </g>
                        <g id="III">
                            <path d="M33.1325 38.036L33.1315 38.7354C33.1306 39.4236 33.2965 39.8346 33.6294 39.9682C33.9622 40.1092 35.5569 40.1815 38.4135 40.1851L42.1767 40.1897C45.137 40.1934 46.7689 40.1362 47.0725 40.0182C47.3761 39.9002 47.5283 39.5451 47.5291 38.9531L47.5304 38.0539L48.2297 38.0548C48.1762 39.2832 48.1486 40.4969 48.1469 41.6958C48.1455 42.6948 48.1701 43.6014 48.2208 44.4156L47.5214 44.4147L47.5226 43.5599C47.5234 43.0345 47.4609 42.7051 47.3353 42.5717C47.2097 42.4384 46.8916 42.3602 46.381 42.3374C45.5891 42.2994 44.1794 42.2792 42.1516 42.2767L38.3218 42.2719C35.443 42.2683 33.8555 42.3293 33.5593 42.4547C33.2705 42.5802 33.1256 42.9833 33.1246 43.6642L33.1236 44.3968L32.4243 44.396C32.4773 43.4857 32.5046 42.4941 32.5061 41.421C32.5079 40.1703 32.4836 39.0417 32.4332 38.0352L33.1325 38.036Z" fill="#444444"/>
                            <path d="M33.1266 42.2854L33.1256 42.9848C33.1246 43.673 33.2906 44.084 33.6234 44.2176C33.9562 44.3586 35.551 44.4309 38.4076 44.4345L42.1708 44.4391C45.131 44.4428 46.7629 44.3856 47.0665 44.2676C47.3701 44.1496 47.5223 43.7945 47.5231 43.2025L47.5244 42.3033L48.2238 42.3042C48.1702 43.5326 48.1426 44.7463 48.1409 45.9452C48.1395 46.9442 48.1642 47.8508 48.2148 48.665L47.5155 48.6641L47.5167 47.8093C47.5174 47.2839 47.455 46.9545 47.3294 46.8211C47.2037 46.6878 46.8856 46.6097 46.375 46.5868C45.5832 46.5488 44.1734 46.5286 42.1457 46.5261L38.3159 46.5213C35.437 46.5177 33.8495 46.5787 33.5533 46.7041C33.2645 46.8296 33.1196 47.2327 33.1187 47.9136L33.1177 48.6462L32.4183 48.6454C32.4714 47.7352 32.4987 46.7435 32.5002 45.6704C32.5019 44.4197 32.4776 43.2911 32.4272 42.2846L33.1266 42.2854Z" fill="#444444"/>
                            <path d="M33.1206 46.5348L33.1196 47.2342C33.1187 47.9225 33.2846 48.3334 33.6175 48.467C33.9503 48.608 35.545 48.6803 38.4016 48.6839L42.1648 48.6885C45.1251 48.6922 46.757 48.635 47.0606 48.517C47.3641 48.399 47.5164 48.0439 47.5172 47.4519L47.5184 46.5527L48.2178 46.5536C48.1643 47.782 48.1367 48.9957 48.135 50.1946C48.1336 51.1937 48.1582 52.1003 48.2089 52.9144L47.5095 52.9135L47.5107 52.0588C47.5115 51.5333 47.449 51.2039 47.3234 51.0705C47.1978 50.9372 46.8797 50.8591 46.3691 50.8362C45.5772 50.7983 44.1675 50.778 42.1397 50.7755L38.3099 50.7707C35.4311 50.7672 33.8436 50.8281 33.5474 50.9535C33.2586 51.079 33.1137 51.4821 33.1127 52.163L33.1117 52.8956L32.4124 52.8948C32.4654 51.9846 32.4927 50.9929 32.4942 49.9198C32.496 48.6691 32.4717 47.5405 32.4213 46.534L33.1206 46.5348Z" fill="#444444"/>
                        </g>
                        <path id="I" d="M9.76998 4.68761L9.10663 4.24174L8.66077 4.90509C9.64845 5.49762 10.7354 6.19256 11.9217 6.98993C12.9396 7.67406 13.8637 8.33086 14.694 8.96033L15.1399 8.29699L14.445 7.82989C13.7992 7.39582 13.5086 7.0018 13.5733 6.64783C13.6427 6.28684 14.5951 4.74101 16.4304 2.01041L14.5075 0.595703C12.6863 3.30524 11.6029 4.77312 11.2572 4.99936C10.9185 5.23031 10.4228 5.12639 9.76998 4.68761Z" fill="#444444"/>
                    </g>
                    <rect id="Border" x="2" y="2" width="50.13" height="50.13" stroke="#DDDDDD" stroke-width="4"/>
                </g>
                <g id="National Association Of Watch &#38; Clock Collectors">
                    <text fill="#252525" xml:space="preserve" style="white-space: pre" font-family="Arvo" font-size="22.624" font-weight="bold" letter-spacing="0em">
                        <tspan x="66" y="45.1504">Watch &amp; Clock Collectors</tspan>
                    </text>
                    <text fill="#252525" xml:space="preserve" style="white-space: pre" font-family="Arvo" font-size="16" letter-spacing="0em">
                        <tspan x="66" y="19.0273">National Association Of</tspan>
                    </text>
                </g>
            </g>
        </svg>
    </a>
    <div class="links">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>join" class="navitem  ">
            <i class="fa fa-check-square"></i>
            Join
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>about" class="navitem  ">About</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>market" class="navitem  ">Market</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>donate" class="navitem  ">Donate</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>dashboard" class="navitem  ">Log In</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>search" <?php if ( is_page_template( 'page-search.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-search"></i>
            <span>Search</span>
        </a>
    </div>
    <a class="nav-trigger nav-open">
        <div class="inner"></div>
        <span class="menulabel">Menu</span>
    </a>
</nav>
