<?php 
	get_header();
	echo "Om oss";
	if (have_posts()):
		while (have_posts()): 
			the_post(); 
?>

<ul class="">
	<li>
		<img src="<?php the_post_thumbnail_url();?>"/>
		<h1 class=""> <?php the_title(); ?></h1>
	</li>

<?php 
	endwhile;
	endif;
?>

<?php // the_excerpt();
	the_post_thumbnail();//echo out the content from the wp developer 
?>

<?php get_footer(); ?>

