<!-- gets the header and include it by default -->
<?php get_header(); ?>
<main>
		<?php
		//if the post contains any thumbnails (images) 
		 if(has_post_thumbnail()): 

		 	//get the thumbnails for the current post and put it into a variable, all
			$thumb_id = get_post_thumbnail_id();
			
			//get all the source URL of each img from the the variable 'thumb_id' with the size defined inside 'thumbnail-size', all
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
			
			//put the first image in the array into a new variable, one
			$thumb_url = $thumb_url_array[0]; 
		?>
		<div class="bigCont" style="background-image: url('<?php echo $thumb_url; //display the first image from the array?>');">
		
		<div class="categories">
			<div class="sortCont">

				<!-- display the title of the post and the content by the_post() -->
				<h1><?php the_title();?></h1> 
				<?php the_post();?>
				<p><?php the_content();?></p>
			</div>
			
			<?php 

				//get all the terms inside of the taxonomy Kategori
				$terms = get_terms(
					array(
						'taxonomy' => 'kategori',
						'hide_empty' => true, 
					)
				);
			?>	
				<div id="catCon">

					<!-- Lopp through the array $terms one by one (value) -->
					<?php foreach ($terms as $value) { ?>
						<div class="cont">
							<span class="types">

								<!-- echo out a link with the value of the term at the end of the url to get to the specific produkt -->
								<a href="/kategori/<?php echo $value->slug?>#categoryId"><h3><?php echo $value->name?></h3></a>
							</span>
						</div>
					<?php } ?>
				</div>
		</div>
	</div>
	<?php
		endif;
	?>
</main>
<?php get_footer(); ?>