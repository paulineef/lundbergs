<?php 
	$args = array(
		'post_type'     => 'Personal', 
		'post_per_page' => -1, 
	);

	// create a new query with an array to specified the custom post type
	$query_personal = new WP_Query($args);

	// if the specific custom post type, personal, have any posts 
	if ($query_personal->have_posts()): 
		
		//and while the custom post type have posts
		while ($query_personal->have_posts()): 

		//display the posts
		$query_personal->the_post();
?>
	<li id="staffLi">
		<a class="staffA">
			<img class="staffImg" src="<?php the_post_thumbnail_url('grid_thumbnail');?>"/>
			<h1 class="staffTitleh1"> <?php the_title(); ?></h1>
		</a>
	</li>
<?php
		endwhile; 
	endif;
?>

