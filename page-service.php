<?php /* Template Name: Service */ ?>
<main>

	<!-- gets the header and include it by default -->
	<?php get_header();

	//if the post contains any thumbnails (images), big on at the top 
	if(has_post_thumbnail()): 

		//get the thumbnails for the current post and put it into a variable, all
		$thumb_id = get_post_thumbnail_id();

		
		//get all the source URL of each img from the the variable 'thumb_id' with the size defined inside 'thumbnail-size', all
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		

		//put the first image in the array into a new variable, one
		$thumb_url = $thumb_url_array[0]; 
	?>
	<div id="feature" style="background-image: url('<?php echo $thumb_url; //display the first image from the array?>');"></div>
	<?php
		endif;
	?>

			<!-- if there is  any posts  -->
			<?php if(have_posts()):

				// and while there's posts
				while(have_posts()):

					// display posts
					the_post();?>

						<div class="page">

							<!-- displays the content of posts -->
							<?php the_content();?>
							<div class="faq">
							<h1> Vanliga Frågor </h1>

							<!-- get another template parts/file, 
							so code does not need to be repeated.
							posttype_faq -->
							<?php get_template_part('partials/posttype_faq');?>
							</div>
								<!-- Stänger column_2 diven -->
						</div> 
						</div>
						
						<?php
					endwhile; 
				endif;
			?>

	<!-- gets the footer and include it by default -->
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

	.faqul {
		padding: 0;
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