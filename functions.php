<?php
// GETS JS + CSS FILES
function add_custom_styles(){
   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
   wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme-styles.css');

   wp_enqueue_script('jquery');
   wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true);
   wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/theme-scripts.js', array(), '0.0.1', true);

}
add_action('wp_enqueue_scripts', 'add_custom_styles');

//GET CUSTOM CUSTOMIZER FILES
require get_parent_theme_file_path('/addons/custom_customizer.php');
require get_parent_theme_file_path('/addons/custom_fields.php');


//MENUS
function add_custom_menus(){
   add_theme_support('menus');
   register_nav_menu('header_nav', 'This is the header navigation that appears at the top of the page');
   register_nav_menu('footer_nav', 'This is the footer navigation that appears at the bottom of the page');
}
add_action('init', 'add_custom_menus');
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//LOGOS
function add_custom_logo(){
    add_theme_support('custom-logo', array(
        'height'        => 100,
        'width'         => 300,
        'flex-width'    => true,
        'flex-height'   => true
    ));
}
add_action('init', 'add_custom_logo');

//POST TYPES
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video' ) );

function add_tours_post_type(){
   add_theme_support( 'post-thumbnails' );

   $labels = array(
        'name'          => _x('Tours', 'post type name', 'zealandiaTheme'),
        'singular_name' => _x('Tour', 'post types singluar name', 'zealandiaTheme'),
        'add_new_item'  => _x('Add a new tour', 'Adding a new tour', 'zealandiaTheme')
    );
    $args = array(
      'labels'                => $labels,
      'description'           => 'a post type for the tours',
      'public'                => true,
      'hierarchical'          => true,
      'exclude_from_search'   => false,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => false,
      'menu_position'         => 20,
      'menu_icon'             => 'dashicons-groups',
      'supports'              => array(
           'title',
           'thumbnail',
           'editor',
           'excerpt'
      ),
      'query_var'             => true
  );
  register_post_type('tours', $args);
}
add_action('init', 'add_tours_post_type');

//SIDEBAR
function register_my_sidebars(){
    register_sidebar(array(
        'id' => 'front_page_sidebar',
        'name' => 'Front Page Sidebar',
        'description' => 'The sidebar which appears on the front page',
        'before_widget' => '<div id="%1$s" class="widget customWidget %2$s">',
        "after_widget" => '</div>',
        'before_title' => '<h3 class="widgetTitle">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'register_my_sidebars');
