<?php /* Template Name: Two Columns */ ?>
<main>
	<?php get_header(); 

		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		$thumb_url = $thumb_url_array[0];?>

  		<div id="feature" style="background-image: url('<?php echo $thumb_url; ?>');">
  		</div>

		<div class="page">
			<?php 
				the_post();
				the_content(); 
			?>

		</div>			


	<?php get_footer(); ?>
</main>
<style type="text/css">
	p {
		font-size: 10pt;
		line-height: 16pt;
		text-align: left;
		margin-right: 0px !important;
	}

	#feature {
		width: 100%;
		height: 200px;
		background-size: 100%;
		background-repeat: no-repeat;
	}

	.page {
		display: flex;
		flex-direction: column; 
		margin: 60px 120px;
	}

	.page h1 {
		font-weight: 300;
	}

	.page b {
		font-weight: 600;
	}

	.column_1 {
		padding-bottom: 60px;
	}

	.column_1 img {
		margin: 60px 0px;
		width: 100%;
	}

	.box {
		margin-bottom: 60px; 
		background: #f2f2f2;
		padding: 30px;
		text-align: right; 
	}

	.box b {
		margin-bottom: 10px; 
	}

	.box p {
		text-align: right; 
	}

	@media (min-width: 1024px){
		.page {
			flex-direction: row;
			justify-content: space-between;
		}

		.column_1 {
			border-right: 1px solid #ddd;
			padding-right: 60px;
		}

		.column_1 img {
			margin: 30px 0px;
			width: 300px;
		}

		.column_2 {
		padding-left: 60px;
		}
	}
</style>