<?php get_header(); ?>
<main class="indexMain">
	<?php 
	$args = array(
  	'post_type'     => 'project', 
  	'post_per_page' => -1, 
); ?>
	<div class="content">

		<?php if(have_posts()):
		while(have_posts()):?>

		<ul class="posts">	
			<li><h1 class="titlePosts"><a href='<?php the_permalink()?>'> <?php the_title();//the_ = echo out ?></a></h1> </li>
			<?php the_post(); ?>
			<?php the_post_thumbnail(); ?>
			<?php the_content(); ?>
		</ul>
	<?php
    endwhile; 
endif;
		?>
	</div>
</main>
		<?php get_footer(); ?>

<style>
	
</style>