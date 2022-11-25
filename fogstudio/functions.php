<?php

/* Define Constants
 * ------------------------------------------------------------- */

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT.'/images');


/* Add Menus
 * ------------------------------------------------------------- */

function register_menus() {
    register_nav_menus(array(
        'main' => 'Main Menu'
    ));
}

add_action('init', 'register_menus');


/* Add Theme Support for Post Thumbnails
 * ------------------------------------------------------------- */

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}


/* Load JS Files
 * ------------------------------------------------------------- */

add_action('wp_enqueue_scripts', 'load_custom_scripts');

function load_custom_scripts() {
    wp_enqueue_script('custom_script', THEMEROOT.'/js/custom.js', array('jquery'), true);
}


/* Services: Replaces the excerpt "more" text by a link
 * ------------------------------------------------------------- */
function new_excerpt_more($output) {
    return $output . ' <a href="'. get_permalink() . '" class="view-details">' . 'View details.' . '</a>';
}
add_filter('get_the_excerpt', 'new_excerpt_more');


/* Portfolio
 * ------------------------------------------------------------- */

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'Portfolio' )
      ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'portfolio-details'),
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-format-gallery'
    )
  );
}

/* dashboard icon */
function add_menu_icons_styles(){
?>
<style>
#adminmenu .menu-icon-events div.wp-menu-image:before {
  content: '\f161';
}
</style>
<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );


/* Custom attachments
 * ------------------------------------------------------------- */

function portfolio_attachments( $attachments )
{
  $fields         = array(
    array(
      'name'      => 'title',                         // unique field name
      'type'      => 'text',                          // registered field type
      'label'     => __( 'Title', 'attachments' ),    // label to display
      'default'   => 'title',                         // default value upon selection
    ),
    array(
      'name'      => 'caption',                       // unique field name
      'type'      => 'textarea',                      // registered field type
      'label'     => __( 'Caption', 'attachments' ),  // label to display
      'default'   => 'caption',                       // default value upon selection
    ),
  );

  $args = array(

      // title of the meta box (string)
      'label'         => 'Portfolio Images',

      // all post types to utilize (string|array)
      'post_type'     => array( 'portfolio' ),

      // meta box position (string) (normal, side or advanced)
      'position'      => 'normal',

      // meta box priority (string) (high, default, low, core)
      'priority'      => 'default',

      // allowed file type(s) (array) (image|video|text|audio|application)
      'filetype'      => null,  // no filetype limit

      // include a note within the meta box (string)
      'note'          => 'Attach portfolio files here!',

      // by default new Attachments will be appended to the list
      // but you can have then prepend if you set this to false
      'append'        => true,

      // text for 'Attach' button in meta box (string)
      'button_text'   => __( 'Attach Files', 'attachments' ),

      // text for modal 'Attach' button (string)
      'modal_text'    => __( 'Attach', 'attachments' ),

      // which tab should be the default in the modal (string) (browse|upload)
      'router'        => 'browse',

      // whether Attachments should set 'Uploaded to' (if not already set)
      'post_parent'   => false,

      // fields array
      'fields'        => $fields,

    );

    $attachments->register( 'portfolio_attachments', $args ); // unique instance name
}

add_action( 'attachments_register', 'portfolio_attachments' );


?>