<div id="omOss">
	<div id="omOssImg"></div> 
	<div id="omOssContent"> 
		<h6 id="headomoss"><?php the_title(); ?></h6>
	</div>
</div>
<?php get_header();?>
	<?php 
		if (have_posts()):
			while (have_posts()): 
				the_post(); 
	?>
				<div id="contentfloat"><?php  the_content();?></div>
				
				<ul id="staffUl">
				<h1 class="bigHeading">Våra anställda</h1>

				<?php get_template_part('partials/posttype_personal'); //get the content from the file personal?>
	<?php 
			endwhile;
		endif;
	?>

</ul>
<?php get_footer(); ?>

