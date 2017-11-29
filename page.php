<main>
		
	<?php 
	//the_post_thumbnail( 'desktop_grid' );
		the_post();
	?>
<div class="aboutCont">
	<h1 class="titlePosts"> <?php// the_title();//the_ = echo out ?></h1>
	<h1>Yohoo</h1>
		
</div>
	<div id="container">
		<div id="textBox"><p>hejhejehjhejhejhe</p></div>
		<div id="me"><?php the_post_thumbnail(); ?></div>
	</div>
	<div id="cont"><?php the_content(); ?></div>
		
</main>