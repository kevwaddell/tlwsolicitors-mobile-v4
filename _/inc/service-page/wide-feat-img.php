<?php
global $color;
?>
<figure class="feat-img-wide img-col-<?php echo (!empty($color)) ? $color : 'red'; ?>">
	<?php add_wide_feat_img($post) ; ?>
	<div class="col-overlay"></div><div class="striped-overlay"></div>
</figure>