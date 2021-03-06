<?php
function kategori() {
	//define which labels to use and what to call them
	$labels = array(
		'name'                       => _x( 'Kategorier', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'kategori', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Kategorier', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	//an array of arguments, look for details at comments at post_types.php
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	//register the taxonomy called 'kategori' connected to the post type 'produkt' with the arguments 'args'
	register_taxonomy( 'kategori', array( 'produkt' ), $args );

}
//Hooks a function on to a specific action.
add_action( 'init'/*name of action*/, 'kategori'/*which function to add*/, 0 /*early in the prioritazion list*/);

?>