<!-- gets the header and include it by default -->
<?php get_header(); ?>

<div id="welcome">
	<h2>
		Svensktillverkad </br> avfallshantering </br> sedan 1869
	</h2>

	<!-- arrow with bouncing effect in css -->
	<div class="arrow">
		<a href="#content">
			<div class="arrowImg"></div>
		</a>
	</div>

</div>
<div id="content">

	<!-- Another way that you can include a script,
	but will throw a PHP fatal error if the file isn’t found. 	 -->
	<?php require 'nyheter.php' ?>
</div>

<!-- gets the footer and include it by default -->
<?php get_footer(); ?>

<!-- javascript smooth scroll when clicking arrow -->
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
