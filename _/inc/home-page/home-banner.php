<?php 
$main_hp_banner_active = get_field('main_hp_banner_active', 'option');	
$banner_links = get_field('main_banner_links', 'option');	
?>

<?php if ($main_hp_banner_active && !empty($banner_links)) { ?>

<section id="main-home-banner">
	<?php foreach ($banner_links as $link) { 
	$pg_id = $link['page_link'];
	$pg_title = $link['page_title'];
	$pg = get_post($pg_id);
	$col = get_field('page_colour', $pg_id);
	$icon = get_field('page_icon', $pg_id);
	$img = get_bloginfo('stylesheet_directory')."/_/img/banner-img-" .$pg->post_name. ".png";
	//echo '<pre>';print_r($icon);echo '</pre>';
	?>
		<div id="banner-item-" class="banner-item col-<?php echo $col; ?>">
			<a href="<?php echo get_permalink($pg_id); ?>" title="<?php echo $pg->post_title; ?>">
				<span class="img" style="background-image: url(<?php echo $img; ?>)"><span class="img-overlay"></span></span>
				<span class="title">
					<?php echo $pg_title; ?>
					<span class="icon"><i class="fa <?php echo $icon; ?> fa-2x"></i></span>
				</span>
			</a>
		</div>
	<?php } ?>
	
</section>

<?php }  ?>

