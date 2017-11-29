<?php get_header();  ?>
<?php
		$my_query = new WP_Query($args);
		if ($my_query->have_posts()): 
		while ($my_query->have_posts()): 
	?>
		
			<ul class="posts">
		
			<?php
				$my_query->the_post(); //adds stuff to $post	
		
				//you can put pure HTML here
			?>
			<a href='<?php the_permalink()?>'><li><h1 class="titlePosts"><?php the_title();//the_ = echo out ?></h1></li></a>
		
			<?php // the_excerpt();
				the_post_thumbnail();//echo out the content from the wp developer ?>
</ul>	
<?php get_footer(); ?>