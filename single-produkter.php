<!-- single is when a specific custom posttype is clicked, example if you want to know more about a product -->

<!-- gets the header and include it by default -->
<?php get_header(); ?>

<main>
	<div id="singleContainer">
		<h1 id="singleHead"><?php the_title();?></h1>
		<div class="border"></div>

		<div class="infoCont">

		<!-- if there is  any posts  -->
		<?php if(have_posts()):

			// and while there's posts
			while(have_posts()):
				
				// display posts
				the_post();
		?>
					<!-- display the content of a product -->
					<div class="singleP"> <?php the_content();?></div>
					<!-- display the image, and gives support for it -->
					<div id="singleImg"><?php the_post_thumbnail(); //echo out image ?></div>
				
				<?php
				endwhile; 
			endif;
		?>
		</div>	
	</div>
</main>

<!-- gets the footer and include it by default -->
<?php get_footer(); ?>