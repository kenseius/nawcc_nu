<!-- ==============================
    Side Nav
=================================== -->

<!-- SIDENAV - MOBILE SIDE SLIDEOUT MENU -->
<nav data-scroll-header class="accordion_sidenav accordion_sidenav_strapless f-menu sidenav_strapless_JSref">
	
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
    
    <div class="tabs buttonList" data-tabgroup="components_tabs">
        <!--
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php if ( is_page_template( 'page-events.php' ) ) { ?> class="active" <?php }  ?> >
                    <i class="fa fa-home"></i>
                    <span>Front Page</span>
                </a>
        -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=939" <?php if ( is_page_template( 'page-dashboard.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-home"></i>
            <span>Dashboard</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=936" <?php if ( is_page_template( 'page-blog.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-bullhorn"></i>
            <span>HQ News</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>wc_publications" <?php if ( is_page_template( 'page-publications.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-book"></i>
            <span>Publications</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>wc_events" <?php if ( is_page_template( 'page-events.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-calendar"></i>
            <span>Events</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=929" <?php if ( is_page_template( 'page-exhibits.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-university"></i>
            <span>Museum</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=930" <?php if ( is_page_template( 'page-webinars.php' ) ) { ?> class="active" <?php }  ?> >
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
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=931" <?php if ( is_page_template( 'page-webinars.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-star"></i>
            <span>Causes</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=937" <?php if ( is_page_template( 'page-research.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-binoculars"></i>
            <span>Research</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>resources" <?php if ( is_page_template( 'page-resources.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-laptop"></i>
            <span>Resources</span>
        </a>
    </div>

    </nav>

<div class="f-control-bar">
    <div class="f-control f-menu-toggle">
        <svg>
            <use xlink:href="#f-icon-menu" />
        </svg>
    </div>
</div>
