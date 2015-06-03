<?php if ($positions) { ?>

<!-- TEAM PROFILES SECTION -->
<section id="team-profiles" class="page-content">
			
	<?php foreach ($positions as $position) : 
	setup_postdata($post);
	$panels_counter++;
	
	$team_args = array (
	'posts_per_page'   => -1,
	'tlw_positions_tax' => $position->slug,
	'orderby'          => 'menu_order',
	'order'            => 'ASC',
	'post_type'        => 'tlw_team_cpt',
	);
	
	$profiles = get_posts($team_args);
	//echo '<pre>';print_r($profiles);echo '</pre>';
	?>

	<div class="team-list" id="<?php echo $position->slug; ?>">
	
	<h3 class="icon-header">	
		<?php echo $position->name; ?>
		<?php if ($page_icon) { ?>
		<i class="fa <?php echo $page_icon; ?> fa-lg"></i> 
		<?php } ?>
	</h3>
	
		<?php if ($profiles) { ?>
		
		<?php foreach ($profiles as $post) : 
			setup_postdata($post);
			$position = get_field('position');
			$email = get_field('email');
			$departments = get_field('departments');
			$profile_img = get_field('profile_img');
			//echo '<pre>';print_r($departments);echo '</pre>';
			?>
			
			<div class="team-list-box">
						
				<figure class="profile-img">
					<img src="<?php echo $profile_img['sizes']['thumbnail']; ?>" width="<?php echo $profile_img['sizes']['thumbnail']; ?>" height="<?php echo $profile_img['sizes']['thumbnail']; ?>" alt="<?php echo $profile_img['title']; ?>">
				</figure>
		
				<h4><?php the_title(); ?></h4>
				
				<?php if ( isset($email) ) { ?>
				<a href="mailto:<?php echo $email; ?>" title="<?php the_title_attribute( array( 'before' => 'Send an email to: ', 'after' => '' ) ); ?>" class="email-link"><?php echo $email; ?></a>
				<?php }  ?>	
			
				<?php if ( $position ) { ?>
				<p class="position"><?php echo $position; ?></p>
				<?php }  ?>	
				
				<div class="txt">
					<?php the_content(); ?>
				</div>
				
				<?php if ( isset($departments) ) { ?>
				<div class="btns-wrap">
				
					<?php foreach ($departments as $dep) { 
					$department = get_post($dep);	
					?>
					<a href="<?php echo get_permalink($department->ID); ?>" class="icon-btn btn btn-default btn-block" title="<?php echo $department->post_title; ?> Services">
					<?php echo $department->post_title; ?> Services 
					</a>
					<?php } ?>
				
				</div>
				<?php }  ?>	
				
			</div>
			
			<div class="rule"></div>
			
		<?php endforeach;
			wp_reset_postdata();
			?>	
			
		<?php } ?>
		
	</div>

	
	<?php endforeach; ?>

</section>
<!-- TEAM PROFILES SECTION -->

					<?php } ?>