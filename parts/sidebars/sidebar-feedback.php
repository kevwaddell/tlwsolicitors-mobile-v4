<?php
if ($post->post_parent == 0) {
$post_ID = $post->ID;
} else {
$post_ID = $post->post_parent;	
}	

$child_args = array(
'sort_column' => 'menu_order',
'echo' => 0,
'child_of'	=> $post_ID,
'title_li'	=> ''
); 
$children = wp_list_pages($child_args);

$custom_sat_active = get_field('custom_sat_active', 'option');
?>

<aside class="sidebar">
	
	<div class="menu-collapse closed">
	<a name="sb-menu-collapse" id="sb-menu-collapse"></a>
	<button class="sb-menu-btn btn btn-default btn-block"><?php echo get_the_title($post_ID); ?> menu</button>
		<ul class="list-unstyled menu-links">
			
			<li<?php echo ($post->post_parent == 0) ? ' class="current_page_item"':''; ?>><a href="<?php echo get_permalink($post_ID); ?>"><?php echo get_the_title($post_ID); ?></a></li>
			
			<?php if (!empty($children)) { ?>
			<?php echo $children; ?>	
			<?php } ?>
		
		</ul>
	
	</div>
		
		<?php if ($custom_sat_active) {
	$custom_sat_year = get_field('custom_sat_year', 'option');	
	$custom_sat_download = get_field('custom_sat_download', 'option');		
	?>
	<div class="striped-box">
		<div class="customer-sat-header">
			Client Care Feedback <?php echo $custom_sat_year; ?>
		</div>
		<a href="<?php echo $custom_sat_download; ?>" class="btn btn-default btn-block" target="_blank" title="View report"><i class="fa fa-pie-chart fa-lg"></i>View report</a>
	</div>
	<?php } ?>	
</aside>