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
