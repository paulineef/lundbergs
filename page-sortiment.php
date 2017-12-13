<?php get_header(); ?>
<main>
		<?php if(has_post_thumbnail()): 
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
			$thumb_url = $thumb_url_array[0]; 
		?>
		<div class="bigCont" style="background-image: url('<?php echo $thumb_url; ?>');">
		
		<div class="categories">
			<div id="sortCont">
				<h1><?php the_title();?></h1> 
				<?php the_post();?>
				<p><?php the_content();?></p>
			</div>
			<?php get_template_part('partials/taxonomi_category'); //get the content from the file taxonomy_category?>
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
		background-size: 100%;
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

	.categories h1 {

	}
	#catCon {
		overflow: hidden;
		text-align: center;
		width: 80%;
		margin: 100px auto;
	}
	.cont {
		width: 100%;
		height: 300px;
		display: inline;
		overflow: hidden;
		float: left;
		margin-top: 20vh;
		text-align: center;
		background: #57828C;
		color: white;
		margin: 22px 0;
		box-sizing: border-box;
	}
	.cont:hover {
		background: #3f634e;
		-webkit-transition: all 0.5s; 
			-moz-transition: all 0.5s; 
			-ms-transition: all 0.5s; 
			-o-transition: all 0.5s; 
			transition: all 0.5s;
	}
	.cont h3 {
		margin: 120px 0px;
		font-size: 25pt;
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
	#catCon {
		width: 670px;
	}
}
</style>