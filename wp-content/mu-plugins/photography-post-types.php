<?php
function photography_post_types() {
  
  // Banner Slides Post Type
  register_post_type('slide', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => false,
    'show_ui' => true,
    'labels' => array(
      'name' => 'Banner Slides',
      'add_new_item' => 'Add New Slide',
      'edit_item' => 'Edit Slide',
      'all_items' => 'All Slides',
      'singular_name' => 'Slide'
    ),
    'menu_icon' => 'dashicons-format-gallery'
  ));
  
  // Services Post Type
  register_post_type('service', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'public' => false,
    'show_ui' => true,
    'labels' => array(
      'name' => 'Services',
      'add_new_item' => 'Add New Service',
      'edit_item' => 'Edit Service',
      'all_items' => 'All Services',
      'singular_name' => 'Service'
    ),
    'menu_icon' => 'dashicons-camera-alt'
  ));
  
 // speciality Post Type
  register_post_type('speciality', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Our Speciality',
      'add_new_item' => 'Add New Speciality',
      'edit_item' => 'Edit Speciality',
      'all_items' => 'All Specialities',
      'singular_name' => 'Speciality'
    ),
    'menu_icon' => 'dashicons-admin-media'
  ));
  
  
  // Sponsors Post Type
  register_post_type('sponsor', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Sponsors Slides',
      'add_new_item' => 'Add New Sponsor',
      'edit_item' => 'Edit Sponsor',
      'all_items' => 'All Sponsors',
      'singular_name' => 'Sponsor'
    ),
    'menu_icon' => 'dashicons-awards'
  ));
  
  // Review Post Type
  register_post_type('review', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Review Slides',
      'add_new_item' => 'Add New Review',
      'edit_item' => 'Edit Review',
      'all_items' => 'All Reviews',
      'singular_name' => 'Review'
    ),
    'menu_icon' => 'dashicons-admin-comments'
  ));
  
}

add_action('init', 'photography_post_types');

?>