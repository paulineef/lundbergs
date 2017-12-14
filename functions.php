 <?php  

// //function to link portfolio.css
// //name, location, deps (have none for now),version, what device will it displays
// function lundbergs_style_enqueue(){ 

// 	wp_enqueue_style( 'css', get_stylesheet_uri() . '/css.css', false, '1.1', 'all' ); 
// }

// //to call with an action our function, to tell when to execute our function
// //generate all the scripts that has to be included in our theme, what kind of function you want to call
// //where should the script be embedded/print, is clarified in header.php
// add_action( 'wp_enqueue_style', 'lundbergs_script_enqueue');

?>
<?php 
	//title bar
	// All below registers theme support for different given features
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails'); //support photos
	add_theme_support('post-formats', array('gallery', 'image'));

	// includes the files below
	include('incl/post_types.php');
	include('incl/taxonomies.php');


	//Media sizes
	add_image_size( 'grid_thumbnail', 300, 300, true );
	add_image_size( 'mobile_grid', 500, 500, true );
	add_image_size( 'single_large', 660, 400, false );


	//register menus through a function
	function register_my_menus() {
	  register_nav_menus(
		array(
		  'main-menu' => __( 'Main Menu' ), //menu location and name of menu
		  'extra-menu' => __( 'Extra Menu' ) //menu location and name of menu
		)
	  );
	}
	//Hooks a function on a specific action
	add_action( 'init', 'register_my_menus' );


add_action( 'init', 'sk_add_category_taxonomy_to_produkter' );
function sk_add_category_taxonomy_to_produkter() {
	register_taxonomy_for_object_type( 'kategori', 'e4gf_produkter' );
}
?>
