<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

<?php 
$color = get_field('page_colour');
$form_active = get_field('form_activated');
$hide_title = get_field('hide_title'); 
$number_pos = get_field('tel_num_position');
//echo '<pre>';print_r($brochure);echo '</pre>';
?>	

	<?php if ( has_post_thumbnail() ) { ?>
	<?php include (STYLESHEETPATH . '/_/inc/pages/page-wide-feat-img.php'); ?>
	<?php } ?>
	
	<!-- MAIN CONTENT START -->
	<div class="container-fluid">
	
		<div class="content">

			<?php 
			$related_pages = get_field('page_links'); 
			$hide_title = get_field('hide_title'); 
			?>	
			 <main class="page-col-<?php echo (!empty($color)) ? $color : 'red'; ?> animated fadeIn">
	
				<article <?php post_class(); ?>>
					
					<?php if ($hide_title != 1) { ?>
						<h1><?php the_title(); ?></h1>
					<?php } ?>
					
					<div class="main-txt">
					<?php the_content(); ?>
					</div>
					
					<?php if ($form_active) : 
					$form = get_field('form');	
					?>
					<div class="contact-form">
						<div class="well well-lg">
						<?php gravity_form($form->id, false, false, false, null, true); ?>	
						</div>		
					</div>	
					
					<?php endif; ?>
					
				</article>
			 	
			 </main>


		</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->
						
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
