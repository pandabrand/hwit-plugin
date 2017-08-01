<?php
/*
Plugin Name: HWIT Custom Post Types
Description: Custom Post Types for Heartland Women in Trades website.
Author: Frederick Wells
Author URI: http://www.pandabrand.net
*/

//include_once( plugin_dir_path( __FILE__ ).'rapid-addon.php' );
add_action( 'init', 'hwit_cpt' );

function hwit_cpt() {
  //Resource post type
  register_post_type( 'resource', array(
    'labels' => array(
      'name' => 'Resources',
      'singular_name' => 'Resource',
      'menu_name' => 'Resource',
      'name_admin_bar' => 'Resource',
      'add_new' => 'Add New',
      'add_new_item' => 'Add New Resource',
      'edit_item' => 'Edit Resource',
      'new_item' => 'New Resource',
      'view_item' => 'View Resource',
      'search_items' => 'Search Resources',
      'not_found' => 'No Resources found',
      'not_found_in_trash' => 'No Resources in the trash.',
      'all_items' => 'Resources',
     ),
    'description' => 'A resource that can be helpful to users of the Heartland Women in Trades website.',
    'public' => true,
    'menu_position' => 5,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'show_in_nav_menus' => true,
    'has_archive' => true
  ));
}
