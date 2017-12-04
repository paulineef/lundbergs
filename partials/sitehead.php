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
		<div id="nav-icon3">
  				<span></span>
 				<span></span>
  				<span></span>
  				<span></span>
			</div>
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
	
	$("#nav-icon3").click(function(){
			$("#nav-icon3").toggleClass('open');
			$(".hide").toggleClass('open');
			});
	
	$(document).on("scroll", function() {

	if($(document).scrollTop()>100) {
		$("#menu").removeClass("large").addClass("small");
	} else {
		$("#menu").removeClass("small").addClass("large");
	}
	
});
</script>
<style>
	#menu.small #nav-icon3 {
		top: 25px;
		width: 55px;
		height: 40px;
		transition: 0.5s all ease 0s;
	}
	#nav-icon3{
	  width: 65px;
	  height: 50px;
	  position: absolute;
	  right: 32px;
	  top: 35px;
	  -webkit-transform: rotate(0deg);
	  -moz-transform: rotate(0deg);
	  -o-transform: rotate(0deg);
	  transform: rotate(0deg);
	  -webkit-transition: .5s ease-in-out;
	  -moz-transition: .5s ease-in-out;
	  -o-transition: .5s ease-in-out;
	  transition: .5s ease-in-out;
	  cursor: pointer;
	}
	#nav-icon3 span{
	  display: block;
	  position: absolute;
	  height: 6px;
	  width: 100%;
	  background: #ffffff;
	  opacity: 1;
	  left: 0;
	  -webkit-transform: rotate(0deg);
	  -moz-transform: rotate(0deg);
	  -o-transform: rotate(0deg);
	  transform: rotate(0deg);
	  -webkit-transition: .25s ease-in-out;
	  -moz-transition: .25s ease-in-out;
	  -o-transition: .25s ease-in-out;
	  transition: .25s ease-in-out;
	}

	#nav-icon3 span:nth-child(1) {
	  top: 0px;
	}
	#nav-icon3 span:nth-child(2),#nav-icon3 span:nth-child(3) {
	  top: 20px;
	}
	#nav-icon3 span:nth-child(4) {
	  top: 40px;
	}
	#nav-icon3.open span:nth-child(1) {
	  top: 18px;
	  width: 0%;
	  left: 50%;
	}
	#nav-icon3.open span:nth-child(2) {
	  -webkit-transform: rotate(45deg);
	  -moz-transform: rotate(45deg);
	  -o-transform: rotate(45deg);
	  transform: rotate(45deg);
	}
	#nav-icon3.open span:nth-child(3) {
	  -webkit-transform: rotate(-45deg);
	  -moz-transform: rotate(-45deg);
	  -o-transform: rotate(-45deg);
	  transform: rotate(-45deg);
	}
	#nav-icon3.open span:nth-child(4) {
	  top: 18px;
	  width: 0%;
	  left: 50%;
	}
</style>