<?php get_header(); ?>
<main>
	<div class="bigCont">
		<div id="omOss">
			<div id="ProdukterImg"></div> 
		</div>
		<?php 
			$terms = get_terms(
				array(
					'taxonomy' => 'kategori',
					'hide_empty' => true 
				)
			);
			$args = array(
				'post_type'     => 'produkt', 
				'post_per_page' => -1, 
			);
		?>	
		<div id="catCon">
			<?php foreach ($terms as $value) { //loop through the taxonomy array?>
					<div class="cont">
						<span class="types">
							<a href="/kategori/<?php echo $value->slug?>#categoryId"><h3><?php echo $value->name ?></a>
						</span>
					</div>
			<?php } ?>
			<div id="omOssContent"> 
				<p class=pProdukt>
					<?php
						get_option('the_content');
						// This retrieves the content from the post or page where ID = $page_id.
						// You can either set this above here, or call get_the_content(12). Your choice.
						//$parent_page_content = get_the_content($page_id);

						// Clean it up and make it a bit more legible:
						//$parent_page_content = str_replace(']]>', ']]&gt;', $parent_page_content);
						//$parent_page_content = apply_filters('the_content', $parent_page_content);

						// Now echo out the content in place! <p> tags won't be necessary here, btw.
						//echo $parent_page_content;
					?>
				</p>
			</div>
		</div>
	</div>
		hej archive-produkter
</main>
<?php get_footer(); ?>


<style>
	#pProdukt {
		margin-top: 42px;
		font-size: 12pt;
	}
	.bigCont {
		min-height: 90vh;
		overflow: hidden;
	}
	#catCon {
		overflow: hidden;
		text-align: center;
		width: 80%;
		margin: 0 auto;
		margin-top: -150px;
		left: 33%;
		margin-bottom: -200px;
	}
	.cont {
		width: 100%;
		height: 300px;
		display: inline;
		overflow: hidden;
		float: left;
		margin-top: 20vh;
		text-align: center;
		background: #6FA67F;
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
	#omOssContent {
		width: 100%;
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
