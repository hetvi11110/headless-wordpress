<?php
/**
 * Register a new "Task" post type.
 *
 * Called from taskbook.php.
 * 
 * @package  Taskbook
 * @link     https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/
 */


// Register Custom Post Type
function tasks_post_type() {

	$labels = array(
		'name'                  => _x( 'Tasks', 'Post Type General Name', 'taskbook' ),
		'singular_name'         => _x( 'Task', 'Post Type Singular Name', 'taskbook' ),
		'menu_name'             => __( 'Post Types', 'taskbook' ),
		'name_admin_bar'        => __( 'Post Type', 'taskbook' ),
		'archives'              => __( 'Item Archives', 'taskbook' ),
		'attributes'            => __( 'Item Attributes', 'taskbook' ),
		'parent_item_colon'     => __( 'Parent Item:', 'taskbook' ),
		'all_items'             => __( 'All Items', 'taskbook' ),
		'add_new_item'          => __( 'Add New Item', 'taskbook' ),
		'add_new'               => __( 'Add New', 'taskbook' ),
		'new_item'              => __( 'New Item', 'taskbook' ),
		'edit_item'             => __( 'Edit Item', 'taskbook' ),
		'update_item'           => __( 'Update Item', 'taskbook' ),
		'view_item'             => __( 'View Item', 'taskbook' ),
		'view_items'            => __( 'View Items', 'taskbook' ),
		'search_items'          => __( 'Search Item', 'taskbook' ),
		'not_found'             => __( 'Not found', 'taskbook' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'taskbook' ),
		'featured_image'        => __( 'Featured Image', 'taskbook' ),
		'set_featured_image'    => __( 'Set featured image', 'taskbook' ),
		'remove_featured_image' => __( 'Remove featured image', 'taskbook' ),
		'use_featured_image'    => __( 'Use as featured image', 'taskbook' ),
		'insert_into_item'      => __( 'Insert into item', 'taskbook' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'taskbook' ),
		'items_list'            => __( 'Items list', 'taskbook' ),
		'items_list_navigation' => __( 'Items list navigation', 'taskbook' ),
		'filter_items_list'     => __( 'Filter items list', 'taskbook' ),
	);
	$rewrite = array(
		'slug'                  => 'tasks',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Task', 'taskbook' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-list-view',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'query_var'             => 'post_type',
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rest_base'             => 'tasks',
	);
	register_post_type( 'tasks', $args );

}
add_action( 'init', 'tasks_post_type', 0 );

function taskbook_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
    tasks_post_type();
 
    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}