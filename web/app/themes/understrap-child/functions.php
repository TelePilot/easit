<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );


// Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {


// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action("wp_enqueue_scripts", "enqueue_event_calendar_override", 999);

function enqueue_event_calendar_override() {
    $the_theme = wp_get_theme();
    wp_enqueue_style( 'event-calendar-override-styles', get_stylesheet_directory_uri() . '/css/event-calendar.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'event-calendar-override-scripts', get_stylesheet_directory_uri() . '/js/event-calendar.js', array(), $the_theme->get( 'Version' ), true );
}

add_action('wp_enqueue_scripts', 'add_search_ajax', 999);

function add_search_ajax() {
    $the_theme = wp_get_theme();
    wp_enqueue_script('search_site', get_stylesheet_directory_uri().'/js/search.js', array('jquery'), $the_theme->get( 'Version' ), true);
    wp_localize_script('search_site', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
    wp_localize_script('search_site', 'wp_helper', array('site_url' => site_url(), 'search_url' => get_search_link('s')));
}


// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);



function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );

/** acf options page */
if( function_exists('acf_add_options_page') ) {
    
    $option_page = acf_add_options_page(array(
        'page_title'    => 'Temainställningar',
        'menu_title'    => 'Temainställningar',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'  => false
    ));

 
}

add_post_type_support( 'page', 'excerpt' );

register_nav_menu( "quick-search", "Quick search menu" );
register_nav_menu( "footer", "Detailed menu in footer" );

add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );

function understrap_all_excerpts_get_more_link($post_excerpt){
    return (strlen($post_excerpt) > 0 ? $post_excerpt : "");
}


/**
	*	Registrers custom post type
	*
	*	@since understrap 1.0
	**/
	function duplicera_create_post_type(){
        
        register_post_type( 'kund',
			array(
				'labels' => array(
					'name' => __( 'Kund' ),
					'singular_name' => __( 'Kund' ),
					'all_items' => __('Alla kunder'),
					'add_new' => __('Lägg till ny kund'),
					'add_new_item'=>__('Lägg till ny kund'),
					'menu_name'=>__('Kunder'),
					'name_admin_bar'=>__('Kunder'),
				),
				'public' => true,
				'menu_icon' => 'dashicons-star-empty',
				'supports' => array('title','editor','thumbnail','excerpt'),
				'menu_position' => 4,
				'capability_type' => 'post',
				'has_archive'   => false,
				'hierarchical'	=> true,
				'query_var'		=> true,
			) 
		);
		register_taxonomy(
				"kundkategorier", 
				array("sponsor"), 
				array(
					"hierarchical" 		=> 	true, 
					"label" 			=> 	"Kundkategorier", 
					"singular_label" 	=> 	"KundKategori", 
					"capabilities"		=>	array("edit_terms"),
					"public" 			=> 	true,
					"show_ui" 			=> 	true,
					'_builtin'			=> 	false,
					'query_var'			=> 	'kundkategorier',
				)
		);
        
	}
	add_action( 'init', 'duplicera_create_post_type' );
