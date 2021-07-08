<?php 

/**
 * 
 * Functions to bootstrap template
 *  
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Bootstrap template
 * @since Bootstrap template 1.0
 */


 /**
 * Adding script and style css to template
 */

function bootstrap_template_assets() {
    wp_enqueue_style( 'bootstrap-template-style', get_template_directory_uri() . '/assets/css/style.css'  );
    wp_enqueue_script( 'bootstrap-template-script', get_template_directory_uri() . '/assets/js/scripts.js' ); 
}

add_action( 'wp_enqueue_scripts', 'bootstrap_template_assets' );


 /**
 * Register main menu to template
 */

function bootstrap_template_menus() {

    $locations = array(
		'primary'  => __( 'Main menu', 'Menu mian' )
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'bootstrap_template_menus' );

/**
 * Add custom logo to template
 */

function bootstrap_template_add_logo(){

    // Custom logo in template
    add_theme_support( 'custom-logo', array(
      'height'      => 50,
      'width'       => 67,
      'flex-height' => false,
      'flex-width'  => true,
    ) );
  
}
add_action('after_setup_theme', 'bootstrap_template_add_logo');


/**
 * Enable thumbs post to template
 */

if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'post-thumb', 214, 73 );
}

/**
 * Register widget
 */

function bootstrap_template_widget_init() {
    register_sidebar( array(
        'name'          => 'Simple widget',
        'id'            => 'simple-widget',
        'before_widget' => ' ',
        'after_widget'  => ' ',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'bootstrap_template_widget_init' );