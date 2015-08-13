<?php
global $how_it_works_active;
$parent = get_page($post->post_parent);

//echo '<pre>';print_r($parent->post_parent);echo '</pre>';

if ($parent->post_parent == 0) {
$post_ID = $post->post_parent;
} else {
$post_ID = $parent->post_parent;	
}	
//$post_ID = $post->ID;

$child_args = array(
'sort_column' => 'menu_order',
'parent'	=> $post_ID
); 

$children = get_pages($child_args);
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
	
	<?php if (!empty($children)) { ?>
	<div class="menu-collapse closed">
	<a name="sb-menu-collapse" id="sb-menu-collapse"></a>
	<button class="sb-menu-btn btn btn-default btn-block">Services Menu</button>
		<ul class="list-unstyled menu-links">
			
			<li class="page-item page-item-<?php echo $post_ID; ?><?php echo ($post->post_parent == 0) ? ' current_page_item':''; ?>"><a href="<?php echo get_permalink($post_ID); ?>"><?php echo get_the_title($post_ID); ?></a></li>
			
			
			<?php foreach ($children as $child) { 
			$g_child_args = array(
			'sort_column' => 'menu_order',
			'parent'	=> $child->ID
			); 

			$g_children = get_pages($g_child_args);
			?>
			<li class="page_item page-item-<?php echo $child->ID; ?><?php echo ($post->ID == $child->ID) ? ' current_page_item':''; ?><?php echo (!empty($g_children)) ? ' page_item_has_children':''; ?><?php echo (!empty($g_children) && ($post->post_parent == $child->ID || $post->ID == $child->ID) ) ? ' view-children':' hide-children'; ?>">
				<a href="<?php echo get_permalink($child->ID); ?>"><?php echo get_the_title($child->ID); ?></a>
				
				<?php if (!empty($g_children)) { ?>
					<ul class="children">
						<li class="page_item page-item-<?php echo $child->ID; ?>"><?php echo ($post->ID == $child->ID) ? ' current_page_item':''; ?><a href="<?php echo get_permalink($child->ID); ?>">Overview</a></li>
						<?php foreach ($g_children as $g_child) { ?>
						<li class="page_item page-item-<?php echo $g_child->ID; ?><?php echo ($post->ID == $g_child->ID) ? ' current_page_item':''; ?>"><a href="<?php echo get_permalink($g_child->ID); ?>"><?php echo get_the_title($g_child->ID); ?></a></li>
						<?php } ?>
					</ul>
				<?php } ?>
			</li>
			<?php } ?>	
			
		
		</ul>
	
	</div>
	<?php } ?>	
				
</aside>