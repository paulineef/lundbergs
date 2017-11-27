<?php 

function register_the_menus() {
	register_nav_menus(
	array(
		'header-menu' => __('Header Menu'),
		'extra-menu' => __('Extra Menu')
		)
	);
} 

add_action('init', 'register_my_menus');

?>



 <!-- <?php  

// //function to link portfolio.css
// //name, location, deps (have none for now),version, what device will it displays
// function lundbergs_style_enqueue(){ 

// 	wp_enqueue_style( 'css', get_stylesheet_uri() . '/css.css', false, '1.1', 'all' ); 
// }

// //to call with an action our function, to tell when to execute our function
// //generate all the scripts that has to be included in our theme, what kind of function you want to call
// //where should the script be embedded/print, is clarified in header.php
// add_action( 'wp_enqueue_style', 'lundbergs_script_enqueue');

?> -->