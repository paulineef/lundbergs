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

				$terms = get_terms(
					array(
						'taxonomy' => 'kategori',
						'hide_empty' => true, 
					)
				);
			?>	
				<div id="catCon">
					<?php foreach ($terms as $value) { //loop through the taxonomy array?>
						<div class="cont">
							<span class="types">
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
<style>
	.pProdukt {
		    margin-top: 20%;
	}
	.pProdukt p {
		margin-top: 42px;
		font-size: 12pt;
	}
	.bigCont {
		background-repeat: no-repeat;
		min-height: 90vh;
		overflow: hidden;
	}
	.categories {
		overflow: hidden;
		box-sizing: border-box;
		width: 80%;
		margin: auto;
		background: #fff;
	}

	.sortCont {
		width: 80%;
		margin: 100px auto 30px auto;
		box-sizing: border-box;
		overflow: hidden;
	}

	#catCon {
		overflow: hidden;
		text-align: center;
		width: 80%;
		margin: 0px auto 100px auto;
	}
	.cont {
		box-sizing: border-box;
		overflow: hidden;
		display: flex;
		justify-content: center;
		align-items: center; 
		width: 100%;
		height: 200px;
		float: left;
		margin-top: 20vh;
		text-align: center;
		background: #57828C;
		color: white;
		margin: 22px 0;
		
	}
	.cont:hover {
		background: #4b6e76;
		-webkit-transition: all 0.5s; 
			-moz-transition: all 0.5s; 
			-ms-transition: all 0.5s; 
			-o-transition: all 0.5s; 
			transition: all 0.5s;
	}
	.cont h3 {
		font-size: 20pt;
	}
	.cont a {
		color: white;
	}
	.staffGrid {
		padding: 0;
		margin: 0;
		width: 100%;
		padding: 44px 0;
		min-height: 90vh;
	}
	.product {
		max-width: 100%;
		box-sizing: border-box;
		float: left;
		overflow: hidden;
		padding: 0px 88px;
		
		position: relative;

	}
	.product img {
		width: 100%;
		height: 100%;
	}
	.product h2 {
		color: black;
		margin: 0;
		text-align: center;
		position: absolute;
		margin: 0 auto;
		top: 330px;
		width: 100%;
		padding-right: 176px;
		box-sizing: border-box;
	}
	.product a {
		text-decoration: none;
	}
	.product li {
		list-style-type: none;
	}
@media (min-width: 1024px){
	.bigCont {
		background-size: 200%;
	}
	.product {
		max-width: 50%;
		padding: 88px;	
	}
	.pProdukt {
		margin: 5% auto;
	}
	.cont {
		width: 45%;
		margin: 10px;
	}

	.sortCont {
		margin-top: 150px;
		width: 650px;
	}
	#catCon {
		width: 670px;
	}

	.cont h3 {
		font-size: 25pt; 
	}
}
</style>
