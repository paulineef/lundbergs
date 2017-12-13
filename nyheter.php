<ul class="nList">
	<div id="titleDiv"><h1>Nyheter</h1></div>
	
	<?php
		// create a new query with an array to specified the custom post type
		$nyhet = new WP_Query(array(
	                    'post_type' => 'nyheter',
	                    'orderby' => 'date',
	                    'order' => 'DESC',
	                    'posts_per_page' => '3',
	                	));
		// if the specific custom post type have any posts 
		if ($nyhet->have_posts()):
			//and while the custom post type have posts
			while ($nyhet->have_posts()): 
				//display the posts
				$nyhet->the_post(); 
	?>
		<li>
			<div id="nyhet">
				<a href="<?php the_permalink();?>"><h1><?php the_title();//display the title of the post type ?></h1></a>
				<div class="entry-meta">

					<!-- displays a small text of who the author of the news is and the date it was first published -->
					<?php the_author();?> |
					<?php the_time("F d, Y"); ?>
				</div>
				<p><?php the_excerpt();?></p>	
			</div>
			
		</li>
	<?php 
		endwhile;
		endif;
	?>
	<div id="visa"><a href="nyheter">Visa alla</a></div>
</ul>

