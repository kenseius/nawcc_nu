<!-- ==============================
    Side Nav
=================================== -->

<!-- SIDENAV - MOBILE SIDE SLIDEOUT MENU -->
<nav data-scroll-header class="accordion_sidenav accordion_sidenav_strapless f-menu sidenav_strapless_JSref">
	
	<div class="sidenav_header">
	    <!-- <a href="/webappstandards.html" data-balloon="Back to All Components" data-balloon-pos="bottom">
	        <i class="fa fa-chevron-left"></i>
	        <span>Back</span>
	    </a> -->
	    <p class="sidenav_title">
	        <i class="fa fa-paint-brush"></i> <span>Structure</span>
        </p> 
	</div> 
    
    <div class="tabs" data-tabgroup="components_tabs">
	   <a href="#01-info" class="active">What Is This?</a>
        <?php
            $args = array(
              'orderby' => 'name',
              'parent' => 0
              );
            $categories = get_categories( $args );
            foreach ( $categories as $category ) {
                echo '<a href="<?php the_permalink(); ?>" class="f-menu__heading">' . $category->name . '</a>';
            }
        ?>
        <a href="#02-page" class="f-menu__heading">
            Page
        </a>
        <a href="#03-templates" class="f-menu__heading">
            Templates
        </a>
        <a href="#04-content_containers" class="f-menu__heading">
            Content Containers
        </a>
        <a href="#05-hierarchy" class="f-menu__heading">
            Hierarchy
        </a>
        <a href="#06-specifications" class="f-menu__heading">
            Specifications
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
