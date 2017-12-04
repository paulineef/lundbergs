<?php get_header(); ?>

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
		<p>
			Lorem ipsum dolor sit amet, ad per agam nemore perpetua, meis placerat perfecto qui in, per quod lorem impedit et. Nam in vocibus ponderum omittantur, ad quo doming alienum. In congue scripserit vim, veri liber pertinax ei cum, te diam purto quo. An vide posse principes pri.

			Ut malorum admodum ullamcorper sit, at simul saepe sed. Duo iudico alterum te, no pro dolore persius complectitur, quo dico graece efficiantur ex. Quo summo elitr oporteat ad. Sed nemore propriae at, meis delenit debitis ea sea, te diceret liberavisse mei. Facer deseruisse disputando ei sit. Nibh quidam est ea, eu mea eruditi definitiones.

			An dicam oblique qui, ei sea ridens recteque. Mea errem ullamcorper vituperatoribus et, ad ius unum choro tantas, an velit audiam persecuti qui. At has doming discere probatus, modus postulant scriptorem qui at. Pro detracto senserit et, vero omnium eripuit pri no. Mea utinam referrentur ut.

			Nostro iriure vituperata an cum, sit eu vidit vidisse. Qui at quas invenire iracundia, an voluptatum reprimique vix, cu idque dicunt mentitum his. Eam in mundi dicant, vel ne repudiare suscipiantur. Id has dolore legimus, cum an liber inermis, vim cu rebum mundi audire.

			Cu duo sumo deserunt posidonium, commune mentitum te eum. Cum erroribus interesset te, ei case maiorum nam. Dicunt admodum consulatu ea mel, legendos inimicus voluptaria id his. Eligendi adipisci suavitate vim eu. Percipit theophrastus at cum, alienum patrioque vis an.
		</p>
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