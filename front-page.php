<?php get_header(); ?>

<h1><a href="<?php the_permalink(); ?>"></a><?php the_title();//the_ = echo out ?></h1> 

	<?php 
		$args = array(
			'post_type'       =>  'produkter',
			'post_per_page' => -1, //-1 = all the projects
			/*'tax_query'       => array(
				array(
				'taxonomy'    => 'project_type',     //your custom taxonomy
				'field'       => 'slug',             //Select term by ('id' or 'slug')
				'terms'       => 'web-site',         //string or array of terms to include
				),
			),*/
		);

		$produkt_query = new WP_Query($args);
	?>
	<div id="gridContainer">
		<?php 	
			if( have_posts() ) {
				while ( have_posts() ){
					the_post(); 
					the_content(); 
					the_post_thumbnail( 'desktop_grid' );
					?>
											<h2><a href=" <?php the_permalink(); ?>"><?php the_title();//the_ = echo out //the top headline?></a></h2>  

					<?php	
				}
			}
		?>
	</div>


