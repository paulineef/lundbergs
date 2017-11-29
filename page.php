<main>
	<?php 
		get_header(); //get content from header.php
		//the_post_thumbnail( 'desktop_grid' );
		the_post(); // echo out = "detta är.. "
		$args = array(
			'post_type'     =>  'produkter', //get post_type produkter
			'post_per_page' => -1, //-1 = all the produkter
		);

		$produkt_query = new WP_Query($args); //create a custom query and put in the args array with produkter
	?>
		<div class="aboutCont">
			<h1 class="titlePosts"> <?php the_title();//the_ = echo out ?></h1>
		</div>
		<div id="container">
			<div id="textBox"><p>hejhejehjhejhejhe</p></div>
			<div id="me"><?php the_post_thumbnail(); ?></div>
		</div>
		<div id="cont"><?php the_content();//echo out the content from the page "Detta är .." ?></div>
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
</main>