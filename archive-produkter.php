<?php 
	get_header();
	echo "PRODUKTER";
	if ( have_posts()):
		while ( have_posts()): 
			the_post(); 
?>

<ul class="staffGrid">
	<li class="product"><a href='<?php the_permalink();?>'><h1 class="titlePosts">

		<h2><?php the_title();?></h2> <?php the_post_thumbnail(); ?></h1></a></li>
</ul>

<?php 
	endwhile;
	endif;
?>

<?php get_footer(); ?>
<style>
	.product {
		max-width: 50%;
		box-sizing: border-box;
		float: left;
		overflow: hidden;
		padding: 88px;
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
		top: 350px;
	}
	.product a {
		text-decoration: none;
	}
	.product li {
		list-style-type: none;
	}
</style>