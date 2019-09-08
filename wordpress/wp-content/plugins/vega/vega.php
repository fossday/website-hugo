<?php

/**
 * @package Vega
 */
/*
Plugin Name: Vega, Plugin  for FOSSDay Project (Schultz)
Plugin URI: https://doseextra.com/vega
Description: To do...
Version: 0.1
Author: Dose Extra/Regis Tomkiel
Author URI: https://doseextra.com/
License: GPLv2 or later
Text Domain: Vega
*/

//Display Logo
if (!function_exists('get_logo')) {
    function get_logo()
    {
      $custom_logo_id = get_theme_mod('custom_logo');
      $image = wp_get_attachment_image_src($custom_logo_id, 'full');
      return $image[0];
    }
};
// End of Display Logo

//Register Custom role for users
require plugin_dir_path( __FILE__ ) . 'includes/add_custom_speaker_role.php';
register_activation_hook(__FILE__, 'add_roles_on_plugin_activation');
//End of Register Custom role for users

//Register Upload Filter for "speaker" user
require plugin_dir_path(__FILE__) . 'includes/trusted_upload_files.php';
//End of register Upload Filter for "speaker" user

// Custom functions for page
add_post_type_support( 'page', 'excerpt' );
// End of Custom functions for page

//Register Talks Custom Post Type
require  plugin_dir_path( __FILE__ ) . 'includes/talks_custom_post_type.php';
//End of Register Custom Post Type

//Register custom field for slides/presentation
require  plugin_dir_path( __FILE__ ) . 'includes/custom_fields/add_slides_fields.php';
//End of Register custom field for slides/presentation

//Register Talks Custom Post Type
require  plugin_dir_path( __FILE__ ) . 'includes/custom_fields/add_custom_fields_talks.php';
//End of Register Custom Post Type

//Register Events Custom Post Type
require  plugin_dir_path( __FILE__ ) . 'includes/events_custom_post_type.php';
//End of Register Custom Post Type

//Register Sponsors Custom Post Type
require plugin_dir_path(__FILE__) . 'includes/sponsors_custom_post_type.php';
//End of Register Sponsors Custom Post Type

//Register Supporters Custom Post Type
require plugin_dir_path(__FILE__) . 'includes/supporters_custom_post_type.php';
//End of Register Supporters Custom Post Type

//Register custom fields for Events
require  plugin_dir_path( __FILE__ ) . 'includes/custom_fields/add_custom_fields_events.php';
//End of register custom fields for Events

//Register Custom users Meta Boxes
require  plugin_dir_path( __FILE__ ) . 'includes/add_more_infos_users.php';
//End of register custom users Meta Boxes

//Rigester Custom Fields for Settings page
require  plugin_dir_path( __FILE__ ) . 'includes/add_more_meta_boxes_settings.php';
//End of Rigester Custom Fields for Settings page