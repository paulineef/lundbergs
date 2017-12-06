<?php get_header();?>
<div class="ny">
	<ul class="nList">
	<?php

		if (have_posts()):
			while (have_posts()): 
				the_post(); 
	?>
		<li>
			<div id="nyhet">
				<a href="<?php the_permalink();?>"><h1><?php the_title();//the_ = echo out ?></h1></a>
				<div class="entry-meta">
					<?php the_time("F d, Y"); ?>
				</div>
				<p><?php the_content();?></p>
			</div>
			
		</li>
	<?php 
		endwhile;
		endif;
	?>
	</ul>
</div>

<?php get_footer();?>


