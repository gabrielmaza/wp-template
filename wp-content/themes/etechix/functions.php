<?php

/**
 * Etechix Blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Etechix
 * @since Etechix 1.0
 */

/* Setup */
function blog_support()
{
	// Title tag
	add_theme_support('title-tag');

	// Post thumbnails
	if (function_exists('add_theme_support')) {
		add_theme_support('post-thumbnails');
	}

	// Custom logo 
	$defaults = array(
		'height'               => 60,
		'width'                => 200,
		'flex-height'          => true,
		'header-text'          => array('site-title', 'site-description')
	);
	add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'blog_support');

/* Styles and Scripts */
function blog_scripts()
{

	// Styles
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css');

	// Scripts
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js');
}

add_action('wp_enqueue_scripts', 'blog_scripts');


/* Register Menu */
// add_action('init', 'my_register_menus');
// function my_register_menus()
// {
// 	register_nav_menus(
// 		array(
// 			'main-menu' => __('Main Menu'),
// 			'top-menu' => __('Top Menu'),
// 			'top-social-menu' => __('Top Social Menu'),
// 			'mobile-main-menu' => __('Mobile Main Menu'),
// 			'mobile-secondary-menu' => __('Mobile Secondary Menu'),
// 			'footer-menu' => __('Footer Menu'),
// 		)
// 	);
// }

/* Register Sidebar */
add_action('widgets_init', 'my_register_sidebars');
function my_register_sidebars()
{
	register_sidebar(
		array(
			'id'            => 'primary-sidebar',
			'name'          => __('Sidebar widget'),
			'description'   => __('Primary sidebar widget'),
			'before_widget' => '<div id="%1$s" class="widget-primary-sidebar %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'id'            => 'shop-sidebar',
			'name'          => __('Shop sidebar widget'),
			'description'   => __('Shop sidebar widget'),
			'before_widget' => '<div id="%1$s" class="widget-shop-sidebar %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'id'            => 'shop-sidebar-header',
			'name'          => __('Shop sidebar header'),
			'description'   => __('Shop sidebar header widget'),
			'before_widget' => '<div id="%1$s" class="widget-shop-sidebar-header %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'id'            => 'togg-shop-main-place',
			'name'          => __('Shop toggleable main place'),
			'description'   => __('Shop toggleable main place widget'),
			'before_widget' => '<div id="%1$s" class="widget-togg-shop-main-place %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'id'            => 'top-social',
			'name'          => __('Top Social'),
			'description'   => __('Top social widget.'),
			'before_widget' => '<div id="%1$s" class="top-bar_social %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'id'            => 'header-ads',
			'name'          => __('Header Ads Banner'),
			'description'   => __('Header ads widget.'),
			'before_widget' => '<div id="%1$s" class="header_ads %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'id'            => 'togg-search-input',
			'name'          => __('Toggleable Search Input'),
			'description'   => __('Toggleable Search Input widget.'),
			'before_widget' => '<div id="%1$s" class="togg-search-input %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'id'            => 'footer-copyright',
			'name'          => __('Footer Copyright'),
			'description'   => __('Footer copyright widget.'),
			'before_widget' => '<div id="%1$s" class="footer-copyright %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
