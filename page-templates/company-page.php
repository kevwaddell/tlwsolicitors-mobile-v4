<?php 
/*
Template Name: Company page template
*/
 ?>

<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

<?php 
$freephone_num = get_field('freephone_num', 'option');
$page_icon = get_field('page_icon');
$color = get_field('page_colour');
$hide_title = get_field('hide_title'); 
//echo '<pre>';print_r($brochure);echo '</pre>';
	if ($page_icon == 'null' || !$page_icon) {
	$page_icon = get_field('page_icon', $post->post_parent);
	}

	if ( has_post_thumbnail() ) {
	$img_post = get_the_ID();
	} else {
	$img_post = $post->post_parent;
	$parent = get_post($img_post);	
	
		if (!has_post_thumbnail($img_post) && $parent->post_parent != 0) {
		$img_post = $parent->post_parent;
		}
	}
	
	//echo '<pre>';print_r($img_post);echo '</pre>';
?>	
	<?php if ( has_post_thumbnail($img_post)  ) { ?>
	<?php include (STYLESHEETPATH . '/_/inc/pages/page-wide-feat-img.php'); ?>
	<?php } ?>

	<!-- MAIN CONTENT START -->
	<div class="container-fluid">
	
		<div class="content">

			<main class="page-col-red animated fadeIn">
				
					<article <?php post_class(); ?>>
				
						<div class="entry wide-entry">
						
							<header class="pg-header">
								
								<?php if ($hide_title == 1) { ?>
								<div class="service-tag"><?php echo get_the_title(); ?></div>
								<?php } ?>
		
								<?php if ($hide_title != 1) { ?>
								<h1><?php the_title(); ?></h1>
								<?php } ?>
								
							</header>
							
							<div class="main-txt">
							<?php the_content(); ?>
							</div>
							
															
							<footer class="footer-pg-info">
							 <p class="tel-num">Call us <span>free <a href="tel:<?php echo str_replace(' ', '', $freephone_num); ?>" onclick="ga('send', 'event','Freephone click', 'tap', '<?php echo $post->post_title; ?> - Call back')" title="Call us now"><?php echo $freephone_num; ?></a></span></p>
							</footer>
							
						</div>
						
						<?php get_template_part( 'parts/sidebars/sidebar', 'company' ); ?>
							
					</article>
					
			</main>


		</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->
						
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
