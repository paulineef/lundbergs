
<h1 id="hej"><?php wp_title() ?></h1>

<ul id="staffUl">

<?php 
	get_header();
	if (have_posts()):
		while (have_posts()): 
			the_post(); 
?>
		<li id="staffLi">
			<a class="staffA">
				<img class="staffImg" src="<?php the_post_thumbnail_url('mobile_grid');?>"/>
				<h1 class="staffTitleh1"> <?php the_title(); ?></h1>
			</a>
		</li>

<?php 
	endwhile;
	endif;
?>

</ul>


<?php get_footer(); ?>

