<?php 
   function setup_theme(){
   add_theme_support('title-tag');
   add_theme_support('custom-logo');
   add_theme_support('post-thumbnails');
   add_theme_support('gallery');
   add_theme_support('partner');
   }
  add_action('after_setup_theme','setup_theme');

  if( function_exists('add_image_size')) { 
  add_image_size('custom-logo',125, 75, true);
  add_image_size('gallery',328, 328, true);
  add_image_size('partner',250, 200, true);
}

function review_customer() {
register_sidebar(array(
'name' => __( 'Customer Review', 'rajoverseas' ),
'id' => 'review',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
}

 //register navbar
  function alpsnepal_menu(){
    if(function_exists('register_nav_menu')){
      register_nav_menu('navbar', __('Main Navbar'));
      register_nav_menu('footer1', __('Footer Menu First'));
      register_nav_menu('footer2', __('Footer Menu Second'));
      register_nav_menu('footer3', __('Footer Menu Third'));
      register_nav_menu('sidebar1', __('Sidebar First'));
      register_nav_menu('sidebar2', __('Sidebar Second'));
    }
   }
add_action('init','alpsnepal_menu');
add_action( 'init', 'review_customer');