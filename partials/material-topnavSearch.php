
<nav class="nav primary_navigation search_nav" role="navigation">
    <a class="nav-trigger nav-open f-control f-menu-toggle active">
        <div class="inner"></div>
        <span class="menulabel">Menu</span>
    </a>
    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <span class="desktop"><?php get_template_part( 'partials/logos/material', 'logo_NAWCC' ); ?></span>
        <span class="mobile"><?php get_template_part( 'partials/logos/material', 'logoIcon_NAWCC' ); ?></span>
    </a>

    <?php /* get_search_form();*/  ?>

    <form class="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
        <div class="pseudo-search">

            <!-- Search -->
            <label for="s" class="hidden assistive-text">Search</label>
            <input type="search"
                   id="s"
                   name="s"
                   title="s"
                   value="<?php echo esc_attr( get_search_query() ); ?>"
                   placeholder="Search..." >

            <?php /* wp_dropdown_categories( 'show_option_all=All Categories' ); */ ?>

            <!-- Search Sumbit Button -->
            <button class="fa fa-search" type="submit"></button>
    <!--
            <input type="submit"
                   class="search-button fa fa-search"
                   name="submit"
                   id="searchsubmit"
                   value="<?php esc_attr_e( 'Search', 'shape' ); ?>" />
    -->

        </div>
    </form>


    <div class="links">
        <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>join" class="navitem  ">Join</a> -->
        <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>about" class="navitem  ">About</a> -->
        <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>market" class="navitem  ">Market</a> -->
        <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>donate" class="navitem  ">Donate</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>dashboard" class="navitem  ">Log In</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>search" <?php if ( is_page_template( 'page-search.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-search"></i>
            <span>Search</span>
        </a> -->

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>dashboard" class="navitem <?php if ( is_page_template( 'page-dashboard.php' ) ) { ?>active<?php } ?>">
            <i class="fa fa-user"></i>
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
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>articles" <?php if ( is_page_template( 'page-publications.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-book"></i>
            <span>Publications</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>events" <?php if ( is_page_template( 'page-events.php' ) ) { ?> class="active" <?php }  ?> >
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
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>wc_causes" <?php if ( is_page_template( 'page-webinars.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-star"></i>
            <span>Causes</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>research" <?php if ( is_page_template( 'page-research.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-binoculars"></i>
            <span>Research</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>resources" <?php if ( is_page_template( 'page-resources.php' ) ) { ?> class="active" <?php }  ?> >
            <i class="fa fa-laptop"></i>
            <span>Resources</span>
        </a>

    </div>
</nav>
