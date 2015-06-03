<?php get_header(); ?>
	<!-- MAIN CONTENT START -->
<div class="content for-posts-list">

	<?php
	$news_page_id = get_option('page_for_posts');
	$news_page = get_page($news_page_id);
	$title = get_the_title($news_page_id);
	//echo '<pre>';print_r($news_page);echo '</pre>';
	$page_icon = get_field('page_icon', $news_page->ID);
	$paged = (get_query_var('paged') != 0) ? get_query_var('paged'):1;
	$posts_per_page = get_query_var('posts_per_page');
	?>		
	<div id="search-form" class="post-search">
	<?php get_search_form(); ?>
	</div>
	
	<?php include (STYLESHEETPATH . '/_/inc/posts/cats-dropdown.php'); ?>	
					
	<main class="page-col-red animated fadeIn">
	
		<article class="page animated fadeIn">	
				
			<!-- MORE NEWS LIST -->
			<?php include (STYLESHEETPATH . '/_/inc/posts/index-post-list.php'); ?>	
			
			<?php get_sidebar(); ?>
				
			
		</article>
						
	</main>

</div><!-- CONTENT END -->

<?php get_footer(); ?>
