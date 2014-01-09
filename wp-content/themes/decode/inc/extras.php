<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Decode
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */

if ( ! function_exists( 'decode_page_menu_args' ) ) {

function decode_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'decode_page_menu_args' );

}

/**
 * Adds custom classes to the array of body classes.
 */
if ( ! function_exists( 'decode_body_classes' ) ) {

function decode_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
}
add_filter( 'body_class', 'decode_body_classes' );

/**
 * Filter in a link to a content ID attribute for the next/previous image links on image attachment pages
 */
if ( ! function_exists( 'decode_enhanced_image_navigation' ) ) {

function decode_enhanced_image_navigation( $url, $id ) {
	if ( ! is_attachment() && ! wp_attachment_is_image( $id ) )
		return $url;

	$image = get_post( $id );
	if ( ! empty( $image->post_parent ) && $image->post_parent != $id )
		$url .= '#main';

	return $url;
}
}
add_filter( 'attachment_link', 'decode_enhanced_image_navigation', 10, 2 );

/* A custom callback function that displays a meaningful title
 * depending on the page being rendered
 */
if ( ! function_exists( 'decode_wp_title' ) ) {

function decode_wp_title($title, $sep, $sep_location) {

	// add white space around $sep
	$sep = ' ' . $sep . ' ';

	$site_description = get_bloginfo('description');
	
	if ( is_feed() )
		return $title;
 
	if ($site_description && (is_home() || is_front_page()))
		$custom = $sep . $site_description;

	elseif(is_category())
		$custom = $sep . __('Category', 'decode');

	elseif(is_tag())
		$custom = $sep . __('Tag', 'decode');

	elseif(is_author())
		$custom = $sep . __('Author', 'decode');

	elseif(is_year() || is_month() || is_day())
		$custom = $sep . __('Archives', 'decode');

	else
		$custom = '';

	// get the page number (main page or an archive)
	if(get_query_var('paged'))
		$page_number = $sep . __('Page ', 'decode') . get_query_var('paged');

	// get the page number (post with multipages)
	elseif(get_query_var('page'))
		$page_number = $sep . __('Page ', 'decode') . get_query_var('page');

	else
		$page_number = '';

	// Comment the 4 lines of code below and see how odd the title format becomes
	if($sep_location == 'right' && !(is_home() || is_front_page())) {
		$custom = $custom . $sep;
		$title = substr($title, 0, -2);
	}

	// return full title
	return get_bloginfo('name') . $custom . $title . $page_number;

} // end of decode_wp_title
}

/* add function 'decode_wp_title()' to the
 * wp_title filter, with priority 10 and 3 args
 */
add_filter('wp_title', 'decode_wp_title', 10, 3);