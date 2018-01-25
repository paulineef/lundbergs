<!-- single is when a specific custom posttype is clicked, example if you want to know more about a news -->

<main>
	<!-- gets the header and include it by default -->
	<?php get_header();

	//if the post contains any thumbnails (images)
	if(has_post_thumbnail()): 

		//get the thumbnails for the current post and put it into a variable, all
		$thumb_id = get_post_thumbnail_id();
		
		//get all the source URL of each img from the the variable 'thumb_id' with the size defined inside 'thumbnail-size', all
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		
		//put the first image in the array into a new variable, one
		$thumb_url = $thumb_url_array[0]; 
	?>
	<div id="feature" style="background-image: url('<?php echo $thumb_url; ?>');"></div>
	<?php
		endif;
	?>
	<?php the_post();?>
	<div id="content">
		<div id="nyhet">
			<a href="<?php the_permalink();?>"><h1 style="font-size: 24pt;"><?php the_title();//display the title of the post type?></h1></a>
			<div class="entry-meta">
				
				<!-- displays a small text of who the author of the news is and the date it was first published -->
				<?php the_author();?> |
				<?php the_time("F d, Y"); ?>
			</div>
			
			<!-- displays the content of the news -->
			<p><?php the_content();?></p>
		</div>
	</div>
	
	<!-- gets the footer and include it by default -->
	<?php get_footer(); ?>
</main>