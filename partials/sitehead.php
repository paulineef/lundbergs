<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700" rel="stylesheet">
<header>
	<nav id="menu">
		<div class="toplogomobile"></div>
		<div class="hide">
			<?php wp_nav_menu(); ?>
		</div>
		<div class="toplogo"></div>
		
		<div class="hamburger">&#9776;</div>
 		<div class="cross">&#735;</div>	
	</nav>
</header>
<script>
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