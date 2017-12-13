<ul class="nList">
	<div id="titleDiv"><h1>Nyheter</h1></div>
	<?php
		$nyhet = new WP_Query(array(
	                    'post_type' => 'nyheter',
	                    'orderby' => 'date',
	                    'order' => 'DESC',
	                    'posts_per_page' => '3',
	                	));

		if ($nyhet->have_posts()):
			while ($nyhet->have_posts()): 
				$nyhet->the_post(); 
	?>
		<li>
			<div id="nyhet">
				<a href="<?php the_permalink();?>"><h1><?php the_title();//the_ = echo out ?></h1></a>
				<div class="entry-meta">
					<?php the_author();?> |
					<?php the_time("F d, Y"); ?>
				</div>
				<p><?php the_excerpt();?></p>	
			</div>
			
		</li>
	<?php 
		endwhile;
		endif;
	?>
	<div id="visa"><a href="nyheter">Visa alla</a></div>
</ul>

