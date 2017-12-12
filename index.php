<?php get_header(); ?>
<main class="indexMain">
	<div class="bigCont">
		<div id="ProdukterImg"></div> 
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
		</div>
		<?php 
			$args = array(
				'post_type'     => 'project', 
				'post_per_page' => -1, 
			); 
		?>
		<h1 id="categoryId"><?php single_term_title(); ?></h1>
		<div class="productContainer">
			<?php if(have_posts()):
					while(have_posts()):
						the_post();
			?>
						<ul class="productUl">	
							<li>
								<a href='<?php the_permalink()//link to single page?>'>
									<div class="productImg"><?php the_post_thumbnail(); //echo out image ?></div>
									 <?php the_title();//the_ = echo out ?>
								</a>
							</li>
						</ul>
					<?php
					endwhile; 
				endif;
			?>
		</div>
	</div>
</main>
<?php get_footer();?>


<style>
	.pProdukt {
		margin-top: 42px;
		font-size: 12pt;
	}
	.bigCont {
		overflow: hidden;
		margin-bottom: 10%;
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
		-webkit-transition: all 0.5s; /*make the hover color fade in*/
			-moz-transition: all 0.5s; 
			-ms-transition: all 0.5s; 
			-o-transition: all 0.5s; 
			transition: all 0.5s;
	}
	.cont h3 {
		margin: 100px 0px;
		font-size: 25pt;
	}
	.cont a {
		color: white;
		font-size: 32pt;
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
	#omOssContent {
		width: 100%;
	}
	.cont {
		width: 45%;
		margin: 10px;
	}
	.cont a {
		font-size: 26pt;
	}
	#catCon {
		width: 670px;
	}
}
</style>
