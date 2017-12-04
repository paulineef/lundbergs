<?php 
	get_header();
	echo "Produkter";
	if ( have_posts()):
		while ( have_posts()): 
			the_post(); 

?>
hhfnfmfjfgjffcgjftfj
<ul class="posts">

<a href='<?php the_permalink()?>'><li><h1 class="titlePosts"><?php the_title();//the_ = echo out ?></h1></li></a>

<?php 
	endwhile;
	else: 
		echo "string";
	endif;
?>

<?php // the_excerpt();
	the_post_thumbnail();//echo out the content from the wp developer 
?>

<?php get_footer(); ?>

