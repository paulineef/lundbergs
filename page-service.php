<?php get_header(); ?>
<main>
	<div class="bigCont">
		<div id="omOss">
			<div id="serviceImg"></div> 
		</div>
		<div id="serviceContainer">
			<h1 id="serviceHead"> <?php the_title();?> </h1>
			<?php if(have_posts()):
					while(have_posts()):
						the_post();
						?>
						<div id="serviceContentContainer">
							<?php the_content(); //echo out the content of the about us page?>
						</div>
						
						<div class="faqContainer"> 
							<h1 id="faqHead"> FAQ </h1>
							<?php get_template_part('partials/posttype_faq'); //get the content from file faq ?>
						</div>
						<?php
					endwhile; 
				endif;
			?>
		</div>
	</div>
</main>
<?php get_footer(); ?>