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
						<a href="/kategori/<?php echo $value->slug ?>"><h3><?php echo $value->name ?></a>
					</span>
				</div>
		<?php } ?>
			<div id="omOssContent"> 
				<p class=pProdukt>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet, mi eget blandit pellentesque, tortor risus molestie nibh, vitae aliquam dolor odio eu magna. Ut suscipit luctus sapien at lobortis. Morbi dignissim sem id commodo dapibus. Pellentesque ut mauris quis nisl sodales fringilla vel sit amet risus. Cras tristique sollicitudin sapien, at ullamcorper lectus aliquam non. In lacinia, neque at congue condimentum, ante diam fermentum quam, vitae iaculis sem ex et nulla.
				</p>
			</div>
		</div>
	</div>
	<h1><?php echo $value->name ?></h1>
	<?php 
		$args = array(
			'post_type'     => 'project', 
			'post_per_page' => -1, 
		); 
	?>
	<div class="content">
		<?php if(have_posts()):
				while(have_posts()):
					the_post();
		?>
					<ul class="productUl">	
						<li>
							<div class="productImg"><?php the_post_thumbnail(); //echo out image ?></div>
							<a href='<?php the_permalink()//link to single page?>'> <?php the_title();//the_ = echo out ?></a>
							<p class=pProdukt><?php the_content(); ?></p>
						</li>
					</ul>
				<?php
				endwhile; 
			endif;
		echo('index');
		?>
	</div>
</main>
<?php get_footer(); ?>


<style>
	.pProdukt {
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
	.productImg {
		background-color: #ff11ff;
	}
	.productImg img {
		max-width 50%;
		height: 50%;
	}
	.productUl {
		margin: 5%;
   		padding: 0;
	}
	.productUl li {
		width 50%;
	}
	.productUl li a {
		color: #6FA67F;
		font-size: 18pt;
		font-weight: 600;
		margin-left: 10%;
		font-family: 'montserrat';
	}
@media (min-width: 1024px){
	.product {
		max-width: 50%;
		padding: 88px;	
	}
	#pProdukt {
		margin: 0 auto;
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
