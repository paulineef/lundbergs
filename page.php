<!-- a fallback if there's a page without a customized file -->

<main>

	<!-- gets the header and include it by default -->
	<?php get_header(); 

		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		$thumb_url = $thumb_url_array[0];?>

  		<div id="feature" class="<?php the_title(); ?>" style="background-image: url('<?php echo $thumb_url; ?>');">
  		</div>

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

<style type="text/css">
	.page {
		width: 100%;
		margin: 60px 120px;
	}
</style>