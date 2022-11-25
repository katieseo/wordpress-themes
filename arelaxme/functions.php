<?php
/**
 * functions
 */

/* Define Constants
 * ------------------------------------------------------------- */

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT.'/images');


/* Load JS Files
 * ------------------------------------------------------------- */

function load_custom_scripts() {
    wp_enqueue_script('custom_script', THEMEROOT.'/js/custom.js', array('jquery'), true);
}

add_action('wp_enqueue_scripts', 'load_custom_scripts');


/* Add Menus in Appearance
 * ------------------------------------------------------------- */

function register_menus() {
  register_nav_menus(array(
      'main' => 'Main Menu'
  ));
}

add_action('init', 'register_menus');


/* Add Featured image in Editor
 * ------------------------------------------------------------- */

if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
}

?>

