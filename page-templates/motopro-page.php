<?php 
/*
Template Name: MotoPro page template
*/
 ?>

<?php get_header(); ?>

	
	<?php include (STYLESHEETPATH . '/_/inc/motopro/img-strip.php'); ?>

	<!-- MAIN CONTENT START -->
	<div class="container-fluid">
	
		<div class="content">

			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
			<?php 
			$page_icon = get_field('page_icon');
			$color = get_field('page_colour');
			$hide_title = get_field('hide_title');
			//echo '<pre>';print_r($parent);echo '</pre>';
			?>	
			<main class="<?php echo (!empty($color)) ? 'page-col-'.$color : 'red'; ?>">
				
					<article <?php post_class(); ?>>
				
						<div class="entry wide-entry">
							
							<div class="mp-info">
								<div class="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/_/css/img/motopro-logo.png" alt="MotoPro - Motoring Law Experts"></div>
							</div>

						
							<header class="pg-header">	
								<?php if ($hide_title != 1) { ?>
								<h1 class="text-center"><?php the_title(); ?></h1>
								<?php } ?>
							</header>
						
							<div class="main-txt">
								<?php the_content(); ?>
							</div>
						
						</div>
					
					<?php get_template_part( 'parts/sidebars/sidebar', 'motopro' ); ?>
							
						
					</article>
					
			</main>
			
			<?php endwhile; ?>
			<?php endif; ?>

		</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->

	<?php include (STYLESHEETPATH . '/_/inc/motopro/icon-strip.php'); ?>
	
<?php get_footer(); ?>
