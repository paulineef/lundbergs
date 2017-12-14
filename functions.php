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
		)
	  );
	}
	//Hooks a function on a specific action
	add_action( 'init', 'register_my_menus' );
?>
