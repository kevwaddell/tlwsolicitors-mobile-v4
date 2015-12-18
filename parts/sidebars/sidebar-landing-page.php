<?php
global $color;
global $form;
global $form_active;
?>
<aside class="sidebar lp-sidebar">
	 		<?php if ($form_active) : ?>
		 	<div class="lp-form lp-form-<?php echo (!empty($color)) ? $color : 'red'; ?>">
	
			 	<h3>Make your claim today <i class="fa fa-arrow-circle-down fa-lg"></i></h3>
	
			 	<?php gravity_form($form->id, false, true, false, null, true); ?>
				
		 	</div>	
	 	<?php endif; ?>
	 	</aside>
