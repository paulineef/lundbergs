<div id="omOss">
	<div id="omOssImg"></div> 
	<div id="omOssContent"> 
		<h1 class="bigHeading">Om oss</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet, mi eget blandit pellentesque, tortor risus molestie nibh, vitae aliquam dolor odio eu magna. Ut suscipit luctus sapien at lobortis. Morbi dignissim sem id commodo dapibus. Pellentesque ut mauris quis nisl sodales fringilla vel sit amet risus. Cras tristique sollicitudin sapien, at ullamcorper lectus aliquam non. In lacinia, neque at congue condimentum, ante diam fermentum quam, vitae iaculis sem ex et nulla. Nulla tristique augue condimentum mi elementum eleifend. Maecenas tempor nibh id sem mollis, a porttitor ligula euismod. Ut lobortis sapien eros, quis faucibus eros tincidunt in. Donec id enim quis velit dignissim pretium. Mauris ut facilisis massa. Praesent quis sapien lacus. Quisque elementum ut libero vehicula ullamcorper.</p>
	</div>
	
</div>

<ul id="staffUl">
	<h1 class="bigHeading">Personal</h1>


	<?php 
		get_header();

		if (have_posts()):
			while (have_posts()): 
				the_post(); 
	?>
	
	<li id="staffLi">
		<a class="staffA">
			<img class="staffImg" src="<?php the_post_thumbnail_url('mobil_thumbnail');?>"/>
			<h1 class="staffTitleh1"> <?php the_title(); ?></h1>
		</a>
	</li>

	<?php 
		endwhile;
		endif;
	?>

</ul>


<?php get_footer(); ?>

