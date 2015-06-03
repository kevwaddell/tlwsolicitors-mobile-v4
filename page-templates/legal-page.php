<?php 
/*
Template Name: Legal pages template
*/
?>
<?php get_header(); ?>
	<!-- MAIN CONTENT START -->
	<div class="container-fluid">
	
		<div class="content">

			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
			<?php 
			$intro = get_field('intro');
			$related_pages = get_field('page_links'); 
			$hide_title = get_field('hide_title');
			
			$children_args = array(
				'sort_column' => 'menu_order',
				'hierarchical' => 0,
				'post_type' => 'page'
			);
			
			if ($post->post_parent == 0) {
			$children_args['parent'] = $post->ID;
			} else {
			$children_args['parent'] = $post->post_parent;	
			}
			
			$children = get_pages($children_args);	
			
			//echo '<pre>';print_r($children);echo '</pre>';
			
			?>	
			<main class="page-col-red animated fadeIn">
				 	
						<article <?php post_class(); ?>>
							
							<?php if ($hide_title != 1) { ?>
								<h1><?php the_title(); ?></h1>
							<?php } ?>

							<div class="main-txt">
							<?php the_content(); ?>							
							</div>
							
						</article>
						
						<?php if (!empty($children)) { ?>
				 			
				 			<ul class="bottom-page-links list-unstyled clearfix">
				 				
				 			<?php foreach ($children as $child) { ?>
				 				
				 				<li><a href="<?php echo get_permalink($child->ID); ?>" title="<?php echo $child->post_title; ?>"><?php echo $child->post_title; ?></a></li>
				 			<?php } ?>
				 				
				 			</ul>
				 		
				 		<?php }  ?>
			 	
			</main>
					
			<?php endwhile; ?>
			<?php endif; ?>

		</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->

<?php get_footer(); ?>
