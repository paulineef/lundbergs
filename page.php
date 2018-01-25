<!-- a fallback if there's a page without a customized file -->
<main>

	<!-- gets the header and include it by default -->
	<?php 
	get_header(); 

	//if the post contains any thumbnails (images), big on at the top 
	if(has_post_thumbnail()): 

		//get the thumbnails for the current post and put it into a variable, all
		$thumb_id = get_post_thumbnail_id();

		//get all the source URL of each img from the the variable 'thumb_id' with the size defined inside 'thumbnail-size', all
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);

		//put the first image in the array into a new variable, one
		$thumb_url = $thumb_url_array[0];
	?>

  		<div id="feature" class="<?php the_title(); ?>" style="background-image: url('<?php echo $thumb_url;//display the first image from the array?>');">
  		</div>

  	<?php endif; ?>

  		<!-- will display the post and content -->
		<div class="page">
			<?php 
			the_post();
			the_content(); 
			?>
		</div>	

	<!-- gets the footer and include it by default -->
	<?php get_footer(); ?>
</main>