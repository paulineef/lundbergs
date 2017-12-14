<?php get_header();?>
<div class="ny">
	<ul class="nList">
	<?php

		// if there is  any posts
		if (have_posts()):
			
			// and while there's posts
			while (have_posts()):

				// display posts 
				the_post(); 
	?>
		<li>
			<div id="nyhet">
				<a href="<?php the_permalink();//the link to the root of the post?>"><h1><?php the_title();//the_ = echo out ?></h1></a>
				<div class="entry-meta">
					<?php the_time("F d, Y");//echo out the time from when the post was published ?>
				</div>
				<p><?php the_excerpt();//echo out the excerpt field from dashboard?></p>
			</div>
			
		</li>
	<?php 
		endwhile;
		endif;
	?>
	</ul>
</div>

<?php get_footer();?>


