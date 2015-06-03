<?php 
/*
Template Name: Feedback page template
*/
 ?>

<?php get_header(); ?>
				
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	
	<?php
	$feedback_args = array(
		'posts_per_page'   => 10,
		'post_type' => 'tlw_testimonial_cpt',
		'orderby'          => 'rand',
	); 
	$feedback_quotes = get_posts($feedback_args); 
	$freephone_num = get_field('freephone_num', 'option');
	$color = get_field('page_colour');
	$page_icon = get_field('page_icon');
	$hide_title = get_field('hide_title'); 
	
	if (!$page_icon) {
	$page_icon = get_field('page_icon', $post->post_parent);
	}
	//echo '<pre>';print_r($feedback_quotes);echo '</pre>';
	?>
	
	<?php if ( has_post_thumbnail() ) { ?>
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
								<div class="service-tag no-img"><?php echo get_the_title(); ?></div>
								<?php } ?>
									
							</header>	
							
							<div class="main-txt">
							<?php the_content(); ?>
							</div>
							
						</div>
							
						<?php include (STYLESHEETPATH . '/_/inc/feedback/feedback-quotes-list.php'); ?>
													
						
						<?php get_template_part( 'parts/sidebars/sidebar', 'feedback' ); ?>
							
					</article>
					
			</main>

		</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->
		
	<?php endwhile; ?>
	<?php endif; ?>


<?php get_footer(); ?>
