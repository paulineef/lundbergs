<?php get_header(); ?>
<ul class="staffGrid">
<?php
	echo "PRODUKTER";
	if ( have_posts()):
		while ( have_posts()): 
?>
	<li class="product"><a href='<?php the_permalink();?>'><h1 class="titlePosts">
		<?php the_post(); ?>
		<h2><?php the_title();?></h2> <?php the_post_thumbnail(); ?></h1></a></li>

<?php 
	endwhile;
	endif;
?>
</ul>
<?php get_footer(); ?>
<style>
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