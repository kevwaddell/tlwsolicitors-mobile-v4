<?php
global $how_it_works_active;
global $links;
?>
<aside class="sidebar">
	
	<?php if ($how_it_works_active) { ?>	
	<div class="how-it-works-link">
		<a href="#how-it-works" class="hiw-link">
			<span class="txt-mid">The Claims Process</span>
			<span class="txt-lg">How it Works</span>
			<span class="txt-sml">Click here for more information</span>
		</a>
	</div>
	<?php } ?>
	
	<?php if (!empty($links)) { ?>
	<button class="sb-menu-btn service-menu-btn btn btn-default btn-block">Services Menu</button>
	<?php } ?>	
	
</aside>