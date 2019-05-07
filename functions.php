<?php

  // require("vendor/autoload.php"); //Path to twitteroauth library
  //
  // //sentry
  // require("vendor/sentry/sentry/lib/Raven/Autoloader.php");
  // Raven_Autoloader::register();
  // $client = new Raven_Client('https://ba9377c9087740ae98995477f5f87490:28f3289212c24e5e908c1272f41ec081@app.getsentry.com/86673');
  // $error_handler = new Raven_ErrorHandler($client);
  // $error_handler->registerExceptionHandler();
  // $error_handler->registerErrorHandler();
  // $error_handler->registerShutdownFunction();
  //
  // use Abraham\TwitterOAuth\TwitterOAuth;

//  if ( function_exists('register_sidebar') )
//    register_sidebar(array(
//      'before_widget' => '',
//      'after_widget' => '',
//      'before_title' => '',
//      'after_title' => '',
//    ));

  if ( function_exists('register_sidebar') )
    register_sidebar( array(
       'name' => __( 'Main Sidebar', 'theme-slug' ),

       'id' => 'sidebar-1',  // Add only this line

       'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
       'before_widget' => '',
       'after_widget'  => '',
       'before_title'  => '',
       'after_title'   => '',
    ) );



  // Registers menus:
  function register_my_menu() {
    register_nav_menus(
      array( 'blog-menu' => __( 'Blog Menu' ) )
    );
  }
  add_action( 'init', 'register_my_menu' );

//===============================================
//     ----- IMAGES / GALLERIES ------
//-----------------------------------------------

  // Adds featured images (aka thumbnails):
  add_theme_support( 'post-thumbnails' );

  // Remove Gallery Preformatted Styling
  add_filter( 'gallery_style', 'my_gallery_style', 99 );
    function my_gallery_style() {
      return "";
  }
  add_filter( 'use_default_gallery_style', '__return_false' );


//===============================================
//  ----- CUSTOM FIELDS, ACF & ADMIN ------
//-----------------------------------------------

    // ACF OPTIONS PAGES (bascially custom post types)
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page('Apps');
    }

    // Allows you to summon an excerpt from a custom field
    function custom_field_excerpt($title) {
        global $post;
        $text = get_field($title);
        if ( '' != $text ) {
            $text = strip_shortcodes( $text );
            $text = apply_filters('the_content', $text);
            $text = str_replace(']]>', ']]>', $text);
            $excerpt_length = 55; // # of words
            $excerpt_more = apply_filters('excerpt_more', ' ' . '... ( read more )');
            $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
        }
        return apply_filters('the_excerpt', $text);
    }


//===============================================
//  ----- CUSTOM POST TYPES + TAXONOMIES  ------
//-----------------------------------------------

    // ------ CUSTOM POST TYPE - FRONTPAGE -------
    // Custom Post types - WOOT! This creates a new menu in the wp admin section
    function cp_collections() {
    $labels = array(
      'name'               => _x( 'Topics', 'post type general name' ),
      'singular_name'      => _x( 'Topic', 'post type singular name' ),
      'add_new'            => _x( 'Add new', 'topic' ),
      'add_new_item'       => __( 'Add new topic' ),
      'edit_item'          => __( 'Edit topic' ),
      'new_item'           => __( 'New topic' ),
      'all_items'          => __( 'All topics' ),
      'view_item'          => __( 'View topic' ),
      'search_items'       => __( 'Search topics' ),
      'not_found'          => __( 'No topics found' ),
      'not_found_in_trash' => __( 'No topics found in the Trash' ),
      'parent_item_colon'  => '',
      'menu_name'          => 'Topics'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds content used for Topics',
        'public'        => true,
        'menu_icon'     => 'dashicons-star-filled',
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
        // displays categories in collections
        'taxonomies' => array('category')
    );
    register_post_type( 'collections', $args );
    }
    add_action( 'init', 'cp_collections' );


//------------------------------------------
// ------ CUSTOM DASHBOARD WIDGETS -------
//------------------------------------------

    // ------ WIDGET #1 -------
    // Function that outputs the contents of the dashboard widget
    function dashboard_widget_function() {
        $theme_root = get_template_directory_uri();
        echo '
            <h2>NAWCC Dashboard</h2>
            <img src="' . $theme_root . '/screenshot.png" style="display:block; width: 100%; height: auto;" alt="NAWCC">
            <p>Welcome to the NAWCC Dashboard! From here, you can create and edit posts, add media, interact with users, and keep up with tasks</p>
            <h4>You Can:</h4>
            <ul>
                <li> - Edit Comments</li>
                <li> - Edit Posts</li>
                <li> - Manage Media</li>
                <li> ... and more.</li>
            </ul>
        ';
    }
    // Function used in the action hook
    function add_dashboard_widgets() {
        wp_add_dashboard_widget('dashboard_widget', 'Welcome!', 'dashboard_widget_function');
    }
    // Register the new dashboard widget with the 'wp_dashboard_setup' action
    add_action('wp_dashboard_setup', 'add_dashboard_widgets' );


//===============================================
//  ----- REMOVE ADMIN MENUS FOR USERS ------
//-----------------------------------------------

function remove_admin_menu_links(){
    $user = wp_get_current_user();
    if( $user && isset($user->user_email) && 'krbonner@pa.gov' == $user->user_email ) {
        remove_menu_page('admin.php?page=jetpack');               // jetpack - doesn't work for some reason
        remove_menu_page('edit-comments.php');                    // comments
        remove_menu_page('edit.php?post_type=feedback');          // feedback
        remove_menu_page('themes.php');                           // appearance
        remove_menu_page('plugins.php');                          // plugins
        remove_menu_page('tools.php');                            // tools
        remove_menu_page('options-general.php');                  // settings
        remove_menu_page('edit.php?post_type=acf-field-group');   // advanced custom fields
        remove_menu_page('admin.php?page=snapshots_edit_panel');  // snapshots
    }
}
add_action('admin_menu', 'remove_admin_menu_links');

function remove_admin_menu_links_2(){
    $user = wp_get_current_user();
    if( $user && isset($user->user_email) && 'dpaz@pa.gov' == $user->user_email ) {
        remove_menu_page('admin.php?page=jetpack');               // jetpack - doesn't work for some reason
        remove_menu_page('edit-comments.php');                    // comments
        remove_menu_page('edit.php?post_type=feedback');          // feedback
        remove_menu_page('themes.php');                           // appearance
        remove_menu_page('plugins.php');                          // plugins
        remove_menu_page('tools.php');                            // tools
        remove_menu_page('options-general.php');                  // settings
        remove_menu_page('edit.php?post_type=acf-field-group');   // advanced custom fields
        remove_menu_page('admin.php?page=snapshots_edit_panel');  // snapshots
    }
}
add_action('admin_menu', 'remove_admin_menu_links_2');







/**
 * Testimonials
 *
 * @package      CoreFunctionality
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/
class EA_Testimonials {
	/**
	 * Initialize all the things
	 *
	 * @since 1.2.0
	 */
	function __construct() {
		// Actions
		add_action( 'init', array( $this, 'register_cpt' ) );
		add_filter( 'wp_insert_post_data', array( $this, 'set_testimonial_title' ), 99, 2 );
	}
	/**
	 * Register the custom post type
	 *
	 * @since 1.2.0
	 */
	function register_cpt() {
		$labels = array(
			'name'               => 'Testimonials',
			'singular_name'      => 'Testimonial',
			'add_new'            => 'Add New',
			'add_new_item'       => 'Add New Testimonial',
			'edit_item'          => 'Edit Testimonial',
			'new_item'           => 'New Testimonial',
			'view_item'          => 'View Testimonial',
			'search_items'       => 'Search Testimonials',
			'not_found'          => 'No Testimonials found',
			'not_found_in_trash' => 'No Testimonials found in Trash',
			'parent_item_colon'  => 'Parent Testimonial:',
			'menu_name'          => 'Testimonials',
		);
		$args = array(
			'labels'              => $labels,
			'hierarchical'        => true,
			'supports'            => array( 'editor' ),
			'public'              => true,
			'show_ui'             => true,
			'show_in_rest'        => true,
			'publicly_queryable'  => false,
			'exclude_from_search' => true,
			'has_archive'         => false,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => array( 'slug' => 'testimonial', 'with_front' => false ),
			'menu_icon'           => 'dashicons-format-quote',
			'template'            => array( array( 'core/quote', array( 'className' => 'is-style-large' ) ) ),
			'template_lock'      => 'all',
		);
		register_post_type( 'testimonial', $args );
	}
	/**
	 * Set testimonial title
	 *
	 */
	function set_testimonial_title( $data, $postarr ) {
		if( 'testimonial' == $data['post_type'] ) {
			$title = $this->get_citation( $data['post_content'] );
			if( empty( $title ) )
				$title = 'Testimonial ' . $postarr['ID'];
			$data['post_title'] = $title;
		}
		return $data;
	}
	/**
	 * Get Citation
	 *
	 */
	function get_citation( $content ) {
		$matches = array();
		$regex = '#<cite>(.*?)</cite>#';
		preg_match_all( $regex, $content, $matches );
		if( !empty( $matches ) && !empty( $matches[0] ) && !empty( $matches[0][0] ) )
			return strip_tags( $matches[0][0] );
	}
}
new EA_Testimonials();








//------------------------------------------
//      ----- CUSTOM NAV MENU ------
//------------------------------------------

//function clean_custom_menus() {
//	$menu_name = 'topnav'; // specify custom menu slug
//	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
//		$menu = wp_get_nav_menu_object($locations[$menu_name]);
//		$menu_items = wp_get_nav_menu_items($menu->term_id);
//
//		$menu_list = '<nav>' ."\n";
//		foreach ((array) $menu_items as $key => $menu_item) {
//			$title = $menu_item->title;
//			$url = $menu_item->url;
//			$menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'">'. $title .'</a></li>' ."\n";
//		}
//		$menu_list .= "\t\t\t". '</nav>' ."\n";
//	} else {
//		// $menu_list = '<!-- no list defined -->';
//	}
//	echo $menu_list;
//}


//------------------------------------------
// ----- GET TWITTER FEEDS FROM LIST ------
//------------------------------------------

  // function get_twitter_feeds_from_list() {
  //     $listId = "734402273602875392";
  //     $notweets = 6;
  //     $consumerkey = "iLQuibenNRCAXR8LP6LWwbx3c";
  //     $consumersecret = "z30la2Jq9hXybrNMGElRz0goadM0yXoIWHinX0gqx9nydFROMG";
  //     $accesstoken = "1304168059-90Vp2W0GxglAQSILqvd2cXfTFR9nMM7bR9vsP4x";
  //     $accesstokensecret = "9fFFetFQ1pHBaFSJSycSgdYvX8Rbf0eJMLtZOhnQMd8AI";
  //
  //     function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  //         $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  //         return $connection;
  //     }
  //
  //     $connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
  //
  //     $tweets = $connection->get("lists/statuses", [ "list_id" => $listId, "count" => $notweets ]);
  //
  //     echo json_encode($tweets);
  // }
  
?>
