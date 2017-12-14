<!-- the page after picked what category in Sortiment -->
<!-- gets the header and include it by default -->
<?php get_header(); ?>

<main class="indexMain">
	<div class="bigCont" style="background-image: url('img/gran.png');">
		
		<?php
			$terms = get_terms(
				array(
					'taxonomy' => 'kategori',
					'hide_empty' => true 
				)
			);
		?>	
		<div class="categories">
			<div class="category">
				<h1><?php single_term_title(); ?></h1>
				<ul class="productUl">
					<?php if(have_posts()):
							while(have_posts()):
								the_post();
					?>		
							<li>
								<a href='<?php the_permalink()//link to single page?>'>
									<div class="productImg"><?php the_post_thumbnail(); //echo out image ?></div>
									 <?php the_title();//the_ = echo out ?>
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


<style>
	.bigCont {
		background-repeat: no-repeat;
		min-height: 90vh;
		overflow: hidden;
	}
	.categories {
		overflow: hidden;
		box-sizing: border-box;
		width: 80%;
		margin: 0px auto 100px auto;
		background: #fff;
	}

	.category {
		margin: 100px auto;
		padding: 0px 50px;
	}

	.category h1 {
		margin-bottom: 30px;
	}

	.category ul {
		display: flex;
		flex-direction: column;
		justify-content: center;
		padding: 0px;
		margin: 0px;
	}

	.category li:hover {
		opacity: 0.8;
		-webkit-transition: all 0.2s; 
			-moz-transition: all 0.2s; 
			-ms-transition: all 0.2s; 
			-o-transition: all 0.2s; 
			transition: all 0.2s;
	}

	.category li {
		margin: 0px;
	}

	.category li a {
		color: #57828C;
		font-size: 14pt;
	}

@media(min-width: 500px){

}

@media (min-width: 1024px){
	.bigCont {
		background-size: 200%;
	}

	.category {
		margin: 150px auto;
		padding: 0px 100px;
	}

	.category ul {
		display: flex;
		justify-content: flex-start;
		flex-flow: row wrap;
	}

	.category li {
		margin-bottom: 30px; 
		margin-right: 30px;
	}
	
}
</style>
