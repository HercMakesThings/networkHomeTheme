<?php
//Theme functions go here

function enqueue_nethome_styles_and_scripts(){
    //deregister wp's jquery and load a different one
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_theme_file_uri(  ) . '/myassets/js/jquery-3.6.0.js', array(), null, false);
    //wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);
	//wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

    //roboto font import
    wp_enqueue_style( 'nunito-font', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;700&display=swap', array(), null, 'all');
    //bootstrap css
    wp_enqueue_style( 'bootstrap-styles', get_stylesheet_directory_uri(  ) . '/myassets/bootstrap/css/bootstrap.min.css');
    //enqueue aos css
    wp_enqueue_style( 'aos-styles', get_stylesheet_directory_uri(  ) . '/myassets/aos-master/dist/aos.css');
    //main theme stylesheet
    wp_enqueue_style('stylecss', get_template_directory_uri(  ) . '/style.css', array(), '1.0.0', 'all');
    //alumni stylesheet
    wp_enqueue_style( 'alum-styles', get_stylesheet_directory_uri(  ) . '/myassets/css/alum.css', array(), filemtime(get_template_directory() . '/myassets/css/alum.css'), 'all');

    //enqueue bootstrap js
    wp_enqueue_script( 'bootstrap-script', get_theme_file_uri( ) . '/myassets/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0', false );
    //enqueue aos js
    wp_enqueue_script( 'aos-script', get_theme_file_uri( ) . '/myassets/aos-master/dist/aos.js', array(), '1.0.0', false );
    //enqueue alum js files
    wp_enqueue_script( 'alum-script', get_theme_file_uri(  ) . '/myassets/js/alum.js', array('jquery'), 'false', true );

    //font awesome stuff
    wp_enqueue_style( 'fa-style', get_template_directory_uri(  ) . '/myassets/fontawesome/css/all.css');
    wp_enqueue_script( 'fa-script', get_theme_file_uri( ) . '/myassets/fontawesome/js/all.js', array(), '1.0.0', false );

}

add_action('wp_enqueue_scripts', 'enqueue_nethome_styles_and_scripts');


//additional theme support
function nethomeTheme_setup(){

    //add featured image support
    add_theme_support('post-thumbnails');
    add_image_size( 'small-thumbnail', 180, 120, true);
    add_image_size('banner-image', 810, 200, true);

    //register nav menus
    register_nav_menus(array(
        'primary' => __( 'Primary Menu'),
        'footer' => __( 'Footer Menu'),
        'non-home' => __('Primary Non-Home Page Menu')
    ));
}

add_action('after_setup_theme', 'nethomeTheme_setup');

//Initialize the theme's widget area in the footer, and other places in the future
function alum_widgets_init(){
    register_sidebar(array(
        'name' => 'Footer Widget',
        'id' => 'alum_widget1'
    ));
}

add_action('widgets_init', 'alum_widgets_init');

//include additional php files like customizer php
include_once 'includes/customizer.php';

?>