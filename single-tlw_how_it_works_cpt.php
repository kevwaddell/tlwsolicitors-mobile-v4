<?php get_header(); ?>
	<!-- MAIN CONTENT START -->

	
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	
	<div class="container-fluid">
	
		<div class="content">

			<main class="page-col-red animated fadeIn">
				
				<article <?php post_class(); ?>>
					
						<div class="entry">
							
							<header class="pg-header">										
								<h1><?php the_title(); ?></h1>
							</header>
			
							<div class="how-it-works-single">
							
							</div>
							
						</div>
					
				</article>
				
			</main>


		</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->
				
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
