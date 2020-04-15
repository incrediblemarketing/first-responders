<?php
/**
 * Procedure Post Type
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

if ( ! function_exists( 'im_register_procedures' ) ) {

	/**
	 * Register Procedure Post Type
	 */
	function im_register_procedures() {

		$labels = array(
			'name'                  => _x( 'Wellness Programs', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Wellness Program', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Wellness Programs', 'text_domain' ),
			'name_admin_bar'        => __( 'Wellness Program', 'text_domain' ),
			'archives'              => __( 'Wellness Program Archives', 'text_domain' ),
			'attributes'            => __( 'Wellness Program Attributes', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Wellness Program:', 'text_domain' ),
			'all_items'             => __( 'All Wellness Programs', 'text_domain' ),
			'add_new_item'          => __( 'Add New Wellness Program', 'text_domain' ),
			'add_new'               => __( 'Add New', 'text_domain' ),
			'new_item'              => __( 'New Wellness Program', 'text_domain' ),
			'edit_item'             => __( 'Edit Wellness Program', 'text_domain' ),
			'update_item'           => __( 'Update Wellness Program', 'text_domain' ),
			'view_item'             => __( 'View Wellness Program', 'text_domain' ),
			'view_items'            => __( 'View Wellness Programs', 'text_domain' ),
			'search_items'          => __( 'Search Wellness Program', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into Wellness Program', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Wellness Program', 'text_domain' ),
			'items_list'            => __( 'Wellness Programs list', 'text_domain' ),
			'items_list_navigation' => __( 'Wellness Programs list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter Wellness Programs list', 'text_domain' ),
		);
		$args   = array(
			'label'               => __( 'Wellness Program', 'text_domain' ),
			'description'         => __( 'Wellness Program Pages', 'text_domain' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-index-card',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			'show_in_rest'        => true,
			'rewrite'             => array( 'with_front' => false, 'slug' => 'wellness-programs' ),
		);
		register_post_type( 'procedure', $args );

	}
	add_action( 'init', 'im_register_procedures', 0 );

}
