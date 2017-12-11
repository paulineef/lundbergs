<main>
	<?php get_header(); 

		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		$thumb_url = $thumb_url_array[0];?>

  		<div id="feature" class="<?php the_title(); ?>" style="background-image: url('<?php echo $thumb_url; ?>');">
  		</div>

		<div class="page">
			<?php 
			the_title();
			the_post();
			the_content(); 
			?>
		</div>	

	<?php get_footer(); ?>
</main>
<style type="text/css">
	.page {
		margin: 60px 120px;
	}
</style>