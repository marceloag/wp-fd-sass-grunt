<?php
        // Translations can be filed in the /languages/ directory
load_theme_textdomain( 'html5reset', TEMPLATEPATH . '/languages' );

        $locale = get_locale();
        $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable($locale_file) )
            require_once($locale_file);

// Add RSS links to <head> section
automatic_feed_links();

// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','html5reset' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    function custom_excerpt_length( $length ) {
	return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// CUSTOM THUMBNAILS

    if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true );
    }

    if ( function_exists( 'add_image_size' ) ) {
        add_image_size( 'slides', 1280, 400,true );
        add_image_size( 'insidebig', 1300, 768,true );
    }

// Custom Menu Places
    function register_my_menus() {
      register_nav_menus(
        array(
          'mainmenu' => __( 'mainmenu' ),
          'footer' => __( 'footer' )
        )
      );
    }

    add_action( 'init', 'register_my_menus' );

    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.

    function any_ptype_on_cat($request) {
    if ( isset($request['category_name']) )
        $request['post_type'] = 'any';

    return $request;
    }
    add_filter('request', 'any_ptype_on_cat');

//

    function the_category_unlinked($separator = ' ') {
                        $categories = (array) get_the_category();

                        $thelist = '';
                        foreach($categories as $category) {    // concate
                            $thelist .= $separator . $category->category_nicename;
                        }

                        echo $thelist;
                    }

    function wp_get_attachment( $attachment_id ) {
        $attachment = get_post( $attachment_id );
        return array(
            'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
            'caption' => $attachment->post_excerpt,
            'description' => $attachment->post_content,
            'href' => get_permalink( $attachment->ID ),
            'src' => $attachment->guid,
            'title' => $attachment->post_title
        );
    }


// Disable srcset

	function disable_srcset( $sources ) {
	return false;
	}
	add_filter( 'wp_calculate_image_srcset', 'disable_srcset' );

// Options Page

	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page();

	}

  //  AIzaSyDXV_14x9Fx9nm2-6JnLBE5JWLpNt1ALYY
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyDXV_14x9Fx9nm2-6JnLBE5JWLpNt1ALYY';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

?>
