<?php

function addCustomThemeStyles(){
   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
   wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme-styles.css');

   wp_enqueue_script('jquery');
   wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true);
   wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/theme-scripts.js', array(), '0.0.1', true);

}
add_action('wp_enqueue_scripts', 'addCustomThemeStyles');
