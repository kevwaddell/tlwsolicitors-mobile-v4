<?php 
/*
Template Name: Newsletter sign up template
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<!-- MAIN CONTENT START -->
	<div class="container-fluid">
	
		<div class="content">


			<?php 
			$form = get_field('form');
			$hide_title = get_field('hide_title'); 
			 ?>	
			 <main class="page-col-red animated fadeIn">
		 	
				<article <?php post_class(); ?>>
					<?php if ($hide_title != 1) { ?>
						<h1><?php the_title(); ?></h1>
					<?php } ?>
					
					<div class="main-txt">
					<?php the_content(); ?>
					</div>
					
					<?php if ($form) { ?>
					
					<?php gravity_form($form->id, false, false, false, null, true); ?>
					
					<?php }  ?>
					
				</article>
			 
			 </main>


		</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
