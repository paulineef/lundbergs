<?php 
	$args = array(
		'post_type'     => 'faq', 
		'post_per_page' => -1, 
	);
	$query_personal = new WP_Query($args);
	if ($query_personal->have_posts()): 
		while ($query_personal->have_posts()): 
			$query_personal->the_post(); //adds stuff to $post	
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

