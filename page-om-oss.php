<!-- adds a template name -->
<?php /* Template name: Om Oss */ ?>

<main>

	<!-- gets the header and include it by default -->
	<?php get_header();?>

	<!-- div around the whole page -->
	<div id="omOss">
		<?php
			//if the post contains any thumbnails (images), big on at the top 
			if(has_post_thumbnail()): 
				
				//get the thumbnails for the current post and put it into a variable, all
				$thumb_id = get_post_thumbnail_id(); 

				//get all the source URL of each img from the the variable 'thumb_id' with the size defined inside 'thumbnail-size', all
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); 

				//put the first image in the array into a new variable, one
				$thumb_url = $thumb_url_array[0]; 
		?>
			<div id="omOssImg" style="background-image: url('<?php echo $thumb_url; //display the first image from the array?>');"></div> 
		<?php endif; ?>

		<!--div around om oss text only, not the image-->	
 		<div id="omOssContent">
			<?php 
				//gets the post
				the_post();?>

				<!-- display the content of the post-->
				<p><?php the_content(); ?></p>
		</div>
	</div>

	<!-- div around the personal part -->
	<div id="personal">
		<h1>Våra anställda</h1>
		<ul>
			
			<?php 
				// create a new query with an array to specified the custom post type
				$personal = new WP_Query(array(
		                    'post_type' => 'personal',
		                    // alphabetic order
		                    'order' => 'ASC'
		                	));

				// if the specific custom post type, personal, have any posts 
				if ($personal->have_posts()):
					//and while the custom post type have posts
					while ($personal->have_posts()): 
						//display the posts
						$personal->the_post(); 
			?>

			<li>
				<!-- a specification of the thumbnails size, determined in functions.php -->
				<div class="anstalld" style="background-image: url('<?php the_post_thumbnail_url('mobil_thumbnail');?>');"></div>
				<div class="meta">

					<!-- display the title of the post -->
					<h4><?php the_title(); ?></h4>
					
					<!-- display the content of the post -->
					<span><?php the_content(); ?></span>
				</div>
			</li>
			<?php 
				endwhile;
				endif;
			?>
		</ul>
	</div>
	
	<!-- gets the footer and include it by default -->
	<?php get_footer(); ?>
</main>