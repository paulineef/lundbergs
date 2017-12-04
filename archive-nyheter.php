<?php 
	get_header();
	echo "NYHETER";
	if ( have_posts()):
		while ( have_posts()): 
			the_post(); 
?>

<div id="nyheter">
	<a href='<?php the_permalink()?>'>
		<h1><?php the_title();//the_ = echo out ?></h1></a>
			<p><?php the_content();?></p>
</div>

<?php 
	endwhile;
	endif;
?>

<?php // the_excerpt();
	the_post_thumbnail();//echo out the content from the wp developer 
?>
