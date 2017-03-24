<?php
/*
Plugin Name: GN Product Post Type
Description: Registers the post type and taxomonies for the shop
Author: Gabe Neri
Version: 0.1
License: GPLv3
*/

//Register the post type
add_action('init', 'gn_post_type_register');
function gn_post_type_register(){
  register_post_type( 'product', array(
    'public'        => true,
    'has_archive'   => true,
    'menu_icon'     => 'dashicons-cart',
    'menu_position' => 5,
    'rewrite'       => array('slug' => 'shop'),
    'supports'      => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt', 'comments', 'revisions'),
    'labels'        => array(
      'name'             => 'Products',
      'singular_name'    => 'Product',
      'not_found'        => 'No Product Found',
      'add_new_item'     => 'Add New Product',
      'search_items'     => 'Search Products',
    ),
  ) );
}
