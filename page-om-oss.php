<main>
	<?php get_header();?>

	<div id="omOss">
		<?php
			if(has_post_thumbnail()): 
				$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				$thumb_url = $thumb_url_array[0]; 
		?>
		<div id="omOssImg" style="background-image: url('<?php echo $thumb_url; ?>');"></div> 
		<?php endif; ?>

		<div id="omOssContent">
			<?php 
				the_post();?>
				<p><?php the_content(); ?></p>
		</div>
	</div>
	<div id="personal">
		<h1>Personal</h1>
		<ul>
			
			<?php 
				$personal = new WP_Query(array(
		                    'post_type' => 'personal',
		                    'order' => 'ASC'
		                	));

				if ($personal->have_posts()):
					while ($personal->have_posts()): 
						$personal->the_post(); 
			?>
			<li>
				<div class="anstalld" style="background-image: url('<?php the_post_thumbnail_url('mobil_thumbnail');?>');"></div>
				<h4><?php the_title(); ?></h4>
			</li>
			<?php 
				endwhile;
				endif;
			?>
		</ul>
	</div>

	<?php get_footer(); ?>
</main>
