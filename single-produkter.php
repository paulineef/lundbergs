<?php get_header(); ?>
<main>
	<div id="singleTop"></div>
	<h1 id="singleHead"><?php the_title();?></h1>
	<div id="singleContainer">
		<?php if(have_posts()):
				while(have_posts()):
					the_post();
		?>
					<div id="singleImg"><?php the_post_thumbnail(); //echo out image ?></div>
					<div class="singleP"> <?php the_content();?></div>
				<?php
				endwhile; 
			endif;
		?>
	</div>
	<div id="singleBottom"></div>
</main>
<?php get_footer(); ?>

