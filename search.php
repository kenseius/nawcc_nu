<!--
============================================================

     GENERIC SEARCH RESULTS
    ==============================

============================================================
-->

<?php get_header(); ?>

<?php get_template_part( 'partials/material', 'sidenav' ); ?>

<main class="f-container">


    <!-- <header class="hero hero_color hero_loggedInPages" style="background-color:#eaeaea;">
        <h1>Search</h1>
        <p class="lead"><?php echo get_search_query(); ?></p>
    </header> -->

    <header class="hero hero_short hero_color" style="background:#eaeaea;">
    <div class="searchbar">
        <h1 class="sr-only">Search Results For: <?php echo get_search_query(); ?></h1>
        <p class="lead">Search Results For: <?php echo get_search_query(); ?></p>
        <?php get_search_form(); ?>
    </div>
</header>



    <section class="searchbar post_content wide_content">


    <!-- <div id="myBtnContainer" class="tabButtonBar tabsMaxWidth narrowButtons">
        <div>
            <a class="tag active" onclick="filterSelection('all')">
                <i class="fas fa-square-full"></i>
                <span>Show all</span>
            </a>
            <a class="tag" onclick="filterSelection('publications')">
                <i class="fa fa-book"></i>
                Publications
            </a>
            <a class="tag" onclick="filterSelection('events')">
                <i class="fa fa-calendar"></i>
                Events
            </a>
            <a class="tag" onclick="filterSelection('exhibits')">
            <i class="fa fa-university"></i>
            Museum Exhibits
        </a>
            <a class="tag" onclick="filterSelection('education')">
            <i class="fa fa-graduation-cap"></i>
            Education
        </a>
            <button class="tag" onclick="filterSelection('publications')">
            <i class="fa fa-star"></i>
            Donations &amp; Causes
            </button>
            <button class="tag" onclick="filterSelection('events')">
            <i class="fa fa-book"></i>
            Library &amp; Research
            </button>
            <button class="tag" onclick="filterSelection('exhibits')">
            <i class="fa fa-file"></i>
            Resources
            </button>
        </div>
    </div> -->


    <!-- Control buttons -->
    <!-- <div id="myBtnContainer" class="tabButtonBar tabsMaxWidth narrowButtons">
        <div>
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
                  <i class="fa fa-star"></i>
                  Donations &amp; Causes
              </button>
              <button class="btn" onclick="filterSelection('events')">
                  <i class="fa fa-book"></i>
                  Library &amp; Research
              </button>
              <button class="btn" onclick="filterSelection('exhibits')">
                  <i class="fa fa-file"></i>
                  Resources
              </button>
        </div> -->



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

    <!-- </div> -->

    <div class="search searchbar filterSearchBar">

        <?php get_template_part( 'partials/blockTemplates/block', 'sortBar' ); ?>

        <div class="filterTags" data-f-toggle="notes">
            <button class="tag active" onclick="filterSelection('all')">
                <i class="fas fa-square-full"></i>
                <span>Show all</span>
            </button>
            <button class="tag" onclick="filterSelection('publications')">
                <i class="fa fa-book"></i>
                <span>Publications</span>
            </button>
            <button class="tag" onclick="filterSelection('events')">
                <i class="fa fa-calendar"></i>
                <span>Events</span>
            </button>
            <button class="tag" onclick="filterSelection('exhibits')">
                <i class="fa fa-university"></i>
                <span>Museum Exhibits</span>
            </button>
            <button class="tag" onclick="filterSelection('education')">
                <i class="fa fa-graduation-cap"></i>
                <span>Education</span>
            </button>
            <button class="tag" onclick="filterSelection('publications')">
                <i class="fa fa-star"></i>
                <span>Donations &amp; Causes</span>
            </button>
            <button class="tag" onclick="filterSelection('events')">
                <i class="fa fa-book"></i>
                <span>Library &amp; Research</span>
            </button>
            <button class="tag" onclick="filterSelection('exhibits')">
                <i class="fa fa-file"></i>
                <span>Resources</span>
            </button>
        </div>



        <!-- <div class="f-controls">


            fabricator icons
            <svg style="display: none;">
            	<symbol id="f-icon-code" viewBox="0 0 512 512">
            		<path d="M377.3 121.3l-40.5 40.4 94.4 94.3-94.4 94.3 40.5 40.4L512 256zM134.7 121.3L0 256l134.7 134.7 40.5-40.4L80.8 256l94.4-94.3zM281.8 103.8zM230.183 408.16l-29.233-7.97 80.85-296.484 29.234 7.972z"/>
            	</symbol>
            	<symbol id="f-icon-notes" viewBox="0 0 512 512">
            		<path d="M443.8 0H68.2C30.6 0 0 30.5 0 68v264.2c0 16.6 8.9 29.5 25.9 37.5 15.3 7.2 33.1 8.4 40.1 8.5V512l201.6-134h176.1c37.6 0 68.2-30.3 68.2-67.8V68c.1-37.5-30.5-68-68.1-68zM114 438V330H68.2c-11.1 0-19.2-8.8-19.2-19.8V68c0-11 8.2-20 19.2-20h375.5c11.1 0 19.2 9 19.2 20v242.2c0 11-8.2 19.8-19.2 19.8H244.2L114 438z"/>
            	</symbol>
            	<symbol id="f-icon-labels" viewBox="0 0 512 512">
            		<path d="M304 280c0 13.2-10.8 24-24 24h-48c-13.2 0-24-10.8-24-24v-48c0-13.2 10.8-24 24-24h48c13.2 0 24 10.8 24 24v48zM464 280c0 13.2-10.8 24-24 24h-48c-13.2 0-24-10.8-24-24v-48c0-13.2 10.8-24 24-24h48c13.2 0 24 10.8 24 24v48zM144 280c0 13.2-10.8 24-24 24H72c-13.2 0-24-10.8-24-24v-48c0-13.2 10.8-24 24-24h48c13.2 0 24 10.8 24 24v48z"/>
            	</symbol>
            	<symbol id="f-icon-menu" viewBox="0 0 512 512">
            		<path d="M512 100c0 6.6-5.4 12-12 12H12c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h488c6.6 0 12 5.4 12 12v24zM512 212c0 6.6-5.4 12-12 12H12c-6.6 0-12-5.4-12-12v-24c0-6.6 5.4-12 12-12h488c6.6 0 12 5.4 12 12v24zM512 324c0 6.6-5.4 12-12 12H12c-6.6 0-12-5.4-12-12v-24c0-6.6 5.4-12 12-12h488c6.6 0 12 5.4 12 12v24zM512 436c0 6.6-5.4 12-12 12H12c-6.6 0-12-5.4-12-12v-24c0-6.6 5.4-12 12-12h488c6.6 0 12 5.4 12 12v24z"/>
            	</symbol>
            	<symbol id="f-icon-settings" viewBox="0 0 512 512">
            		<path d="M256 377.3c-67.5 0-121.6-53.9-121.6-121.3s54-121.3 121.6-121.3S377.6 188.6 377.6 256 323.5 377.3 256 377.3zm0-215.6c-52.7 0-94.6 41.8-94.6 94.3s41.9 94.3 94.6 94.3 94.6-41.8 94.6-94.3-41.9-94.3-94.6-94.3zM293.2 512h-72.9L200 450c-13.5-4-27-9.4-39.2-16.2l-59.4 29.6L50 412.3 79.7 353c-6.8-12.1-12.2-25.6-16.2-39.1L0 292.4v-72.8l62.1-20.2c4.1-13.5 9.5-26.9 16.2-39.1L48.6 101 100 49.9l59.4 29.6c12.2-6.7 25.7-12.1 39.2-16.2L220.2 0h72.9l20.3 62c13.5 4 27 9.4 39.2 16.2L412 48.5l51.3 51.2-29.7 59.3c6.8 12.1 12.2 25.6 16.2 39.1l62.1 20.2V291l-62.1 20.2c-4.1 13.5-9.5 26.9-16.2 39.1l29.7 59.3-51.3 51.2-59.4-29.6c-12.2 6.7-25.7 12.1-39.2 16.2L293.2 512zm-54.1-26.9h35.1l18.9-57.9 6.8-1.3c16.2-4 31.1-10.8 45.9-18.9l6.8-4 54 26.9 24.3-24.3-27-53.9 4.1-6.7c8.1-13.5 14.9-29.6 18.9-45.8l1.4-6.7 58.1-18.9v-35l-58.1-18.9-1.4-6.7c-4.1-16.2-10.8-31-18.9-45.8l-4.1-6.7 27-53.9-24.3-24.3-54 26.9-6.8-4c-14.8-8.2-29.7-14.9-45.9-19l-6.8-1.3L274.2 27h-35.1l-18.9 57.9-6.8 1.3c-16.2 4-31.1 10.8-45.9 18.9l-6.8 4-54-26.9-24.3 24.3 27 53.9-4.1 6.7c-8.1 13.5-14.9 29.6-18.9 45.8l-1.4 6.7-58 18.9v35l58.1 18.9 1.4 6.7c4.1 16.2 10.8 31 18.9 45.8l4.1 6.7-27 53.9 24.3 24.3 54-26.9 6.8 4c14.9 8.1 29.7 14.8 45.9 18.9l6.8 1.3 18.8 58z"/>
            	</symbol>

            	<symbol id="f-icon-aalogo" viewBox="0 0 146.4 24">
            		<defs>
            			<style>
            				<![CDATA[
            					@import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans+Condensed:700');
            					.a, .b, .c {fill: #fafafa;}
            					.b {font-family: 'Open Sans Condensed', sans-serif; font-size: 10.34px; font-weight: 700; }
            					.c { font-family: 'Montserrat', sans-serif; font-size: 4px; letter-spacing: 0.01em; }
            				]]>
            			</style>
            		</defs>
            		<title>PBPP Most Wanted Absconders - Logo with Subtitle</title>
            		<path class="a" d="M15.13,7.06h-.9v1.8H15c.87,0,1.56-.08,1.56-.91s-.48-.89-1.39-.89ZM16.2,5.68c0-.62-.37-.73-1.16-.73h-.82V6.5H15c.83,0,1.2-.26,1.2-.82Zm1,2.23c0,1.06-.68,1.51-2,1.51H13.59v-5h1.49c1.35,0,1.78.37,1.78,1.15a1.08,1.08,0,0,1-.78,1.13A1.15,1.15,0,0,1,17.2,7.92Zm5.29-3h-.8v2h.7c.88,0,1.29-.16,1.29-1S23.25,5,22.49,5Zm1.88.93c0,1.13-.55,1.6-1.87,1.6h-.8V9.42h-.64v-5h1.47c1.18,0,1.84.38,1.84,1.5ZM18.84,5H18v2h.7c.88,0,1.29-.16,1.29-1S19.59,5,18.84,5Zm1.88.93c0,1.13-.55,1.6-1.87,1.6H18V9.42H17.4v-5h1.47c1.18,0,1.84.38,1.84,1.5ZM11.37,5h-.8v2h.7c.88,0,1.29-.16,1.29-1S12.13,5,11.37,5Zm1.88.93c0,1.13-.55,1.6-1.87,1.6h-.8V9.42H9.93v-5h1.47c1.18,0,1.84.38,1.84,1.5ZM2.82,9.57l.87,4a19.14,19.14,0,0,1,7.9-2.66A19.28,19.28,0,0,0,2.82,9.57Zm10.54,1.61a19.4,19.4,0,0,1,8.91,9.21L23.7,14a19.24,19.24,0,0,0-10.33-2.78Zm-.84-.4a19.69,19.69,0,0,1,11.27,2.73L26,3.59H19L19.83.25H7.66l.79,3.34H1.5L2.73,9.15a19.78,19.78,0,0,1,9.79,1.64Zm9.6,10.31-.59,2.65H6L3.79,14a18.75,18.75,0,0,1,8.65-2.75,19,19,0,0,1,9.68,9.88Z"/>
            		<text class="b" transform="translate(30.18 12.93)">MOST WANTED ABSCONDERS {{title}}</text>
            		<text class="c" transform="translate(30.59 18.89)">PA BOARD OF PROBATION AND PAROLE</text>
            	</symbol>

            	<symbol id="f-icon-aalogo_nav" viewBox="0 0 146.4 24">
            	  <defs>
            	    <style>
            	        <![CDATA[
            	            @import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700');
            	            .a, .b {fill: #fafafa;}
            	            .b {font-family: 'Open Sans Condensed', sans-serif; font-size: 10.34px; font-weight: 700; }
            	         ]]>
            	    </style>
            	  </defs>
            	  <title>PBPP Most Wanted Absconders - Logo</title>
            	  <path class="a" d="M15.13,7.06h-.9v1.8H15c.87,0,1.56-.08,1.56-.91s-.48-.89-1.39-.89ZM16.2,5.68c0-.62-.37-.73-1.16-.73h-.82V6.5H15c.83,0,1.2-.26,1.2-.82Zm1,2.23c0,1.06-.68,1.51-2,1.51H13.59v-5h1.49c1.35,0,1.78.37,1.78,1.15a1.08,1.08,0,0,1-.78,1.13A1.15,1.15,0,0,1,17.2,7.92Zm5.29-3h-.8v2h.7c.88,0,1.29-.16,1.29-1S23.25,5,22.49,5Zm1.88.93c0,1.13-.55,1.6-1.87,1.6h-.8V9.42h-.64v-5h1.47c1.18,0,1.84.38,1.84,1.5ZM18.84,5H18v2h.7c.88,0,1.29-.16,1.29-1S19.59,5,18.84,5Zm1.88.93c0,1.13-.55,1.6-1.87,1.6H18V9.42H17.4v-5h1.47c1.18,0,1.84.38,1.84,1.5ZM11.37,5h-.8v2h.7c.88,0,1.29-.16,1.29-1S12.13,5,11.37,5Zm1.88.93c0,1.13-.55,1.6-1.87,1.6h-.8V9.42H9.93v-5h1.47c1.18,0,1.84.38,1.84,1.5ZM2.82,9.57l.87,4a19.14,19.14,0,0,1,7.9-2.66A19.28,19.28,0,0,0,2.82,9.57Zm10.54,1.61a19.4,19.4,0,0,1,8.91,9.21L23.7,14a19.24,19.24,0,0,0-10.33-2.78Zm-.84-.4a19.69,19.69,0,0,1,11.27,2.73L26,3.59H19L19.83.25H7.66l.79,3.34H1.5L2.73,9.15a19.78,19.78,0,0,1,9.79,1.64Zm9.6,10.31-.59,2.65H6L3.79,14a18.75,18.75,0,0,1,8.65-2.75,19,19,0,0,1,9.68,9.88Z"/>
            	  <text class="b" transform="translate(30.18 15.94)">
            	      MOST WANTED ABSCONDERS
            	  </text>
              </symbol>

            </svg>
            /fabricator icons

        	<div class="f-control f-global-control" data-f-toggle-control="labels" title="Toggle Labels">
        		<svg>
        			<use xlink:href="#f-icon-labels" />
        		</svg>
        	</div>
        	<div class="f-control f-global-control" data-f-toggle-control="notes" title="Toggle Notes">
        		<svg>
        			<use xlink:href="#f-icon-notes" />
        		</svg>
        	</div>
        	<div class="f-control f-global-control" data-f-toggle-control="code" title="Toggle Code">
        		<svg>
        			<use xlink:href="#f-icon-code" />
        		</svg>
        	</div>
        </div> -->


        <!-- <section class="accordion">
            <input type="checkbox" aria-hidden="true" checked> <i aria-hidden="true"></i>
            <p class="accordion_title">Filter</p>
            <div class="accordion_content filterTags">
                <button class="tag active" onclick="filterSelection('all')">
                    <i class="fas fa-square-full"></i>
                    <span>Show all</span>
                </button>
                <button class="tag" onclick="filterSelection('publications')">
                    <i class="fa fa-book"></i>
                    <span>Publications</span>
                </button>
                <button class="tag" onclick="filterSelection('events')">
                    <i class="fa fa-calendar"></i>
                    <span>Events</span>
                </button>
                <button class="tag" onclick="filterSelection('exhibits')">
                    <i class="fa fa-university"></i>
                    <span>Museum Exhibits</span>
                </button>
                <button class="tag" onclick="filterSelection('education')">
                    <i class="fa fa-graduation-cap"></i>
                    <span>Education</span>
                </button>
                <button class="tag" onclick="filterSelection('publications')">
                    <i class="fa fa-star"></i>
                    <span>Donations &amp; Causes</span>
                </button>
                <button class="tag" onclick="filterSelection('events')">
                    <i class="fa fa-book"></i>
                    <span>Library &amp; Research</span>
                </button>
                <button class="tag" onclick="filterSelection('exhibits')">
                    <i class="fa fa-file"></i>
                    <span>Resources</span>
                </button>
            </div>
        </section> -->

    </div>

<!-- <div class="dashboard_layout" id="myUL"> -->

<section class="post_content wide_content">


    <section class="postList circleImages" id="myUL">

        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'partials/blockTemplates/block', 'mediaObject' ); ?>

            <?php endwhile; ?>

            <?php else : ?>

                <p>No go.</p>

        <?php endif; ?>
        <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

    </section>

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

<?php get_footer(); ?>
