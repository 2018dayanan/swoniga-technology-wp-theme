<?php


function training_custom_post_type() {

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
'name' => _x('training', 'plural'),
'singular_name' => _x('training', 'singular'),
'menu_name' => _x('Training', 'admin menu'),
'name_admin_bar' => _x('training', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New training'),
'new_item' => __('New training'),
'edit_item' => __('Edit training'),
'view_item' => __('View training'),
'all_items' => __('All training'),
'search_items' => __('Search training'),
'not_found' => __('No training section found.'),
);

$args = array(
'supports' => $supports,
'labels' => $labels,
'description' => 'Holds our training section and specific data',
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
'rewrite' => array('slug' => 'training'),
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 5,
'menu_icon' => 'dashicons-groups',
);

register_post_type('training', $args); // Register Post type
}
add_action('init', 'training_custom_post_type');
//Init Hook for the custom post type

