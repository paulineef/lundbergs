<?php 
	$terms = get_terms(
		array(
			'taxonomy' => 'kategori',
			'hide_empty' => true, 
		)
	);
?>	
<div id="catCon">
	<?php foreach ($terms as $value) { //loop through the taxonomy array?>
		<div class="cont">
			<span class="types">
				<a href="/kategori/<?php echo $value->slug?>#categoryId"><h3><?php echo $value->name ?></a>
			</span>
		</div>
	<?php } ?>
</div>