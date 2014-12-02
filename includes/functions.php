<?php

/**
 * Backend functions for Bedrock
 */

/**
 * Add menu support
 */
add_theme_support( 'nav_menus' );
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
            'primary_nav'   => 'Header Navigation',
            'footer_nav'    => 'Footer Navigation'
        )
    );
}

/**
 * Add thumbnail support
 */
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

/**
 * Load admin CSS
 */
function dxtrs_bedrock_load_the_admin_css() {
    wp_enqueue_style( 'admin-css', ADMIN . '/css/admin.css', array(), '', 'all' );
}
add_action( 'admin_init', 'dxtrs_bedrock_load_the_admin_css' );

/**
 * Load admin JS
 */
function dxtrs_bedrock_load_the_admin_js() {
    if ( function_exists( 'wp_enqueue_media' ) ) {
        wp_enqueue_media();
    } else {
        wp_enqueue_script( 'media-upload' );
        wp_enqueue_script( 'thickbox' );
    }

    wp_register_script( 'admin-js', ADMIN . '/js/admin.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'admin-js' );
}
add_action( 'admin_enqueue_scripts', 'dxtrs_bedrock_load_the_admin_js' );

/**
 * Load login CSS
 */
function dxtrs_bedrock_load_login_css() {
    wp_enqueue_style( 'login-css', ADMIN . '/css/login.css', array(), '', 'all' );
}
add_action( 'login_enqueue_scripts', 'dxtrs_bedrock_load_login_css' );

/**
 * Bedrock theme settings
 */
require_once( ADMIN . '/theme-settings.php' );

