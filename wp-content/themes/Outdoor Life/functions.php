<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
add_theme_support('post-thumbnails');
add_image_size('category-thumb', 300, 9999);

//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', create_function(
                '$the_template', 'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/category-{$cat->slug}.php") )
		return TEMPLATEPATH . "/category-{$cat->slug}.php"; }
	return $the_template;')
);

function pre_post_wyjazdy($query) {

    // do not modify queries in the admin
    /* if (is_admin()) {
      return $query;
      } */

    if (isset($query->query_vars['cat']) && $query->query_vars['cat'] == '2') {
        
    }

    // return
    return $query;
}

add_action('pre_get_posts', 'pre_post_wyjazdy');

function register_my_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
}

add_action('init', 'register_my_menu');

function custom_theme_setup() {
    add_theme_support('title-tag');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');
}

add_action('after_setup_theme', 'custom_theme_setup');

if (!isset($content_width)) {
    $content_width = 660;
}

if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
}

add_theme_support('title-tag');

//add_action( 'wp_enqueue_scripts', 'outdoor_scripts' );