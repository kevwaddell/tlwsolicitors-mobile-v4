<?php
global $color;
global $page_icon;
?>
<figure class="banner-img-wide img-col-<?php echo (!empty($color)) ? $color : 'red'; ?>" style="background-image: url(<?php add_banner_feat_img($post);?>)">
	<div class="col-overlay"></div><div class="striped-overlay"></div>
	<?php if ($page_icon) { ?>
	<i class="pg-icon fa <?php echo $page_icon; ?> fa-2x"></i>
	<?php } ?>
</figure>	