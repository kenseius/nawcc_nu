<?php /* Template Name: Dashboard */ ?>

<?php get_header(); ?>

<?php get_template_part( 'partials/material', 'sidenav' ); ?>

<main class="f-container">


    <!-- TEST -->

<!-- ==============================
    Hero
=================================== -->
<?php $background_color = get_field( 'background_color' ) ?: '#fafafa'; ?>
<?php if($background_color): ?>
<header class="hero hero_color hero_loggedInPages" style="background-color:<?php echo $background_color; ?>">
<?php endif; ?>
    <div>
        <p class="subtitle"><?php the_title(); ?></p>
        <div class="memberProfile circleImages">
            <?php bp_loggedin_user_avatar('type=full') ?>
            <h1>
                <!-- <i class="fa fa-user-circle"></i>  -->
                Calvin Hobbes
            </h1>
        </div>
    </div>
</header>



<!-- <section class="heroFeaturedIntro wp-block-media-text alignwide">
    <div class="wp-block-media-text__content article" style="background: #fafafa;">
        <p class="subtitle">Your Dashboard</p>
        <div class="memberProfile circleImages">
            <?php bp_loggedin_user_avatar('type=full') ?>
            <h2>
                Calvin Hobbes
            </h2>
        </div>
    </div>
    <div class="wp-block-media-text__media hero hero_color" style="/*border-left: 2px solid #999;*/background-color: #eaeaea">
        <p class="has-large-font-size">Welcome To Your Dashboard!</p>
        <div class="buttonList sidenav">
            <a href="#blog" >
                <i class="fa fa-bullhorn"></i>
                <p>Community</p>
            </a>
            <a href="#publications">
                <i class="fa fa-book"></i>
                <p>Publications</p>
            </a>
            <a href="#events">
                <i class="fa fa-calendar"></i>
                <p>Events</p>
            </a>
            <a href="#education" >
                <i class="fa fa-graduation-cap"></i>
                <p>Education</p>
            </a>
            <a href="#museum">
                <i class="fa fa-university"></i>
                <p>Museum</p>
            </a>
            <a href="#research">
                <i class="fa fa-comment-alt"></i>
                <p>Message Board</p>
            </a>
            <a href="#causes">
                <i class="fa fa-star"></i>
                <p>Donate</p>
            </a>
            <a href="#research">
                <i class="fa fa-book"></i>
                <p>Library &amp; Research</p>
            </a>
        </div>
    </div>

</section> -->



<!-- ==============================
    Hero
=================================== -->
<?php $background_color = get_field( 'background_color' ) ?: '#fafafa'; ?>
<?php if($background_color): ?>
<!-- <header class="hero hero_color hero_loggedInPages" style="background-color:<?php echo $background_color; ?>"> -->
<?php endif; ?>
    <!-- <p class="subtitle"><?php the_title(); ?></p>
    <p>Welcome</p>
    <h1>
        <i class="fa fa-user-circle"></i>
        Calvin Hobbes
    </h1>
    <section class="searchbar">
        <?php /* get_search_form(); */ ?>
    </section>
</header> -->

<?php $background_color = get_field( 'background_color' ) ?: '#fff'; ?>
<?php if($background_color): ?>
<!-- <header class="hero hero_color hero_loggedInPages" style="background-color:<?php echo $background_color; ?>"> -->
<?php endif; ?>
    <!-- <div>
        <p class="subtitle"><?php the_title(); ?></p>
        <p>Welcome</p>
        <h1>
            <i class="fa fa-user-circle"></i>
            Calvin Hobbes
        </h1>
    </div>
    <section class="searchbar">
        <?php /* get_search_form(); */ ?>
    </section>
</header> -->




<!-- Control buttons -->
<div id="myBtnContainer" class="tabButtonBar tabsMaxWidth">
    <div>
        <button class="btn active" onclick="filterSelection('news')">News</button>
        <button class="btn" onclick="filterSelection('activity')">Activity</button>
        <button class="btn" onclick="filterSelection('events')">Favorites</button>
        <button class="btn" onclick="filterSelection('events')">Groups</button>
        <button class="btn" onclick="filterSelection('events')">Resources</button>
    </div>
</div>



<section>



<style type="text/css">

#myInput {
  background-image: url('https://www.w3schools.com/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 20px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  padding-left: 40px;
}

#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
}

/* #myUL li a, */
.myUL li a  {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}

/* #myUL li a:hover:not(.header),  */
.myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}

</style>





<section class="post_content wide_content" style="padding-top:1.999rem;">


<h3>
    <i class="fa fa-bullhorn"></i>
    <span>HQ News</span>
</h3>

<div class="wp-block-columns leftcol_8">
	<div class="wp-block-column">
		<div class="buttonList narrowButtons sidenav">
            <button class="btn active" onclick="filterSelection('all')">
                <i class="fas fa-square-full"></i>
                <span>Show all</span>
            </button>
            <button class="btn" onclick="filterSelection('publications')">
                <i class="fa fa-book"></i>
                <span>Publications</span>
            </button>
            <button class="btn" onclick="filterSelection('events')">
                <i class="fa fa-calendar"></i>
                <span>Events</span>
            </button>
            <button class="btn" onclick="filterSelection('exhibits')">
                <i class="fa fa-university"></i>
                <span>Museum Exhibits</span>
            </button>
            <button class="btn" onclick="filterSelection('education')">
                <i class="fa fa-graduation-cap"></i>
                <span>Education</span>
            </button>
            <button class="btn" onclick="filterSelection('publications')">
                <i class="fa fa-book"></i>
                <span>Donations &amp; Causes</span>
                </button>
            <button class="btn" onclick="filterSelection('events')">
                <i class="fa fa-calendar"></i>
                <span>Library &amp; Research</span>
                </button>
            <button class="btn" onclick="filterSelection('exhibits')">
                <span>Resources</span>
            </button>
		</div>
	</div>

	<div class="wp-block-column">


        <div class="pseudo-search">

            <!-- Search -->
            <label for="s" class="hidden assistive-text">Search</label>
            <input type="search" id="myInput" onkeyup="myFunction()" placeholder="Sort results here...">

            <button class="w3-btn" onclick="sortListDir()">
                <i class="fas fa-sort"></i>
                <span class="sr-only">Ascending / Descending</span>
            </button>
            <button class="w3-btn" onclick="sortList()">
                <i class="fas fa-sort-alpha-down"></i>
                <span class="sr-only">Alphabetically</span>
            </button>

        </div>

<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'publications',
    'posts_per_page' => 3
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>



    <section class="postList circleImages" id="myUL">

        <!-- <ul id="myUL"> -->

        <!-- <div id="myUL"> -->
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

             <?php get_template_part( 'partials/blockTemplates/block', 'mediaObject' ); ?>

        <?php endwhile; ?>
        <!-- </div> -->
        <!-- </ul> -->
    </section>

<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

    </div>
</div>

</section>


<script type="text/javascript">

function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('a');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("h4")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

</script>


<!-- Control buttons -->

<div id="myBtnContainer" class="tabButtonBar">
    <button class="btn active" onclick="filterSelection('news')">News</button>
    <button class="btn" onclick="filterSelection('activity')">Activity</button>
    <button class="btn" onclick="filterSelection('events')">Favorites</button>
    <button class="btn" onclick="filterSelection('events')">Groups</button>
    <button class="btn" onclick="filterSelection('events')">Resources</button>


    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

    <button class="w3-btn" onclick="sortListDir()">
        <i class="fas fa-sort"></i>
        <span class="sr-only">Asc / Desc</span>
    </button>
    <button class="w3-btn" onclick="sortList()">
        <i class="fas fa-sort-alpha-down"></i>
        <span class="sr-only">Alphabetically</span>
    </button>

</div>



<section class="searchbar">
    <div class="search">
        <div class="pseudo-search">

            <!-- Search -->
            <label for="s" class="hidden assistive-text">Search</label>
            <input type="search" id="myInput" onkeyup="myFunction()" placeholder="Sort results here...">

            <button class="w3-btn" onclick="sortListDir()">
                <i class="fas fa-sort"></i>
                <span class="sr-only">Asc / Desc</span>
            </button>
            <button class="w3-btn" onclick="sortList()">
                <i class="fas fa-sort-alpha-down"></i>
                <span class="sr-only">Alphabetically</span>
            </button>

        </div>
    </div>
</section>



<button class="w3-btn" onclick="sortListDir()"><i class="fas fa-sort"></i> Asc / Desc</button>
<button class="w3-btn" onclick="sortList()"><i class="fas fa-sort-alpha-down"></i> Alphabetically</button>

<ul class="myUL" id="myUL">
  <li><a href="#">Adele</a></li>
  <li><a href="#">Agnes</a></li>

  <li><a href="#">Billy</a></li>
  <li><a href="#">Bob</a></li>

  <li><a href="#">Calvin</a></li>
  <li><a href="#">Christina</a></li>
  <li><a href="#">Cindy</a></li>
</ul>


<ul id="id01">
  <li>Oslo</li>
  <li>Stockholm</li>
  <li>Helsinki</li>
  <li>Berlin</li>
  <li>Rome</li>
  <li>Madrid</li>
</ul>

<script>
function sortListDir() {
  var list, i, switching, b, shouldSwitch, dir, switchcount = 0;
  list = document.getElementById("myUL");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  // Make a loop that will continue until no switching has been done:
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    b = list.getElementsByTagName("a");
    // Loop through all list-items:
    for (i = 0; i < (b.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Check if the next item should switch place with the current item,
      based on the sorting direction (asc or desc): */
      if (dir == "asc") {
        if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
          /* If next item is alphabetically lower than current item,
          mark as a switch and break the loop: */
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (b[i].innerHTML.toLowerCase() < b[i + 1].innerHTML.toLowerCase()) {
          /* If next item is alphabetically higher than current item,
          mark as a switch and break the loop: */
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
      // Each time a switch is done, increase switchcount by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

<script>
function sortList() {
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("myUL");
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    b = list.getElementsByTagName("a");
    // Loop through all list items:
    for (i = 0; i < (b.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Check if the next item should
      switch place with the current item: */
      if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
        /* If next item is alphabetically lower than current item,
        mark as a switch and break the loop: */
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark the switch as done: */
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
}
</script>



</section>


<hr>



  <?php if ( bp_has_groups() ) : ?>

    <section class="postList circleImages">

        <?php while ( bp_groups() ) : bp_the_group(); ?>

            <a href="<?php bp_group_permalink() ?>">
                <?php bp_group_avatar( 'type=thumb&width=50&height=50' ) ?>
                <div>
                    <h4><?php bp_group_name() ?></h4>
                    <div class="meta meta_article">
                        <p><?php bp_group_type() ?> / <?php bp_group_member_count() ?></p>
                        <p><time><?php printf( __( 'active %s ago', 'buddypress' ), bp_get_group_last_active() ) ?></time</p>
                    </div>
                    <?php bp_group_description_excerpt() ?>
                    <hr>
                    <?php bp_group_join_button() ?>
                    <?php do_action( 'bp_directory_groups_actions' ) ?>
                </div>
            </a>

        <?php endwhile; ?>

                <div class="pagination">

                    <div class="pag-count" id="group-dir-count">
                        <?php bp_groups_pagination_count() ?>
                    </div>

                    <div class="pagination-links" id="group-dir-pag">
                        <?php bp_groups_pagination_links() ?>
                    </div>

                </div>

    </section>

    <?php do_action( 'bp_after_groups_loop' ) ?>

<?php else: ?>

    <div id="message" class="info">
        <p><?php _e( 'There were no groups found.', 'buddypress' ) ?></p>
    </div>

<?php endif; ?>




<?php if ( bp_has_activities( bp_ajax_querystring( 'activity' ) ) ) : ?>
    <?php while ( bp_activities() ) : bp_the_activity(); ?>

        <?php locate_template( array( 'activity/entry.php' ), true, false ); ?>

    <?php endwhile; ?>
<?php endif; ?>


<?php if ( bp_has_groups() ) : ?>

    <div class="pagination">

        <div class="pag-count" id="group-dir-count">
            <?php bp_groups_pagination_count() ?>
        </div>

        <div class="pagination-links" id="group-dir-pag">
            <?php bp_groups_pagination_links() ?>
        </div>

    </div>

    <ul id="groups-list" class="item-list">
    <?php while ( bp_groups() ) : bp_the_group(); ?>

        <li>
            <div class="item-avatar">
                <a href="<?php bp_group_permalink() ?>"><?php bp_group_avatar( 'type=thumb&width=50&height=50' ) ?></a>
            </div>

            <div class="item">
                <div class="item-title"><a href="<?php bp_group_permalink() ?>"><?php bp_group_name() ?></a></div>
                <div class="item-meta"><span class="activity"><?php printf( __( 'active %s ago', 'buddypress' ), bp_get_group_last_active() ) ?></span></div>

                <div class="item-desc"><?php bp_group_description_excerpt() ?></div>

                <?php do_action( 'bp_directory_groups_item' ) ?>
            </div>

            <div class="action">
                <?php bp_group_join_button() ?>

                <div class="meta">
                    <?php bp_group_type() ?> / <?php bp_group_member_count() ?>
                </div>

                <?php do_action( 'bp_directory_groups_actions' ) ?>
            </div>

            <div class="clear"></div>
        </li>

    <?php endwhile; ?>
    </ul>

    <?php do_action( 'bp_after_groups_loop' ) ?>

<?php else: ?>

    <div id="message" class="info">
        <p><?php _e( 'There were no groups found.', 'buddypress' ) ?></p>
    </div>

<?php endif; ?>


<?php if ( bp_has_profile() ) : ?>
  <?php while ( bp_profile_groups() ) : bp_the_profile_group(); ?>

    <ul id="profile-groups">
    <?php if ( bp_profile_group_has_fields() ) : ?>

      <li>
        <?php bp_the_profile_group_name() ?>

        <ul id="profile-group-fields">
        <?php while ( bp_profile_fields() ) : bp_the_profile_field(); ?>

          <?php if ( bp_field_has_data() ) : ?>
          <li>
            <?php bp_the_profile_field_name() ?>
            <?php bp_the_profile_field_value() ?>
          </li>
          <?php endif; ?>

        <?php endwhile; ?>
        </ul>
      <li>

    <?php endif; ?>
    </ul>

  <?php endwhile; ?>

<?php else: ?>

  <div id="message" class="info">
    <p>This user does not have a profile.</p>
  </div>

<?php endif;?>



<div class="wp-block-columns leftcol_8">
	<div class="wp-block-column">
		<div class="buttonList sidenav">
		  <a href="#" class="active">
		    <i class="fa fa-file" aria-hidden="true"></i>
		    <span>Fund Info Sheet</span>
		  </a>
		  <a href="#">
		    <i class="fa fa-file" aria-hidden="true"></i>
		    <span>Pledge Form</span>
		  </a>
		</div>
	</div>

	<div class="wp-block-column">

<!-- <div class="dashboard_layout"> -->


<div>

<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'publications',
    'posts_per_page' => 3
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>
            <i class="fa fa-bullhorn"></i>
            <span>HQ News</span>
        </h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php get_template_part( 'partials/material', 'mediaObject' ); ?>

        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>






<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'publications',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Publications</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'events',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Events</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>



<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'exhibits',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Exhibits</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'classes',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Classes</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'webinars',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Webinars</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>



<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'causes',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Causes</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>




<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'research',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Research</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>





<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'resources',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Resources</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>




</div>

</div>

</div>




<div class="dashboard_layout">



<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'post',
    'posts_per_page' => 3
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>
            <i class="fa fa-bullhorn"></i>
            <span>HQ News</span>
        </h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>






<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'publications',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Publications</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'events',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Events</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>



<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'exhibits',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Exhibits</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'classes',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Classes</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'webinars',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Webinars</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>



<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'causes',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Causes</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>




<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'research',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Research</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>





<?php

// args
$args = array(
	'numberposts'	=> '3',
	'post_type'		=> 'resources',
    'posts_per_page' => 3,
//	'meta_key'		=> 'location',
//	'meta_value'	=> 'Melbourne'
);


// query
$the_query = new WP_Query( $args );

$background_image = get_field( 'background_image', $post->ID );

?>
<?php if( $the_query->have_posts() ): ?>

    <section class="postList circleImages">
        <h3>Resources</h3>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('thumbnail'); ?>

            <?php if( $background_image ): ?>

                <?php echo wp_get_attachment_image( $background_image, $size ); ?>

            <?php else : ?>

                <!-- Featured Image = [ img ] -->
                <?php echo wp_get_attachment_image( 'thumbnail' ); ?>

            <?php endif; ?>

            <div>
                <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                <h4><?php the_title(); ?></h4>
                <div class="meta meta_article">
                    <p>Written by <?php the_author(); ?></p>
                    <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                </div>
                <p class="the_excerpt"><?php the_excerpt(); ?></p>
            </div>

        </a>
        <?php endwhile; ?>
    </section>



<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>




</div>

</main>

<?php get_footer(); ?>
