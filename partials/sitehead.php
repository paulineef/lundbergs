<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700" rel="stylesheet">
<header>
	<nav id="menu" class="large">
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
	
	$(document).on("scroll", function() {

	if($(document).scrollTop()>100) {
		$("#menu").removeClass("large").addClass("small");
	} else {
		$("#menu").removeClass("small").addClass("large");
	}
	
});
</script>