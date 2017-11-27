<?php 

function register_the_menus() {
	register_nav_menus(
	array(
		'header-nav' => __('Page menu'),
		)
	);
} 

add_action('init', 'register_my_menus');

?>
