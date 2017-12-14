<!-- the page after picked what category in Sortiment -->
<!-- gets the header and include it by default -->
<?php get_header(); ?>

<main class="indexMain">
	<div class="bigCont" style="background-image: url('img/gran.png');">
		
		<?php

			//get all the terms inside of the taxonomy Kategori
			$terms = get_terms(
				array(
					'taxonomy' => 'kategori',
					'hide_empty' => true 
				)
			);
		?>	
		<div class="categories">
			<div class="category">

				<!-- Displays or returns the term title for the current page.  -->
				<h1><?php single_term_title(); ?></h1>
				<ul class="productUl">
					
					<!-- if there is  any posts  -->
					<?php if(have_posts()):

							// and while there's posts
							while(have_posts()):

								// display posts
								the_post();
					?>		
							<li>
								<a href='<?php the_permalink()//link to single page?>'>
									<div class="productImg"><?php the_post_thumbnail(); //dispaly image ?></div>
									 <?php the_title();//displays the title ?>
								</a>
							</li>
							
					<?php
							endwhile; 
						endif;
					?>
				</ul>
			</div>
		</div>
	</div>
</main>
<?php get_footer();?>