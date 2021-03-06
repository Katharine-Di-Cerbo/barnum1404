<?php
/**
 * Front page for the Utility Pro theme
 *
 * @package Utility_Pro
 * @author  Carrie Dils
 * @license GPL-2.0+
 */

add_action( 'genesis_meta', 'utility_pro_homepage_setup' );
/**
 * Set up the homepage layout by conditionally loading sections when widgets
 * are active.
 *
 * @since 1.0.0
 */
function utility_pro_homepage_setup() {

	$home_sidebars = array(
		'home_welcome' 	   => is_active_sidebar( 'utility-home-welcome' ),
		'home_welcome-b1' 	   => is_active_sidebar( 'utility-home-welcome-b1' ),
		'home_welcome-2' 	   => is_active_sidebar( 'utility-home-welcome-2' ),
		'home_welcome-b2' 	   => is_active_sidebar( 'utility-home-welcome-b2' ),
		'home_welcome-3' 	   => is_active_sidebar( 'utility-home-welcome-3' ),
		'home_welcome-b3' 	   => is_active_sidebar( 'utility-home-welcome-b3' ),
		'home_welcome-4' 	   => is_active_sidebar( 'utility-home-welcome-4' ),
		'home_gallery_1'   => is_active_sidebar( 'utility-home-gallery-1' ),
		'call_to_action'   => is_active_sidebar( 'utility-call-to-action' ),
	);

	// Return early if no sidebars are active.
	if ( ! in_array( true, $home_sidebars ) ) {
		return;
	}

	// Get static home page number.
	$page = ( get_query_var( 'page' ) ) ? (int) get_query_var( 'page' ) : 1;

	// Only show home page widgets on page 1.
	if ( 1 === $page ) {

		// Add home welcome area if "Home Welcome" widget area is active.
		if ( $home_sidebars['home_welcome'] ) {
			add_action( 'genesis_after_header', 'utility_pro_add_home_welcome' );
		}
		
		// Add home welcome area b1 if "Home Welcome" widget area is active.
		if ( $home_sidebars['home_welcome-b1'] ) {
			add_action( 'genesis_after_header', 'utility_pro_add_home_welcomeb1' );
		}
		
		// Add home welcome area 2 if "Home Welcome" widget area is active.
		if ( $home_sidebars['home_welcome-2'] ) {
			add_action( 'genesis_after_header', 'utility_pro_add_home_welcome2' );
		}
		
		// Add home welcome area b2 if "Home Welcome" widget area is active.
		if ( $home_sidebars['home_welcome-b2'] ) {
			add_action( 'genesis_after_header', 'utility_pro_add_home_welcomeb2' );
		}
		
		// Add home welcome area 3 if "Home Welcome" widget area is active.
		if ( $home_sidebars['home_welcome-3'] ) {
			add_action( 'genesis_after_header', 'utility_pro_add_home_welcome3' );
		}
		
		// Add home welcome area b3 if "Home Welcome" widget area is active.
		if ( $home_sidebars['home_welcome-b3'] ) {
			add_action( 'genesis_after_header', 'utility_pro_add_home_welcomeb3' );
		}
		
		// Add home welcome area 4 if "Home Welcome" widget area is active.
		if ( $home_sidebars['home_welcome-4'] ) {
			add_action( 'genesis_after_header', 'utility_pro_add_home_welcome4' );
		}

		// Add home gallery area if "Home Gallery 1" widget area is active.
		if ( $home_sidebars['home_gallery_1'] ) {
			add_action( 'genesis_after_header', 'utility_pro_add_home_gallery' );
		}

		// Add call to action area if "Call to Action" widget area is active.
		if ( $home_sidebars['call_to_action'] ) {
			add_action( 'genesis_after_header', 'utility_pro_add_call_to_action' );
		}
	}

	// Full width layout.
	//add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

	// Remove standard loop and replace with loop showing Posts, not Page content.
	remove_action( 'genesis_loop', 'genesis_do_loop' );
	add_action( 'genesis_loop', 'utility_pro_front_loop' );
}

/**
 * Display content for the "Home Welcome" section.
 *
 * @since 1.0.0
 */
function utility_pro_add_home_welcome() {

	genesis_widget_area( 'utility-home-welcome',
		array(
			'before' => '<div class="home-welcome"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}

function utility_pro_add_home_welcomeb1() {

	genesis_widget_area( 'utility-home-welcome-b1',
		array(
			'before' => '<div class="home-welcome-b1"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}


function utility_pro_add_home_welcome2() {

	genesis_widget_area( 'utility-home-welcome-2',
		array(
			'before' => '<div class="home-welcome-2"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}

function utility_pro_add_home_welcomeb2() {

	genesis_widget_area( 'utility-home-welcome-b2',
		array(
			'before' => '<div class="home-welcome-b2"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}


function utility_pro_add_home_welcome3() {

	genesis_widget_area( 'utility-home-welcome-3',
		array(
			'before' => '<div class="home-welcome-3"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}

function utility_pro_add_home_welcomeb3() {

	genesis_widget_area( 'utility-home-welcome-b3',
		array(
			'before' => '<div class="home-welcome-b3"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}

function utility_pro_add_home_welcome4() {

	genesis_widget_area( 'utility-home-welcome-4',
		array(
			'before' => '<div class="home-welcome-4"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}

/**
 * Display content for the "Home Gallery" section.
 *
 * @since 1.0.0
 */
function utility_pro_add_home_gallery() {

	printf( '<div %s>', genesis_attr( 'home-gallery' ) );
	genesis_structural_wrap( 'home-gallery' );

	genesis_widget_area(
		'utility-home-gallery-1',
		array(
			'before' => '<div class="home-gallery-1 widget-area">',
			'after'  => '</div>',
		)
	);

	genesis_widget_area(
		'utility-home-gallery-2',
		array(
			'before' => '<div class="home-gallery-2 widget-area">',
			'after'  => '</div>',
		)
	);

	genesis_widget_area(
		'utility-home-gallery-3',
		array(
			'before' => '<div class="home-gallery-3 widget-area">',
			'after'  => '</div>',
		)
	);
	genesis_widget_area(
		'utility-home-gallery-4',
		array(
			'before' => '<div class="home-gallery-4 widget-area">',
			'after'  => '</div>',
		)
	);

	genesis_structural_wrap( 'home-gallery', 'close' );
	echo '</div>';
}

/**
 * Display content for the "Call to action" section.
 *
 * @since 1.0.0
 */
function utility_pro_add_call_to_action() {

	genesis_widget_area(
		'utility-call-to-action',
		array(
			'before' => '<div class="call-to-action-bar"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}

/**
 * Display latest posts instead of static page.
 *
 * @since 1.0.0
 */
function utility_pro_front_loop() {
	global $query_args;
	genesis_custom_loop( wp_parse_args( $query_args, array( 'post_type' => 'post', 'paged' => get_query_var( 'page' ) ) ) );
}

/** 
* Remove sidebar from fromt page
*/

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

genesis();
