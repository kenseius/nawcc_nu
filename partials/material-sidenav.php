<!-- ==============================
    Side Nav
=================================== -->

<!-- SIDENAV - MOBILE SIDE SLIDEOUT MENU -->
<nav class="accordion_sidenav accordion_sidenav_strapless f-menu sidenav_strapless_JSref">

<!--
	<div class="sidenav_header">
	     <a href="/webappstandards.html" data-balloon="Back to All Components" data-balloon-pos="bottom">
	        <i class="fa fa-chevron-left"></i>
	        <span>Back</span>
	    </a>
	    <p class="sidenav_title">
	        <i class="fa fa-paint-brush"></i> <span>Structure</span>
        </p>
	</div>
-->

    <div class="leftnav buttonList" data-tabgroup="">
        <!--
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php if ( is_page_template( 'page-events.php' ) ) { ?> class="active" <?php }  ?> >
                    <i class="fa fa-home"></i>
                    <span>Front Page</span>
                </a>
        -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>dashboard" <?php if ( is_page_template( 'page-dashboard.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-user-circle"></i>
            <span>Your Profile</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>dashboard" <?php if ( is_page_template( 'page-dashboard.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-home"></i>
            <span>Community</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog" <?php if ( is_page_template( 'page-blog.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-bullhorn"></i>
            <span>HQ News</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>publications" <?php if ( is_page_template( 'page-publications.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-book"></i>
            <span>Publications</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>wc_events" <?php if ( is_page_template( 'page-events.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-calendar"></i>
            <span>Events</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>museum" <?php if ( is_page_template( 'page-exhibits.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-university"></i>
            <span>Museum</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>wc_education" <?php if ( is_page_template( 'page-webinars.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-graduation-cap"></i>
            <span>Education</span>
        </a>
        <!--
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>webinars" <?php if ( is_page_template( 'page-webinars.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-laptop"></i>
            <span>Webinars</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>classes" <?php if ( is_page_template( 'page-classes.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-star"></i>
            <span>Classes</span>
        </a>
        -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>wc_causes" <?php if ( is_page_template( 'page-webinars.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-star"></i>
            <span>Causes</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>library" <?php if ( is_page_template( 'page-research.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-book"></i>
            <span>Library &amp; Research</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>resources" <?php if ( is_page_template( 'page-resources.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-document"></i>
            <span>Resources</span>
        </a>
    </div>

	<?php /* dynamic_sidebar( 'sidenav-main' ); */ ?>

</nav>

<!-- <div class="f-control-bar">
    <div class="f-control f-menu-toggle">
        <svg>
            <use xlink:href="#f-icon-menu" />
        </svg>
    </div>
</div> -->
