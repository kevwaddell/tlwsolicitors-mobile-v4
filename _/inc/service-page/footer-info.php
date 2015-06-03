<?php 
$contact_page = get_page_by_title('Contact us');	
?>

<footer class="footer-pg-info">
	
	<?php if ($number_pos == 'bottom') { ?>					
	<p class="tel-num">Call us <span>free <a href="tel:<?php echo str_replace(' ', '', $freephone_num); ?>" onclick="ga('send', 'event','Freephone click', 'tap', '<?php echo $post->post_title; ?> - Call back')" title="Call us now"><?php echo $freephone_num; ?></a></span></p>
	<?php } ?>
	
	<a href="<?php echo get_permalink($contact_page->ID); ?>" class="btn btn-default btn-block go-to-link" title="Request a callback">Request a callback</a>

	<?php if (!empty($brochure)) { ?>
	<a href="<?php echo $brochure ; ?>" target="_blank" class="btn btn-default btn-block download-link" title="Download our Brochure">Download our Brochure</a>
	<?php } ?>
	
	<?php 
	$dep_head_active = get_field('dep_head_active');
	$dep_head = get_field('head_of_dep');
	if ($post->post_parent != 0 && !$dep_head_active) {
	$dep_head_active = get_field('dep_head_active', $post->post_parent);	
	$dep_head = get_field('head_of_dep', $post->post_parent);
	}
	$staff = get_post($dep_head);
	$department = get_field('departments', $dep_head);
	$email = get_field('email', $dep_head);
	$profile_img = get_field('profile_img', $dep_head);
	$content = apply_filters('the_content', $staff->post_content);
	?>
	
	<?php if ($dep_head_active) { ?>
	<div class="dep-head">
		<h3 class="icon-header">Head of department<i class="fa fa-user fa-lg"></i></h3>
		<div class="dep-head-content">
		<figure class="profile-img">
			<img src="<?php echo $profile_img['sizes']['thumbnail']; ?>" width="<?php echo $profile_img['sizes']['thumbnail-width']; ?>" height="<?php echo $profile_img['sizes']['thumbnail-height']; ?>" alt="<?php echo $profile_img['title']; ?>">
		</figure>
		<p class="name"><?php echo $staff->post_title; ?></p>
		
		<?php echo $content; ?>
		
		<a href="mailto:<?php echo $email; ?>" title="Email: <?php echo $staff->post_title; ?>"><i class="fa fa-envelope"></i> <?php echo $email; ?></a>
		</div>
	</div>
	<?php } ?>
</footer>
