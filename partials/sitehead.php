<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700" rel="stylesheet">
<header>
	<div id="headerMenu" class="menu">
		<!-- Place logo here -->
		<div class="hide">
			<?php wp_nav_menu(); ?>
		</div>
		
		<div class="hamburger">&#9776;</div>
 		<div class="cross">&#735;</div>	
	</div>
	
	<!-- <i class="hamburger" class="fa fa-bars" aria-hidden="true"></i>
	<i class="cross" class="fa fa-times" aria-hidden="true"></i> -->
	</header>
<script>
// 	$(document).ready(function() {					// makes sure code does not execute until entire DOM is loaded
// 		$("#burger").click(function(){
// 		$("#headerMenu").toggleClass('open');
// 	});
// })

$(document).ready(function() {

		$( ".cross" ).hide();

		$( ".hamburger" ).click(function() {
			$( ".hide" ).slideToggle( "normal", function() {
				$( ".hamburger" ).hide();
				$( ".cross" ).show();
			});
		});

		$( ".cross" ).click(function() {
			$( ".hide" ).slideToggle( "normal", function() {
				$( ".cross" ).hide();
				$( ".hamburger" ).show();
			});
		});

});
</script>