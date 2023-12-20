<?php
// Css files
function swonigatech_style(){
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(),1.0,false);
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/font-awesome/css/all.min.css', array(),1.0,false);
	wp_enqueue_style( 'style.css', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts','swonigatech_style');
// JS files
function swonigatech_scripts(){
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/bootstrap/js/popper.js', array(),1.0,true);
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(),1.0,true);

}
add_action('wp_enqueue_scripts','swonigatech_scripts');




// Theme supports
add_theme_support( 'post-thumbnails' );
// Menus
add_theme_support('menus');
register_nav_menus(
    array(
        'footer_menu' => __('Footer Menu', 'swonigatech')
    )
); 

// Bootstrap add class on a tag
function add_class_on_a_tag($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
return $classes;
}
add_filter('nav_menu_link_attributes', 'add_class_on_a_tag', 1, 3);

// Mnues Ended
// Custom logo
add_theme_support('custom-logo');
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 150,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
// End of custom logo

// Custom Post types
require get_template_directory().'/assets/inc/hero.php';
require get_template_directory().'/assets/inc/service.php';
require get_template_directory().'/assets/inc/training.php';







// Navbar Walker class
register_nav_menu('main-menu', 'Main menu');
require get_template_directory().'/assets/navbar-walker/navbar-walker.php';
// require get_template_directory().'/assets/navbar-walker/class-wp-bootstrap-navwalker.php';


