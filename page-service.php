<?php /* Template Name: Service */ ?>
<main>
	<?php get_header(); 

		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		$thumb_url = $thumb_url_array[0];?>

  		<div id="feature" style="background-image: url('<?php echo $thumb_url; ?>');">
  		</div>
			<?php if(have_posts()):
					while(have_posts()):
						the_post();
						?>
						<div class="page">
							<?php 
								the_content(); 
							?>
							<div class="faq">
							<h1> Vanliga Frågor </h1>
							<?php get_template_part('partials/posttype_faq'); //get the content from file faq ?>
							</div>
								<!-- Stänger column_2 diven -->
								</div> 
						</div>
						
						<?php
					endwhile; 
				endif;
			?>
	<?php get_footer(); ?>
</main>

<style type="text/css">
	.page {
		box-sizing: border-box;
		width: 100%;
		display: flex;
		flex-direction: column; 
		padding: 60px 120px;
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

	.column_2 {
		display: flex; 
		flex-direction: column; 
	}

	.box {
		margin-bottom: 60px; 
		background: #f2f2f2;
		padding: 30px;
		text-align: right; 
		float: left; 
	}

	.box b {
		margin-bottom: 10px; 
	}

	.box p {
		text-align: right; 
	}

	span {
		font-size: 10pt; 
		line-height: 16pt;
	}

	h5 {
		font-weight: 600;
	}

	@media (min-width: 1024px){

		.page {
			display: flex; 
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
			display: flex; 
			flex-direction: column; 
		}
	}
</style>