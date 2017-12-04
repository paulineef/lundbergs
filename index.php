<?php get_header(); ?>

<div id="content">
	<div id="history">
		<div>
			<?php the_post();?>
                <h2><?php the_title();?></h2>
                <p><?php the_content(); ?></p>
           
		</div>
	</div>
</div>

<?php get_footer(); ?>



