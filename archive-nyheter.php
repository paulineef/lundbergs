<?php 
	echo "NYHETER";
	if (have_posts()):
		while (have_posts()): 
			the_post(); 
?>
<ul>
	<a href="<?php the_permalink();?>">
		<li>
			<div id="nyheter">
				<h1><?php the_title();//the_ = echo out ?></h1>
					<p><?php the_content();?></p>
			</div>
		</li>
	</a>
</ul>

<?php 
	endwhile;
	endif;
?>

<?php // the_excerpt();
	the_post_thumbnail();//echo out the content from the wp developer 
?>
