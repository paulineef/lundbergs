<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<header>
	<div id="headerMenu" class="menu"><?php wp_nav_menu(); ?></div>
	<i id="menu" class="fa fa-bars" aria-hidden="true"></i>
	</header>
<script>
$(document).ready(function() {					// makes sure code does not execute until entire DOM is loaded
			$("#burger").click(function(){
			$("#headerMenu").toggleClass('open');
			});
})
</script>