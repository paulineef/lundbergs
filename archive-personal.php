<?php 
	get_header();
	echo "Om oss";
	if (have_posts()):
		while (have_posts()): 
			the_post(); 
?>

<ul id="staffDiv">
	<li id="staffLi">
		<a class="staffA">
			<img class="staffImg" src="<?php the_post_thumbnail_url(grid_thumbnail);?>"/>
			<h1 class="staffTitleh1"> <?php the_title(); ?></h1>
		</a>
	</li>

<?php 
	endwhile;
	endif;
?>

<?php // the_excerpt();
	the_post_thumbnail();//echo out the content from the wp developer 
?>

<?php get_footer(); ?>

