<?php 
$freephone_num = get_field('freephone_num', 'option');
	
$topics_args = array(
	'taxonomy'           => 'category'
	);

$topics = get_categories($topics_args);

global $show_feat_img;
?>
<aside class="sidebar sb-single">

	<?php 
	$gallery_imgs = get_field('gallery_imgs');
	
	if ($gallery_imgs) { 
	
	//echo '<pre>';print_r($gallery_imgs);echo '</pre>';	
		
	?>
	<div class="sidebar-block border-top-red">
		<h3 class="icon-header">Image Gallery <i class="fa fa-arrow-circle-down fa-lg"></i></h3>
		<ul class="list-unstyled img-links clearfix">
	<?php foreach( $gallery_imgs as $gallery_img ): 
			if ($gallery_img['alt']) {
			$alt = $gallery_img['alt'];
			}	
			?>
			<li>
				<a href="<?php echo $gallery_img['sizes']['medium']; ?>" rel="fancybox" class="zoomable">
					<img src="<?php echo $gallery_img['sizes']['gallery-img']; ?>" class="img-responsive" width="<?php echo $gallery_img['sizes']['gallery-img-width']; ?>" height="<?php echo $gallery_img['sizes']['gallery-img-height']; ?>"<?php echo ($alt) ? ' alt="'.$alt.'"': ''; ?>>
				</a>
			</li>
	<?php endforeach; ?>
		</ul>
	</div>

	<?php } ?>

	
	<div id="search-form" class="post-search single">
		<?php get_search_form(); ?>
	</div>

	<?php if ($topics) { ?>
	<?php include (STYLESHEETPATH . '/_/inc/posts/cats-dropdown.php'); ?>
	<?php }  ?>
	
	<?php include (STYLESHEETPATH . '/_/inc/sidebar/sb-btns.php'); ?>
	
	
	<p class="tel-num">Call us <span>free <a href="tel:<?php echo str_replace(' ', '', $freephone_num); ?>" onclick="ga('send', 'event','Freephone click', 'tap', '<?php echo $post->post_title; ?> - Call back')" title="Call us now"><?php echo $freephone_num; ?></a></span></p>
			
</aside>