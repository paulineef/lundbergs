<!DOCTYPE html>
<script src="https://use.fontawesome.com/1baea3ea6f.js"></script>
	<html>
		<head>
			<meta charset="UTF-8">
			<!-- <meta name="viewport" content="width=device=width, initial-scale=1.0"> -->
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"/>
			<title><?php //bloginfo('name')?></title>

			<?php wp_head(); ?>
		</head>
		<body>

			<!-- gets the siteheader template part and include it by default, in our case, mainmenu-->
			<?php get_template_part('partials/sitehead'); ?>
			
</body>
