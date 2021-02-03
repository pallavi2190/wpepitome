<?php

/***
 * Custom Post Type: Services
 */
function services_post_type() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'psd2wp' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'psd2wp' ),
		'menu_name'             => __( 'Services', 'psd2wp' ),
		'name_admin_bar'        => __( 'Services', 'psd2wp' ),
		'archives'              => __( 'Services Archives', 'psd2wp' ),
		'attributes'            => __( 'Services Attributes', 'psd2wp' ),
		'parent_item_colon'     => __( 'Parent Service:', 'psd2wp' ),
		'all_items'             => __( 'All Services', 'psd2wp' ),
		'add_new_item'          => __( 'Add New Service', 'psd2wp' ),
		'add_new'               => __( 'Add Service', 'psd2wp' ),
		'new_item'              => __( 'New Service', 'psd2wp' ),
		'edit_item'             => __( 'Edit Service', 'psd2wp' ),
		'update_item'           => __( 'Update Service', 'psd2wp' ),
		'view_item'             => __( 'View Service', 'psd2wp' ),
		'view_items'            => __( 'View Services', 'psd2wp' ),
		'search_items'          => __( 'Search Service', 'psd2wp' ),
		'not_found'             => __( 'Not found', 'psd2wp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'psd2wp' ),
		'featured_image'        => __( 'Featured Image', 'psd2wp' ),
		'set_featured_image'    => __( 'Set featured image', 'psd2wp' ),
		'remove_featured_image' => __( 'Remove featured image', 'psd2wp' ),
		'use_featured_image'    => __( 'Use as featured image', 'psd2wp' ),
		'insert_into_item'      => __( 'Insert into Service', 'psd2wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'psd2wp' ),
		'items_list'            => __( 'Services list', 'psd2wp' ),
		'items_list_navigation' => __( 'Services list navigation', 'psd2wp' ),
		'filter_items_list'     => __( 'Filter Services list', 'psd2wp' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'psd2wp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-networking',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'services_post_type', 0 );


/***
 * Custom Post Type: Portfolios
 */

// Register Custom Post Type
function portfolios_post_type() {

	$labels = array(
		'name'                  => _x( 'Portfolios', 'Post Type General Name', 'psd2wp' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'psd2wp' ),
		'menu_name'             => __( 'Portfolios', 'psd2wp' ),
		'name_admin_bar'        => __( 'Portfolios', 'psd2wp' ),
		'archives'              => __( 'Portfolios Archives', 'psd2wp' ),
		'attributes'            => __( 'Portfolios Attributes', 'psd2wp' ),
		'parent_item_colon'     => __( 'Parent Portfolio:', 'psd2wp' ),
		'all_items'             => __( 'All Portfolios', 'psd2wp' ),
		'add_new_item'          => __( 'Add New Portfolio', 'psd2wp' ),
		'add_new'               => __( 'Add Portfolio', 'psd2wp' ),
		'new_item'              => __( 'New Portfolio', 'psd2wp' ),
		'edit_item'             => __( 'Edit Portfolio', 'psd2wp' ),
		'update_item'           => __( 'Update Portfolio', 'psd2wp' ),
		'view_item'             => __( 'View Portfolio', 'psd2wp' ),
		'view_items'            => __( 'View Portfolios', 'psd2wp' ),
		'search_items'          => __( 'Search Portfolio', 'psd2wp' ),
		'not_found'             => __( 'Not found', 'psd2wp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'psd2wp' ),
		'featured_image'        => __( 'Featured Image', 'psd2wp' ),
		'set_featured_image'    => __( 'Set featured image', 'psd2wp' ),
		'remove_featured_image' => __( 'Remove featured image', 'psd2wp' ),
		'use_featured_image'    => __( 'Use as featured image', 'psd2wp' ),
		'insert_into_item'      => __( 'Insert into Portfolio', 'psd2wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'psd2wp' ),
		'items_list'            => __( 'Portfolios list', 'psd2wp' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'psd2wp' ),
		'filter_items_list'     => __( 'Filter Portfolios list', 'psd2wp' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'psd2wp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-images-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portfolios', $args );

}
add_action( 'init', 'portfolios_post_type', 0 );


/***
 * Custom Post Type: Testimonials
 */
// Register Custom Post Type
function testimonials_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'psd2wp' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'psd2wp' ),
		'menu_name'             => __( 'Testimonials', 'psd2wp' ),
		'name_admin_bar'        => __( 'Testimonials', 'psd2wp' ),
		'archives'              => __( 'Testimonials Archives', 'psd2wp' ),
		'attributes'            => __( 'Testimonials Attributes', 'psd2wp' ),
		'parent_item_colon'     => __( 'Parent Testimonial:', 'psd2wp' ),
		'all_items'             => __( 'All Testimonials', 'psd2wp' ),
		'add_new_item'          => __( 'Add New Testimonial', 'psd2wp' ),
		'add_new'               => __( 'Add Testimonial', 'psd2wp' ),
		'new_item'              => __( 'New Testimonial', 'psd2wp' ),
		'edit_item'             => __( 'Edit Testimonial', 'psd2wp' ),
		'update_item'           => __( 'Update Testimonial', 'psd2wp' ),
		'view_item'             => __( 'View Testimonial', 'psd2wp' ),
		'view_items'            => __( 'View Testimonials', 'psd2wp' ),
		'search_items'          => __( 'Search Testimonial', 'psd2wp' ),
		'not_found'             => __( 'Not found', 'psd2wp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'psd2wp' ),
		'featured_image'        => __( 'Featured Image', 'psd2wp' ),
		'set_featured_image'    => __( 'Set featured image', 'psd2wp' ),
		'remove_featured_image' => __( 'Remove featured image', 'psd2wp' ),
		'use_featured_image'    => __( 'Use as featured image', 'psd2wp' ),
		'insert_into_item'      => __( 'Insert into Testimonial', 'psd2wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'psd2wp' ),
		'items_list'            => __( 'Testimonials list', 'psd2wp' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'psd2wp' ),
		'filter_items_list'     => __( 'Filter Testimonials list', 'psd2wp' ),
	);
	$args = array(
		'label'                 => __( 'Testimonials', 'psd2wp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-images-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'testimonials_post_type', 0 );


/***
 * Custom Post Type: FAQs
 */
// Register Custom Post Type
function faqs_post_type() {

	$labels = array(
		'name'                  => _x( 'FAQs', 'Post Type General Name', 'psd2wp' ),
		'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'psd2wp' ),
		'menu_name'             => __( 'FAQs', 'psd2wp' ),
		'name_admin_bar'        => __( 'FAQs', 'psd2wp' ),
		'archives'              => __( 'FAQs Archives', 'psd2wp' ),
		'attributes'            => __( 'FAQs Attributes', 'psd2wp' ),
		'parent_item_colon'     => __( 'Parent FAQ:', 'psd2wp' ),
		'all_items'             => __( 'All FAQs', 'psd2wp' ),
		'add_new_item'          => __( 'Add New FAQ', 'psd2wp' ),
		'add_new'               => __( 'Add FAQ', 'psd2wp' ),
		'new_item'              => __( 'New FAQ', 'psd2wp' ),
		'edit_item'             => __( 'Edit FAQ', 'psd2wp' ),
		'update_item'           => __( 'Update FAQ', 'psd2wp' ),
		'view_item'             => __( 'View FAQ', 'psd2wp' ),
		'view_items'            => __( 'View FAQs', 'psd2wp' ),
		'search_items'          => __( 'Search FAQ', 'psd2wp' ),
		'not_found'             => __( 'Not found', 'psd2wp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'psd2wp' ),
		'featured_image'        => __( 'Featured Image', 'psd2wp' ),
		'set_featured_image'    => __( 'Set featured image', 'psd2wp' ),
		'remove_featured_image' => __( 'Remove featured image', 'psd2wp' ),
		'use_featured_image'    => __( 'Use as featured image', 'psd2wp' ),
		'insert_into_item'      => __( 'Insert into FAQ', 'psd2wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'psd2wp' ),
		'items_list'            => __( 'FAQs list', 'psd2wp' ),
		'items_list_navigation' => __( 'FAQs list navigation', 'psd2wp' ),
		'filter_items_list'     => __( 'Filter FAQs list', 'psd2wp' ),
	);
	$args = array(
		'label'                 => __( 'FAQs', 'psd2wp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-images-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'faqs', $args );

}
add_action( 'init', 'faqs_post_type', 0 );


/***
 * Custom Post Type: Brands
 */
// Register Custom Post Type
function brands_post_type() {

	$labels = array(
		'name'                  => _x( 'Brands', 'Post Type General Name', 'psd2wp' ),
		'singular_name'         => _x( 'Brand', 'Post Type Singular Name', 'psd2wp' ),
		'menu_name'             => __( 'Brands', 'psd2wp' ),
		'name_admin_bar'        => __( 'Brands', 'psd2wp' ),
		'archives'              => __( 'Brands Archives', 'psd2wp' ),
		'attributes'            => __( 'Brands Attributes', 'psd2wp' ),
		'parent_item_colon'     => __( 'Parent Brand:', 'psd2wp' ),
		'all_items'             => __( 'All Brands', 'psd2wp' ),
		'add_new_item'          => __( 'Add New Brand', 'psd2wp' ),
		'add_new'               => __( 'Add Brand', 'psd2wp' ),
		'new_item'              => __( 'New Brand', 'psd2wp' ),
		'edit_item'             => __( 'Edit Brand', 'psd2wp' ),
		'update_item'           => __( 'Update Brand', 'psd2wp' ),
		'view_item'             => __( 'View Brand', 'psd2wp' ),
		'view_items'            => __( 'View Brands', 'psd2wp' ),
		'search_items'          => __( 'Search Brand', 'psd2wp' ),
		'not_found'             => __( 'Not found', 'psd2wp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'psd2wp' ),
		'featured_image'        => __( 'Featured Image', 'psd2wp' ),
		'set_featured_image'    => __( 'Set featured image', 'psd2wp' ),
		'remove_featured_image' => __( 'Remove featured image', 'psd2wp' ),
		'use_featured_image'    => __( 'Use as featured image', 'psd2wp' ),
		'insert_into_item'      => __( 'Insert into Brand', 'psd2wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Brand', 'psd2wp' ),
		'items_list'            => __( 'Brands list', 'psd2wp' ),
		'items_list_navigation' => __( 'Brands list navigation', 'psd2wp' ),
		'filter_items_list'     => __( 'Filter Brands list', 'psd2wp' ),
	);
	$args = array(
		'label'                 => __( 'Brand', 'psd2wp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'brands', $args );

}
add_action( 'init', 'brands_post_type', 0 );

?>