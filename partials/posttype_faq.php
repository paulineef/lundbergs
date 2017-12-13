<?php 
	$args = array(
		'post_type'     => 'faq', 
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
			<ul class="faqUl">	
				<li>
					<h5><?php the_title();//the_ = echo out ?></h5>
					<p><?php the_content();?></p>
				</li>
			</ul>
<?php
		endwhile; 
	endif;
?>

