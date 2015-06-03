<?php
global $color;
?>
<figure class="banner-img-wide img-col-<?php echo (!empty($color)) ? $color : 'red'; ?>" style="background-image: url(<?php add_banner_feat_img($post);?>)">
	<div class="col-overlay"></div><div class="striped-overlay"></div>
</figure>	