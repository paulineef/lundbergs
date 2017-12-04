<?php 
	get_header();
	echo "Om oss";
	if ( have_posts()):
		while ( have_posts()): 
			the_post(); 
?>

<ul class="staffGrid">
	<li>
		<a href='<?php the_permalink();?>'>
		<img src="<?php the_post_thumbnail_url(); ?>"/>
		</a>

		<li><h1 class="titlePosts"><?php the_title();//the_ = echo out ?></h1></a>
	</li>

<?php 
	endwhile;
	endif;
?>

<?php // the_excerpt();
	the_post_thumbnail();//echo out the content from the wp developer 
?>

<?php get_footer(); ?>

