<?php get_header(); ?>
	
<div class="content for-posts-list">

<?php
$news_page_id = get_option('page_for_posts');
$news_page = get_page($news_page_id);
//echo '<pre>';print_r($news_page);echo '</pre>';
$page_icon = get_field('page_icon', $news_page->ID);

$topics_args = array(
'taxonomy'           => 'category'
);

$topics = get_categories($topics_args);
?>
	<div id="search-form" class="post-search">
	<?php get_search_form(); ?>
	</div>
	
	<?php include (STYLESHEETPATH . '/_/inc/posts/cats-dropdown.php'); ?>	
	
	<main class="page-col-red animated fadeIn">
		
		<article class="page">
			
				<!-- CATEGORY LIST -->
				<?php include (STYLESHEETPATH . '/_/inc/posts/category-post-list.php'); ?>				
				
				<?php get_sidebar(); ?>
			
		</article>
		
	</main>		
			
</div><!-- CONTENT END -->
	
<?php get_footer(); ?>
