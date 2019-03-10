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

add_filter( 'post_updated_messages', 'product_updated_messages' );
/**
 * Product update messages.
 *
 * See /wp-admin/edit-form-advanced.php
 *
 * @param array $messages Existing post update messages.
 *
 * @return array Amended post update messages with new CPT update messages.
 */
function product_updated_messages( $messages ) {
	$post             = get_post();
	$post_type        = get_post_type( $post );
	$post_type_object = get_post_type_object( $post_type );

	$messages['product'] = array(
		0  => '', // Unused. Messages start at index 1.
		1  => __( 'Product updated.', 'cheers' ),
		2  => __( 'Custom field updated.', 'cheers' ),
		3  => __( 'Custom field deleted.', 'cheers' ),
		4  => __( 'Product updated.', 'cheers' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Product restored to revision from %s', 'cheers' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6  => __( 'Product published.', 'cheers' ),
		7  => __( 'Product saved.', 'cheers' ),
		8  => __( 'Product submitted.', 'cheers' ),
		9  => sprintf(
			__( 'Product scheduled for: <strong>%1$s</strong>.', 'cheers' ),
			// translators: Publish box date format, see http://php.net/date
			date_i18n( __( 'M j, Y @ G:i', 'cheers' ), strtotime( $post->post_date ) )
		),
		10 => __( 'Product draft updated.', 'cheers' )
	);

	if ( $post_type_object->publicly_queryable && 'product' === $post_type ) {
		$permalink = get_permalink( $post->ID );

		$view_link = sprintf( ' <a href="%s">%s</a>', esc_url( $permalink ), __( 'View product', 'cheers' ) );
		$messages[ $post_type ][1] .= $view_link;
		$messages[ $post_type ][6] .= $view_link;
		$messages[ $post_type ][9] .= $view_link;

		$preview_permalink = add_query_arg( 'preview', 'true', $permalink );
		$preview_link = sprintf( ' <a target="_blank" href="%s">%s</a>', esc_url( $preview_permalink ), __( 'Preview product', 'cheers' ) );
		$messages[ $post_type ][8]  .= $preview_link;
		$messages[ $post_type ][10] .= $preview_link;
	}

	return $messages;
}