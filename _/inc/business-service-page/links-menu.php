<?php if (!empty($links)) { ?>

<div class="links-menu closed">
	<div class="links-menu-inner">
		<ul class="list-unstyled">
			
			<?php foreach ($links as $link) { 
			$pg = get_page($link['page_link']);
			$pg_title = str_replace("<br>", " ", $link['link_title']);
			$related_pages = get_field('page_links', $link['page_link']);
			$clr = get_field('page_colour', $link['page_link']);
			$pg_icon = get_field('page_icon', $link['page_link']);
			
			//Load child pages for parent page
			$child_args = array(
			'sort_column' => 'menu_order',
			'parent'	=> $link['page_link']
			); 
			$children = get_pages($child_args);
			?>
			<li class="link-col-<?php echo $clr; ?><?php echo (empty($children)) ? '':' with-children closed'; ?>">
				<a href="<?php echo get_permalink($pg->ID); ?>"<?php echo (empty($children)) ? '':' class="dropdown-link"'; ?>><i class="fa <?php echo $pg_icon; ?> fa-3x"></i></span><?php echo $pg_title; ?></span></a>
				<?php if (!empty($children) || !empty($related_pages)) { ?>
					<ul class="list-unstyled children"> 
						<li><a href="<?php echo get_permalink($pg->ID); ?>"><span>Overview</span></a></li>
						<?php if ($related_pages) { ?>
							<?php foreach ($related_pages as $rel_pg) { ?>
							<li><a href="<?php echo get_permalink($rel_pg['page']->ID); ?>"><span><?php echo $rel_pg['link_title']; ?></span></a></li>
							<?php } ?>
						<?php } ?>
						<?php foreach ($children as $child) { ?>
						<li><a href="<?php echo get_permalink($child->ID); ?>"><span><?php echo get_the_title($child->ID); ?></span></a></li>
						<?php } ?>
					</ul>
				<?php } ?>
			</li>
			
			<?php } ?>	
			
		
		</ul>
	</div>
	<button class="close-btn"><span class="fa fa-times fa-lg"></span></button>
</div>
<?php } ?>

