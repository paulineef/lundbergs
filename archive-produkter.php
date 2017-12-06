<?php get_header(); ?>
<div id="bigCont">
	<div id="omOss">
	<div id="omOssImg"></div> 
	<div id="omOssContent"> 
		<h1 class="bigHeading">Om oss</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet, mi eget blandit pellentesque, tortor risus molestie nibh, vitae aliquam dolor odio eu magna. Ut suscipit luctus sapien at lobortis. Morbi dignissim sem id commodo dapibus. Pellentesque ut mauris quis nisl sodales fringilla vel sit amet risus. Cras tristique sollicitudin sapien, at ullamcorper lectus aliquam non. In lacinia, neque at congue condimentum, ante diam fermentum quam, vitae iaculis sem ex et nulla.</p>
	</div>
	
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
	?>	<div id="catCon">
	<?php foreach ($terms as $value) { //loop through the taxonomy array?>
			<div class="cont">
				<span class="types">
					<h3><a href="/kategori/<?php echo $value->slug ?>"><?php echo $value->name ?></a></h3>
				</span>
			</div>
			<?php } ?>
</ul></div>
</div>
<?php get_footer(); ?>
<style>
	#bigCont {
		min-height: 90vh;
		overflow: hidden;
	}
	#catCon {
		overflow: hidden;
		text-align: center;
		width: 600px;
		margin: 0 auto;
		position: absolute;
		top: 30vh;
		left: 33%;
	}
	.cont {
		width: 250px;
		height: 200px;
		display: inline;
		overflow: hidden;
		float: left;
		margin-top: 18vh;
		text-align: center;
		background: #6FA67F;
		color: white;
		margin: 22px;
		box-sizing: border-box;
	}
	.cont h3 {
		margin: 70px 10px;
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
	}
</style>