<?php


function create_custom_post_type() {

$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);

$labels = array(
'name' => _x('hero', 'plural'),
'singular_name' => _x('hero', 'singular'),
'menu_name' => _x('Hero', 'admin menu'),
'name_admin_bar' => _x('hero', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Hero'),
'new_item' => __('New hero'),
'edit_item' => __('Edit hero'),
'view_item' => __('View hero'),
'all_items' => __('All hero'),
'search_items' => __('Search hero'),
'not_found' => __('No hero section found.'),
);

$args = array(
'supports' => $supports,
'labels' => $labels,
'description' => 'Holds our hero section and specific data',
'public' => true,
'taxonomies' => array( 'category', 'post_tag' ),
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'show_in_admin_bar' => true,
'can_export' => true,
'capability_type' => 'post',
 'show_in_rest' => true,
'query_var' => true,
'rewrite' => array('slug' => 'hero'),
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 5,
'menu_icon' => 'dashicons-welcome-widgets-menus',
);

register_post_type('hero', $args); // Register Post type
}
add_action('init', 'create_custom_post_type');
//Init Hook for the custom post type

