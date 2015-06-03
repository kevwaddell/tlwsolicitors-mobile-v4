<?php 
/*
Template Name: TLW Personal home page
*/
 ?>

<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
	
	<?php include (STYLESHEETPATH . '/_/inc/for-you-home-page/personal-home-banner.php'); ?>	
	
	<!-- MAIN CONTENT START -->
	<div class="container-fluid">
	
		<div class="content">

			<?php include (STYLESHEETPATH . '/_/inc/for-you-home-page/vars.php'); ?>	
			
			<main class="animated fadeIn">
			

				<article <?php post_class(); ?>>
				
				<?php include (STYLESHEETPATH . '/_/inc/for-you-home-page/home-intro.php'); ?>
				
				<div class="rule"></div>
				
				<?php if ($services_selects) { 	?>
				
				<?php include (STYLESHEETPATH . '/_/inc/for-you-home-page/start-enquiry-form.php'); ?>
				
				<div class="rule"></div>
				<?php }  ?>
				
				<?php include (STYLESHEETPATH . '/_/inc/for-you-home-page/latest-campaigns.php'); ?>		
				
				<div class="rule"></div>
				
				<?php if ($feedback_active) { ?>
				<?php include (STYLESHEETPATH . '/_/inc/for-you-home-page/quotes.php'); ?>
				<?php }  ?>

				
				</article>
				
			</main>


		</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->
			
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
