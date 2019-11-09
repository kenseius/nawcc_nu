<!--
============================================================

     GENERIC SEARCH RESULTS
    ==============================

============================================================
-->

<?php get_header(); ?>

    <!-- <header class="hero hero_color hero_loggedInPages" style="background-color:#eaeaea;">
        <h1>Search</h1>
        <p class="lead"><?php echo get_search_query(); ?></p>
    </header> -->

    <section class="searchbar">
        <?php get_search_form(); ?>
    </section>

    <style type="text/css">

        /* #myBtnContainer {display: flex;} */

        .container {
          overflow: hidden;
        }

        .filterDiv {
          float: left;
          background-color: #2196F3;
          color: #ffffff;
          /* width: 100px; */
          width: 200px;
          height: 200px;
          /* line-height: 100px; */
          text-align: center;
          margin: 2px;
          display: none; /* Hidden by default */
        }

        /* The "show" class is added to the filtered elements */
        .show {
          display: block;
        }

        /* Style the buttons */
        /* .btn {
          border: none;
          outline: none;
          padding: 12px 16px;
          background-color: #f1f1f1;
          cursor: pointer;
        } */

        /* Add a light grey background on mouse-over */
        /* .btn:hover {
          background-color: #ddd;
        } */

        /* Add a dark background to the active button */
        /* .btn.active {
          background-color: #666;
          color: white;
        } */
    </style>

    <section class="searchbar post_content wide_content">

    <!-- Control buttons -->
    <div id="myBtnContainer" class="tabButtonBar narrowButtons">
      <button class="btn active" onclick="filterSelection('all')">
          <i class="fas fa-square-full"></i>
          <span>Show all</span>
      </button>
      <button class="btn" onclick="filterSelection('publications')">
          <i class="fa fa-book"></i>
          Publications
      </button>
      <button class="btn" onclick="filterSelection('events')">
          <i class="fa fa-calendar"></i>
          Events
      </button>
      <button class="btn" onclick="filterSelection('exhibits')">
          <i class="fa fa-university"></i>
          Museum Exhibits
      </button>
      <button class="btn" onclick="filterSelection('education')">
          <i class="fa fa-graduation-cap"></i>
          Education
      </button>
      <button class="btn" onclick="filterSelection('publications')">
          <i class="fa fa-book"></i>
          Donations &amp; Causes
      </button>
      <button class="btn" onclick="filterSelection('events')">
          <i class="fa fa-calendar"></i>
          Library &amp; Research
      </button>
      <button class="btn" onclick="filterSelection('exhibits')">
          Resources
      </button>

      <?php /*
          $categories = get_categories();
          foreach($categories as $category) {
             echo '<button class="btn active" onclick="filterSelection(' . $category->slug . ')"><i class="fa fa-university"></i><span>' . $category->name . '</button>';
          }
      */ ?>
      <!-- <button class="btn" onclick="filterSelection('cars')"> Cars</button>
      <button class="btn" onclick="filterSelection('cars')"> Cars</button>
      <button class="btn" onclick="filterSelection('animals')"> Animals</button>
      <button class="btn" onclick="filterSelection('fruits')"> Fruits</button>
      <button class="btn" onclick="filterSelection('colors')"> Colors</button> -->

    </div>

    <!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
    <div class="container postList_thin">

        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="filterDiv <?php $post_type = get_post_type(); ?><?php if ( $post_type )
                    {
                        $post_type_data = get_post_type_object( $post_type );
                        $post_type_slug = $post_type_data->rewrite['slug'];
                        echo $post_type_slug;
                    } ?>"
                >
                <!-- <div class="filterDiv <?php /* $the_category = the_category(' '); if ($the_category) { echo ' ' . $the_category . ' ';} */ ?>"> -->
                    <a class="link" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        <?php $postType = get_post_type_object(get_post_type()); ?>
                        <?php if ($postType) {
                            echo esc_html($postType->labels->name);
                        } ?>
                    </a>
                </div>
            <?php endwhile; ?>

            <?php else : ?>

                <p>No go.</p>

        <?php endif; ?>
        <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>



    <?php if ( have_posts() ) : ?>
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php
                // Load values and assing defaults.
                $logo               = get_field( 'post_logo' ); // , $post->ID ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_bg.png';
                $icon               = get_field( 'post_icon' );
                $background_color   = get_field( 'background_color' ); // ?: '#ffffff';
                $text_color         = get_field( 'text_color' );
                $background_image   = get_field( 'background_image');
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large-size', true);
                $image = $thumb_url_array[0];
            ?>

            <!-- < ? p h p   get_template_part( 'content', 'search' ); ?>-->
            <a href="<?php the_permalink(); ?>" class="filterDiv <?php $post_type = get_post_type(); ?><?php if ( $post_type )
                {
                    $post_type_data = get_post_type_object( $post_type );
                    $post_type_slug = $post_type_data->rewrite['slug'];
                    echo $post_type_slug;
                } ?>">

                <?php /* if($background_color): ?>background-color:<?php echo $background_color; ?>;<?php endif; */ ?>

                <?php if($background_image): ?>
                    <img src="<?php echo $background_image; ?>">
                    <?php elseif (has_post_thumbnail () ): ?><img src="<?php echo $image; ?>">
                <?php endif; ?>

                <div>
                    <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                    <h4><?php the_title(); ?></h4>
                    <div class="meta meta_article">
                        <p>Written by <?php the_author(); ?></p>
                        <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                    </div>
                    <!-- <p><?php the_excerpt(); ?></p> -->
                </div>

            </a>
        <?php endwhile; ?>
        <!-- </section> -->
        <?php else : ?>
            <p>No go.</p>
    <?php endif; ?>
    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>




        <?php
        $args = array( 'numberposts' => 1, 'post_type' => 'publications', 'posts_per_page' => '-1', 'post_count' => '1', );
        $the_query = new WP_Query( $args ); ?>
        <?php if( $the_query->have_posts() ): ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="filterDiv cars">
                    <a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

        <?php
        $args = array('post_type' => 'events', 'posts_per_page' => '-1');
        $the_query = new WP_Query( $args ); ?>
        <?php if( $the_query->have_posts() ): ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="filterDiv colors">
                    <a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

      <div class="filterDiv colors fruits">Orange</div>
      <div class="filterDiv cars">Volvo</div>
      <div class="filterDiv colors">Red</div>
      <div class="filterDiv cars animals">Mustang</div>
      <div class="filterDiv colors">Blue</div>
      <div class="filterDiv animals">Cat</div>
      <div class="filterDiv animals">Dog</div>
      <div class="filterDiv fruits">Melon</div>
      <div class="filterDiv fruits animals">Kiwi</div>
      <div class="filterDiv fruits">Banana</div>
      <div class="filterDiv fruits">Lemon</div>
      <div class="filterDiv animals">Cow</div>
    </div>

    </section>

    <script type="text/javascript">

        filterSelection("all")
        function filterSelection(c) {
          var x, i;
          x = document.getElementsByClassName("filterDiv");
          if (c == "all") c = "";
          // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
          for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
          }
        }

        // Show filtered elements
        function w3AddClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
              element.className += " " + arr2[i];
            }
          }
        }

        // Hide elements that are not selected
        function w3RemoveClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
              arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
          }
          element.className = arr1.join(" ");
        }

        // Add active class to the current control button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
          });
        }
    </script>


    <section class="post_content SEARCH-TEMPLATE">

        <?php if ( have_posts() ) : ?>

            <section class="postList circleImages">

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php
                    // Load values and assing defaults.
                    $logo               = get_field( 'post_logo' ); // , $post->ID ) ?: get_template_directory_uri() . '/partials/blockTemplates/img/placeholder_bg.png';
                    $icon               = get_field( 'post_icon' );
                    $background_color   = get_field( 'background_color' ); // ?: '#ffffff';
                    $text_color         = get_field( 'text_color' );
                    $background_image   = get_field( 'background_image');
                	$thumb_id = get_post_thumbnail_id();
                	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large-size', true);
                	$image = $thumb_url_array[0];
                ?>

                <!-- < ? p h p   get_template_part( 'content', 'search' ); ?>-->
                <a href="<?php the_permalink(); ?>">

                    <?php if($background_color): ?>background-color:<?php echo $background_color; ?>;<?php endif; ?>
                    <?php if($background_image): ?>
                        <img src="<?php echo $background_image; ?>">
                    <?php elseif (has_post_thumbnail () ): ?><img src="'<?php echo $image; ?>'">
                    <?php endif; ?>

                    <!-- <?php /* the_post_thumbnail('thumbnail'); */ ?> -->

                    <?php if( $background_image ): ?>

                        <?php echo wp_get_attachment_image( $background_image, $size ); ?>

                    <?php else : ?>

                        <!-- Featured Image = [ img ] -->
                        <?php echo wp_get_attachment_image( $thumb_id, 'thumbnail' ); ?>

                    <?php endif; ?>

                    <div>
                        <!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
                        <h4><?php the_title(); ?></h4>
                        <div class="meta meta_article">
                            <p>Written by <?php the_author(); ?></p>
                            <p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
                        </div>
                        <!-- <p><?php the_excerpt(); ?></p> -->
                    </div>

                </a>

            <?php endwhile; ?>

            </section>

        <?php else : ?>

            <p>No go.</p>

        <?php endif; ?>


    </section>

<?php get_footer(); ?>
