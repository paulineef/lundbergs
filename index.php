<<<<<<< HEAD
<?php 
	get_header();
	the_title();
	echo "INDEX";
	get_footer(); 
?>
=======
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
>>>>>>> 635ece36a0940791c1837f02bb3edfdd3477b6b4



