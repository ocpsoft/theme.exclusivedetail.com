<?php

/**
 Set default permissions for user roles
 */
$role = get_role( 'author' );
$role->add_cap( 'unfiltered_html' );
$role = get_role( 'contributor' );
$role->add_cap( 'unfiltered_html' );

add_theme_support( 'post-thumbnails' ); 

add_action('wp_enqueue_scripts', 'register_assets', 11);
function register_assets() {
	wp_register_style("skel-noscript", get_bloginfo('template_url')."/css/skel-noscript.css");
	wp_register_style("style", get_bloginfo('template_url')."/css/style.css");
	wp_register_style("style-desktop", get_bloginfo('template_url')."/css/style-desktop.css");

	wp_register_script( "jquery.dropotron", get_bloginfo("template_url")."/js/jquery.dropotron.min.js");
	wp_register_script( "config", get_bloginfo("template_url")."/js/config.js");
	wp_register_script( "skel", get_bloginfo("template_url")."/js/skel.min.js");
	wp_register_script( "skel-panels", get_bloginfo("template_url")."/js/skel-panels.min.js");

	if( !is_admin() )
	{
		wp_dequeue_style("open-sans-css");
		
		wp_enqueue_style("skel-noscript");
		wp_enqueue_style("style");
		wp_enqueue_style("style-desktop");
		
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2');

		wp_enqueue_script("jquery");
		wp_enqueue_script("jquery.dropotron");
		wp_enqueue_script("config");
		wp_enqueue_script("skel");
		wp_enqueue_script("skel-panels");
		
		if ( is_single() || is_page() ) {
			wp_enqueue_script( 'comment-reply', null, null, null, true );
		}
	} 
	
}

/**
 This theme uses the wp_nav_menu() for top navigation
 */
include 'walker-nav-header.php';
include 'walker-nav-footer.php';

register_nav_menus( array(
		'primary' => 'Primary Navigation'
) );

register_nav_menus( array(
		'mobile' => 'Mobile Navigation'
) );

register_nav_menus( array(
		'footer' => 'Footer Navigation'
) );

register_nav_menus( array(
		'footer2' => 'Footer Navigation 2'
) );

register_nav_menus( array(
		'footer3' => 'Footer Navigation 3'
) );

function ocpsoft_menu_fallback() {
	$locations = get_theme_mod('nav_menu_locations');

	if (! has_nav_menu('footer') && ! is_nav_menu( 'Footer Navigation' )) {
		$locations['footer'] = wp_create_nav_menu('Footer Navigation', array('slug' => 'footer'));
		set_theme_mod('nav_menu_locations', $locations);
	} else {
		$locations['footer'] = 'Footer Navigation';
		set_theme_mod('nav_menu_locations', $locations);
	}

	if (! has_nav_menu('footer2') && ! is_nav_menu( 'Footer Navigation 2' )) {
		$locations['footer2'] = wp_create_nav_menu('Footer Navigation 2', array('slug' => 'footer2'));
		set_theme_mod('nav_menu_locations', $locations);
	} else {
		$locations['footer2'] = 'Footer Navigation 2';
		set_theme_mod('nav_menu_locations', $locations);
	}

	if (! has_nav_menu('footer3') && ! is_nav_menu( 'Footer Navigation 3' )) {
		$locations['footer3'] = wp_create_nav_menu('Footer Navigation 3', array('slug' => 'footer3'));
		set_theme_mod('nav_menu_locations', $locations);
	} else {
		$locations['footer3'] = 'Footer Navigation 3';
		set_theme_mod('nav_menu_locations', $locations);
	}

	if (! has_nav_menu('primary') && ! is_nav_menu( 'Primary Navigation' )) {
		$locations['primary'] = wp_create_nav_menu('Primary Navigation', array('slug' => 'primary'));
		set_theme_mod('nav_menu_locations', $locations);
	} else {
		$locations['primary'] = 'Primary Navigation';
		set_theme_mod('nav_menu_locations', $locations);
	}

	if (! has_nav_menu('mobile') && ! is_nav_menu( 'Mobile Navigation' )) {
		$locations['mobile'] = wp_create_nav_menu('Mobile Navigation', array('slug' => 'mobile'));
		set_theme_mod('nav_menu_locations', $locations);
	} else {
		$locations['mobile'] = 'Mobile Navigation';
		set_theme_mod('nav_menu_locations', $locations);
	}
}

// Preserve comments for legacy 2.7 WP versions
add_filter( 'comments_template', 'legacy_comments' );
function legacy_comments( $file ) {
	if ( !function_exists('wp_list_comments') )
		$file = TEMPLATEPATH . '/legacy.comments.php';
	return $file;
}

// Fix up the search form
add_filter('get_search_form', 'my_search_form');

function my_search_form($text) {
	$text = str_replace('type="submit"', 'type="submit" class="btn"', $text);
	$text = str_replace('<form', '<form class="form-inline"', $text);
	$text = str_replace('Search for:', '', $text);
	return $text;
}

if ( function_exists('register_sidebar') )
{
	register_sidebar( array(
			'name' => 'Header Area',
			'id' => 'sidebar-header',
			'description' => __( 'An optional widget area for the site header', 'ocpsoft' ),
			'before_widget' => '',
			'after_widget' => "",
			'before_title' => '',
			'after_title' => '',
	) );

	register_sidebar( array(
			'name' => 'Footer Area',
			'id' => 'sidebar-footer',
			'description' => __( 'An optional widget area for the site footer', 'ocpsoft' ),
			'before_widget' => '',
			'after_widget' => "",
			'before_title' => '',
			'after_title' => '',
	) );

	register_sidebar(array(
			'name' => 'Sidebar Area',
			'id' => 'sidebar-1',
			'before_widget' => '<div class="sidebar-widget"><div class="sidebar-widget-content">',
			'after_widget' => '</div></div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
	));
}

function the_error_page()
{
	include 'error.php';
}

?>
