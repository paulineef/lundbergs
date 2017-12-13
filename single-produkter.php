<?php get_header(); ?>
<main>
	<div id="singleTop"></div>
	<a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
	<h1 id="singleHead"><?php the_title();?></h1>
	<div id="singleContainer">
		<?php if(have_posts()):
				while(have_posts()):
					the_post();
		?>
					<div class="singleP"> <?php the_content();?></div>
					<div id="singleImg"><?php the_post_thumbnail(); //echo out image ?></div>
				<?php
				endwhile; 
			endif;
		?>
	</div>
	<div id="singleBottom"></div>
</main>
<?php get_footer(); ?>

