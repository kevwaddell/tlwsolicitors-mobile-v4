<?php
global $color;
global $page_icon;
?>
<figure class="feat-img-wide img-col-<?php echo (!empty($color)) ? $color : 'red'; ?>">
	<?php add_wide_feat_img($img_post) ; ?>
	<div class="col-overlay"></div><div class="striped-overlay"></div>
	<?php if ($page_icon) { ?>
	<i class="pg-icon fa <?php echo $page_icon; ?>"></i>
	<?php } ?>
</figure>