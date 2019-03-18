<?php

add_action( 'init', 'product_post_type' );
/**
 * Register a product post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function product_post_type() {
	$labels = array(
		'name'               => _x( 'Product', 'Pro', 'cheers' ),
		'singular_name'      => _x( 'Product', 'post type singular name', 'cheers' ),
		'menu_name'          => _x( 'Products', 'admin menu', 'cheers' ),
		'name_admin_bar'     => _x( 'Product', 'add new on admin bar', 'cheers' ),
		'add_new'            => _x( 'Add New', 'product', 'cheers' ),
		'add_new_item'       => __( 'Add New Product', 'cheers' ),
		'new_item'           => __( 'New Product', 'cheers' ),
		'edit_item'          => __( 'Edit Product', 'cheers' ),
		'view_item'          => __( 'View Product', 'cheers' ),
		'all_items'          => __( 'All Products', 'cheers' ),
		'search_items'       => __( 'Search Products', 'cheers' ),
		'parent_item_colon'  => __( 'Parent Product:', 'cheers' ),
		'not_found'          => __( 'No products found.', 'cheers' ),
		'not_found_in_trash' => __( 'No products found in Trash.', 'cheers' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'cheers' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'product' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'show_in_rest'		 => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'product', $args );
}


add_action( 'init', 'testimonial_post_type' );
/**
 * Register a testimonial post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function testimonial_post_type() {
	$labels = array(
		'name'               => _x( 'Testimonial', 'Test', 'cheers' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name', 'cheers' ),
		'menu_name'          => _x( 'Testimonials', 'admin menu', 'cheers' ),
		'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'cheers' ),
		'add_new'            => _x( 'Add New', 'testimonial', 'cheers' ),
		'add_new_item'       => __( 'Add New Testimonial', 'cheers' ),
		'new_item'           => __( 'New Testimonial', 'cheers' ),
		'edit_item'          => __( 'Edit Testimonial', 'cheers' ),
		'view_item'          => __( 'View Testimonial', 'cheers' ),
		'all_items'          => __( 'All Testimonials', 'cheers' ),
		'search_items'       => __( 'Search Testimonials', 'cheers' ),
		'parent_item_colon'  => __( 'Parent Testimonial:', 'cheers' ),
		'not_found'          => __( 'No testimonials found.', 'cheers' ),
		'not_found_in_trash' => __( 'No testimonials found in Trash.', 'cheers' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'cheers' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonials' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
        'supports'           => array( 'title', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'testimonial', $args );
}


add_action( 'init', 'recipe_post_type' );
/**
 * Register a Recipe post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function recipe_post_type() {
	$labels = array(
		'name'               => _x( 'Recipe', 'post type name', 'cheers' ),
		'singular_name'      => _x( 'Recipe', 'post type singular name', 'cheers' ),
		'menu_name'          => _x( 'Recipes', 'admin menu', 'cheers' ),
		'name_admin_bar'     => _x( 'Recipe', 'add new on admin bar', 'cheers' ),
		'add_new'            => _x( 'Add New', 'recipe', 'cheers' ),
		'add_new_item'       => __( 'Add New Recipe', 'cheers' ),
		'new_item'           => __( 'New Recipe', 'cheers' ),
		'edit_item'          => __( 'Edit Recipe', 'cheers' ),
		'view_item'          => __( 'View Recipe', 'cheers' ),
		'all_items'          => __( 'All Recipes', 'cheers' ),
		'search_items'       => __( 'Search Recipes', 'cheers' ),
		'parent_item_colon'  => __( 'Parent Recipe:', 'cheers' ),
		'not_found'          => __( 'No recipes found.', 'cheers' ),
		'not_found_in_trash' => __( 'No recipes found in Trash.', 'cheers' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'cheers' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'recipe' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'recipe', $args );
}