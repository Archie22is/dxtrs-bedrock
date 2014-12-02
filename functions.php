<?php

/**
 * Functions for Bedrock
 */

define( 'TEMPPATH', get_stylesheet_directory_uri() );
define( 'IMAGES', TEMPPATH . '/images' );
define( 'JS', TEMPPATH . '/js' );
define( 'CSS', TEMPPATH . '/css' );
define( 'INCLUDES', TEMPPATH . '/includes' );
define( 'ADMIN', INCLUDES . '/admin' );
define( 'INCLUDES_DIR', get_template_directory() . '/' . INCLUDES );

/**
 * Setup text domain
 */
function dxtrs_bedrock_setup_text_domain() {
    load_theme_textdomain( 'dxtrs_bedrock-text-domain', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'dxtrs_bedrock_setup_text_domain' );

/**
 * CSS enqueue function
 */
function dxtrs_bedrock_load_the_css() {
    wp_enqueue_style( 'theme-css', TEMPPATH . '/style.css', array(), '', 'all' );
}
add_action( 'wp_enqueue_scripts', 'dxtrs_bedrock_load_the_css' );

/**
 * JS enqueue function
 *
 * @TODO    PRODUCTION change js.js to js.min.js
 */
function dxtrs_bedrock_load_the_js() {
    wp_register_script( 'modernizr', JS . '/modernizr.min.js', array(), '', false );
    wp_enqueue_script( 'modernizr' );

    wp_register_script( 'foundation', JS . '/foundation.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'foundation' );

    wp_register_script( 'app', JS . '/app.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'app' );

    wp_register_script( 'js', JS . '/js.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'js' );
}
add_action( 'wp_enqueue_scripts', 'dxtrs_bedrock_load_the_js' );

/**
 * Include backend functions
 */
require_once( INCLUDES . '/functions.php' );

