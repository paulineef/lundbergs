<?php get_header(); ?>
<ul class="staffGrid">

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
	<?php foreach ($terms as $value) { //loop through the taxonomy array?>
			<div class="cont">
				<span class="types">
					<h2><a href="/kategori/<?php echo $value->slug ?>"><?php echo $value->name ?></a></h2>
				</span>
			</div>
			<?php } ?>
</ul>
<?php get_footer(); ?>
<style>
	.cont {
		width: 40%;
		display: inline;
		overflow: hidden;
		float: left;
		margin-top: 18vh;
		text-align: center;
		background: #6FA67F;
		color: white;
		margin: 5%;
		box-sizing: border-box;
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