<?php
// css and javascript style
  function wordpressEnqueue_scripts(){
    wp_enqueue_script('jquery',get_template_directory_uri(). '/js/jquery-3.5.1.min.js', array());
    wp_enqueue_style('my_style', get_template_directory_uri(). '/style.css', array() );
  }

  add_action('wp_enqueue_scripts','wordpressEnqueue_scripts');



  


// Excerptの言語数限定２５
// function custom_excerpt_length(){
//   return 20;
// }
// add_filter('excerpt_length', 'custom_excerpt_length');

function jp_length($length) {
  return 30;
}
add_filter('excerpt_mblength', 'jp_length',999);



// Add featured image support
function Wordpress_setup(){
  //Navigation Menu bar
  register_nav_menus(array(
    'primary' => 'Primary Header nav',
    'footernav' =>'Footer Nav'
  ));

  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 180,150, true);
  add_image_size('banner-image', 920,210, true);
}
add_action('after_setup_theme','Wordpress_setup');


// Add Widget location
function wordpressWidgetInit(){
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar1',
    'before_widget' =>'<div class="widget-item">',
    'after_widget'=>'</div>'
  ));

  register_sidebar(array(
    'name' => 'Footer Area 1',
    'id' => 'footer1'
  ));

  register_sidebar(array(
    'name' => 'Footer Area 2',
    'id' => 'footer2'
  ));
}
add_action('widgets_init','wordpressWidgetInit');


