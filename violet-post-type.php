<?php
/**
 * Plugin Name: Violet Post Type
 * Plugin URI: #
 * Version: 1.0
 * Author: Rakib Hossain
 * Author URI: http://rakibhossain.cf/
 * Description: Violet theme required plugin. 
 * License: GPL2
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if ( ! class_exists( 'VioletCPT' ) ) :
class VioletCPT {

	function __construct() {
		add_action( 'init', array( $this, 'register_violet_post_type' ) );  
	}
	
	function register_violet_post_type() {
	  register_post_type( 'portfolio',
	    array(
	      'labels' => array(
	        'name'               => _x( 'Portfolios', 'post type general name', 'violet' ),
	        'singular_name'      => _x( 'Portfolio', 'post type singular name', 'violet' ),
	        'menu_name'          => _x( 'Portfolios', 'admin menu', 'violet' ),
	        'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'violet' ),
	        'add_new'            => _x( 'Add New', 'Portfolio', 'violet' ),
	        'add_new_item'       => __( 'Add New Portfolio', 'violet' ),
	        'new_item'           => __( 'New Portfolio', 'violet' ),
	        'edit_item'          => __( 'Edit Portfolio', 'violet' ),
	        'view_item'          => __( 'View Portfolio', 'violet' ),
	        'all_items'          => __( 'All Portfolios', 'violet' ),
	        'search_items'       => __( 'Search Portfolios', 'violet' ),
	        'parent_item_colon'  => __( 'Parent Portfolios:', 'violet' ),
	        'not_found'          => __( 'No Portfolios found.', 'violet' ),
	        'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'violet' )
	      ),
	      'menu_icon' => 'dashicons-portfolio',
	      'supports' => array( 'title','thumbnail' ),
	      'public' => true,
	      'has_archive' => true
	    )
	  );

	  register_post_type( 'team',
	    array(
	      'labels' => array(
	        'name'               => _x( 'Members', 'post type general name', 'violet' ),
	        'singular_name'      => _x( 'Member', 'post type singular name', 'violet' ),
	        'menu_name'          => _x( 'Team', 'admin menu', 'violet' ),
	        'name_admin_bar'     => _x( 'Members', 'add new on admin bar', 'violet' ),
	        'add_new'            => _x( 'Add New', 'Portfolio', 'violet' ),
	        'add_new_item'       => __( 'Add New Member', 'violet' ),
	        'new_item'           => __( 'New Member', 'violet' ),
	        'edit_item'          => __( 'Edit Member', 'violet' ),
	        'view_item'          => __( 'View Member', 'violet' ),
	        'all_items'          => __( 'All Members', 'violet' ),
	        'not_found'          => __( 'No Members found.', 'violet' ),
	        'not_found_in_trash' => __( 'No Members found in Trash.', 'violet' )
	      ),
	      'menu_icon' => 'dashicons-groups',
	      'supports' => array( 'title', 'thumbnail'),
	      'public' => true,
	      'has_archive' => true
	    )
	  );

	  register_post_type( 'partner',
	    array(
	      'labels' => array(
	        'name'               => _x( 'Partners', 'post type general name', 'violet' ),
	        'singular_name'      => _x( 'Partner', 'post type singular name', 'violet' ),
	        'menu_name'          => _x( 'Partners', 'admin menu', 'violet' ),
	        'name_admin_bar'     => _x( 'Partner', 'add new on admin bar', 'violet' ),
	        'add_new'            => _x( 'Add New', 'Partner', 'violet' ),
	        'add_new_item'       => __( 'Add New Partner', 'violet' ),
	        'new_item'           => __( 'New Partner', 'violet' ),
	        'edit_item'          => __( 'Edit Partner', 'violet' ),
	        'view_item'          => __( 'View Partner', 'violet' ),
	        'all_items'          => __( 'All Partners', 'violet' ),
	        'search_items'       => __( 'Search Partners', 'violet' ),
	        'parent_item_colon'  => __( 'Parent Partners:', 'violet' ),
	        'not_found'          => __( 'No Partners found.', 'violet' ),
	        'not_found_in_trash' => __( 'No Partners found in Trash.', 'violet' )
	      ),
	      'menu_icon' => 'dashicons-businessman',
	      'supports' => array( 'title','thumbnail' ),
	      'public' => true,
	      'has_archive' => true
	    )
	  );

	  register_post_type( 'testimonial',
	    array(
	      'labels' => array(
	        'name'               => _x( 'Testimonials', 'post type general name', 'violet' ),
	        'singular_name'      => _x( 'Testimonial', 'post type singular name', 'violet' ),
	        'menu_name'          => _x( 'Testimonials', 'admin menu', 'violet' ),
	        'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'violet' ),
	        'add_new'            => _x( 'Add New', 'Testimonial', 'violet' ),
	        'add_new_item'       => __( 'Add New Testimonial', 'violet' ),
	        'new_item'           => __( 'New Testimonial', 'violet' ),
	        'edit_item'          => __( 'Edit Testimonial', 'violet' ),
	        'view_item'          => __( 'View Testimonial', 'violet' ),
	        'all_items'          => __( 'All Testimonials', 'violet' ),
	        'search_items'       => __( 'Search Testimonials', 'violet' ),
	        'parent_item_colon'  => __( 'Parent Testimonials:', 'violet' ),
	        'not_found'          => __( 'No Testimonials found.', 'violet' ),
	        'not_found_in_trash' => __( 'No Testimonials found in Trash.', 'violet' )
	      ),
	      'menu_icon' => 'dashicons-editor-paste-text',
	      'supports' => array( 'title', 'editor', 'thumbnail'),
	      'public' => true,
	      'has_archive' => true
	    )
	  );

	  register_post_type( 'skill',
	    array(
	      'labels' => array(
	        'name'               => _x( 'My skills', 'post type general name', 'violet' ),
	        'singular_name'      => _x( 'Skill', 'post type singular name', 'violet' ),
	        'menu_name'          => _x( 'My skills', 'admin menu', 'violet' ),
	        'name_admin_bar'     => _x( 'Skill', 'add new on admin bar', 'violet' ),
	        'add_new'            => _x( 'Add New', 'Skill', 'violet' ),
	        'add_new_item'       => __( 'Add New Skill', 'violet' ),
	        'new_item'           => __( 'New Skill', 'violet' ),
	        'edit_item'          => __( 'Edit Skill', 'violet' ),
	        'view_item'          => __( 'View Skill', 'violet' ),
	        'all_items'          => __( 'All My skills', 'violet' ),
	        'search_items'       => __( 'Search My skills', 'violet' ),
	        'parent_item_colon'  => __( 'Parent My skills:', 'violet' ),
	        'not_found'          => __( 'No My skills found.', 'violet' ),
	        'not_found_in_trash' => __( 'No My skills found in Trash.', 'violet' )
	      ),
	      'menu_icon' => 'dashicons-awards',
	      'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
	      'public' => true,
	      'has_archive' => true
	    )
	  );

	  register_post_type( 'services',
	    array(
	      'labels' => array(
	        'name'               => _x( 'Services', 'post type general name', 'violet' ),
	        'singular_name'      => _x( 'Service', 'post type singular name', 'violet' ),
	        'menu_name'          => _x( 'My Services', 'admin menu', 'violet' ),
	        'name_admin_bar'     => _x( 'My Service', 'add new on admin bar', 'violet' ),
	        'add_new'            => _x( 'Add New', 'My Service', 'violet' ),
	        'add_new_item'       => __( 'Add New Service', 'violet' ),
	        'new_item'           => __( 'New Service', 'violet' ),
	        'edit_item'          => __( 'Edit Service', 'violet' ),
	        'view_item'          => __( 'View Service', 'violet' ),
	        'all_items'          => __( 'All Services', 'violet' ),
	        'search_items'       => __( 'Search Service', 'violet' ),
	        'parent_item_colon'  => __( 'Parent Service:', 'violet' ),
	        'not_found'          => __( 'No Services found.', 'violet' ),
	        'not_found_in_trash' => __( 'No Services found in Trash.', 'violet' )
	      ),
	      'menu_icon' => 'dashicons-art',
	      'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
	      'public' => true,
	      'has_archive' => true
	    )
	  );
 

	}
}


$VioletCPT = new VioletCPT;

endif;?>
