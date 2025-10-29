<?php
/**
 * Theme functions file.
 * 
 * @package Trying_Theme
 */

// echo '<pre>';
// print_r(filemtime(get_template_directory() . '/style.css'));
// wp_die();

function trying_theme_enqueue_scripts() {
    //dependency array
    // wp_enqueue_style( 'main-css', get_template_directory_uri() . '/main.css', ['trying-theme-style']);
    wp_register_style('trying-theme-style', get_stylesheet_uri() , [] , filemtime(get_template_directory() . '/style.css'), 'all');

    wp_register_script( 'trying-theme-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true );

    wp_enqueue_style('trying-theme-style');
    wp_enqueue_script('trying-theme-js');

    
    // optional way to register style and then enqueue
    // wp_enqueue_style( 'trying-theme-style', get_stylesheet_uri() , [] , filemtime(get_template_directory() . '/style.css'), 'all' );
    // wp_enqueue_script( 'trying-theme-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true );
}
add_action( 'wp_enqueue_scripts', 'trying_theme_enqueue_scripts' );

?>

