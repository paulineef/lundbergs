<main>
	<?php get_header();

	if(has_post_thumbnail()): 
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		$thumb_url = $thumb_url_array[0]; 
	?>
	<div id="feature" style="background-image: url('<?php echo $thumb_url; ?>');"></div>
	<?php
		endif;
	?>
	<?php the_post();?>
	<div id="content">
		<div id="nyhet">
			<a href="<?php the_permalink();?>"><h1 style="font-size: 24pt;"><?php the_title();//the_ = echo out ?></h1></a>
			<div class="entry-meta">
				<?php the_author();?> |
				<?php the_time("F d, Y"); ?>
			</div>
			<p><?php the_content();?></p>
		</div>
	</div>
	
	<?php get_footer(); ?>
</main>

