<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

	<?php include (STYLESHEETPATH . '/_/inc/home-page/home-banner.php'); ?>	
	
	<!-- MAIN CONTENT START -->
	<div class="container-fluid">
	
		<div class="content">

			<?php include (STYLESHEETPATH . '/_/inc/home-page/vars.php'); ?>	
			
			<main class="animated fadeIn">
			
				
				<article <?php post_class(); ?>>
				
				<?php include (STYLESHEETPATH . '/_/inc/home-page/home-intro.php'); ?>
				
				<div class="rule"></div>
				
				<?php if ($services_4u) { 	?>
				
				<?php include (STYLESHEETPATH . '/_/inc/home-page/start-enquiry-form.php'); ?>

				<?php }  ?>
								
				</article>
				
			</main>


		</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->
			
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
