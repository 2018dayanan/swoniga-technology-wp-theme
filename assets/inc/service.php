<?php


function service_custom_post_type() {

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
'name' => _x('service', 'plural'),
'singular_name' => _x('service', 'singular'),
'menu_name' => _x('Service', 'admin menu'),
'name_admin_bar' => _x('service', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New service'),
'new_item' => __('New service'),
'edit_item' => __('Edit service'),
'view_item' => __('View service'),
'all_items' => __('All service'),
'search_items' => __('Search service'),
'not_found' => __('No service section found.'),
);

$args = array(
'supports' => $supports,
'labels' => $labels,
'description' => 'Holds our service section and specific data',
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
'rewrite' => array('slug' => 'service'),
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 5,
'menu_icon' => 'dashicons-networking',
);

register_post_type('service', $args); // Register Post type
}
add_action('init', 'service_custom_post_type');
//Init Hook for the custom post type

