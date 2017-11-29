<?php get_header(); ?>
<main>
	<h1><a href=" <?php the_permalink(); ?>"></a><?php the_title();//the_ = echo out ?></h1> 
	<p> the PAGE.PHP </p>

	<?php
		if( have_posts() ) {
			while ( have_posts() ){
				//the_post(); 
				the_content(); 
				the_post_thumbnail( 'desktop_grid' ); //echo out featured image
			}
		}

		?>

	
	<?php


	//Inside the loop: HTML and template tags

	get_sidebar();
	get_footer();
	?>
</main>

<?php 

the_post_thumbnail( 'desktop_grid' );
?>