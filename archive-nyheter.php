<?php 
	get_header();
	echo "NYHETER";
	if ( have_posts()):
		while ( have_posts()): 
			the_post(); 
?>
<ul class="posts">

	<a href='<?php the_permalink()?>'><li><h1 class="titlePosts"><?php the_title();//the_ = echo out ?></h1></li></a>

<?php 
	endwhile;
	endif;
?>

<?php // the_excerpt();
	the_post_thumbnail();//echo out the content from the wp developer 
?>

<?php get_footer(); ?>
