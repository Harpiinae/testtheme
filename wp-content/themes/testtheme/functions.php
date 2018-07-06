<?php

// Initial setup
// Thumbnail support
//Excerpt custom
require_once( '_functions/init.php' );

// load CSS & JS scripts
require_once( '_functions/load_scripts.php' );

//require_once('_functions/acf.php');

//Plugin Register
//require_once ('_functions/excerpt.php');

function remove_head_scripts() {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);


    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );