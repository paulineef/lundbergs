<?php get_header(); 

    $nyhet_query = new WP_Query(
    	array(
        'post_type' => 'nyhet',
        'orderby' => 'title',
        'order' => 'ASC',
        'posts_per_page' => '3'));
?>

<div id="welcome">
	<h2>
		Svensktillverkad </br> avfallshantering </br> sedan 1896
	</h2>
	<div id="arrow">
		<a href="#history">
			<div id="arrowImg"></div>
		</a>
	</div>

</div>
<div id="content">
	<div id="history">
		<div>
			<?php 
		//	if ($nyhet_query->have_posts()) : while ($nyhet_query->have_posts() ) : the_post(); ?>
                <h2><?php// the_title();?></h2>
                <p><?php// the_content(); ?></p>
           
            <?php //endwhile; endif; 
        	?>
            
		</div>
	</div>
</div>
<?php get_footer(); ?>

<script>
	$(document).ready(function(){
	  // Add smooth scrolling to all links
	  $("a").on('click', function(event) {

		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
		  // Prevent default anchor click behavior
		  event.preventDefault();

		  // Store hash
		  var hash = this.hash;

		  // Using jQuery's animate() method to add smooth page scroll
		  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		  $('html, body').animate({
			scrollTop: $(hash).offset().top
		  }, 800, function(){

			// Add hash (#) to URL when done scrolling (default click behavior)
			window.location.hash = hash;
		  });
		} // End if
	  });
	});
</script>
