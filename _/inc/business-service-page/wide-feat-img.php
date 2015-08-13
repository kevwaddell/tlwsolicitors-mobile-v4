<?php
global $color;
global $page_icon;
?>
<figure class="feat-img-wide for-biz">
	<?php add_wide_feat_img($img_post) ; ?>
	<div class="striped-overlay"></div>
	<?php if ($page_icon) { ?>
	<i class="pg-icon fa <?php echo $page_icon; ?>"></i>
	<?php } ?>
</figure>