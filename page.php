<!-- <main>
	<?php 
		get_header(); //get content from header.php
		//the_post_thumbnail( 'desktop_grid' );
	


	?>
		<div class="aboutCont">
		<h1 class="titlePosts"> <?php the_title();//the_ = echo out ?>
		</div>
		<div id="container">
			<div id="textBox"><p>hejhejehjhejhejhe</p>
			</div>
		</div>
		<div id="cont"><?php the_content();//echo out the content from the page "Detta är .." ?></div>
<<<<<<< HEAD
	
</main>
=======
	<?php
		if ($produkt_query->have_posts()): 
			while ($produkt_query->have_posts()): 
				$produkt_query->the_post();
				the_post_thumbnail( 'desktop_grid' );//echo out image
	?>
		<h2><a href=" <?php the_permalink(); ?>"><?php the_title();//echo out the post type title?></a></h2>  

	<?php		the_content(); //echo out content from the post type
			endwhile; 
		endif;
	?>
</main> -->
>>>>>>> 635ece36a0940791c1837f02bb3edfdd3477b6b4
