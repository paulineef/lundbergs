	<?php 
		$args = array(
			'post_type'     => 'Personal', 
			'post_per_page' => -1, 
		);

		$query_personal = new WP_Query($args);
		if ($query_personal->have_posts()): 
			while ($query_personal->have_posts()): 
				$query_personal->the_post(); //adds stuff to $post	
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

