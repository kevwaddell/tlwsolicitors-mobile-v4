<?php get_header(); ?>

<div class="content for-posts-list">
<?php 
$archives_args = array(
	'type'            => 'monthly',
	'limit'			  => 6,
	'echo'            => 0,
	'format'		 => 'option'
	);


if (is_year()) {
$archives_args['type'] = 'yearly';
$archives_args['limit'] = 5;
}

$archives = wp_get_archives($archives_args);
?>
	<div id="search-form" class="post-search">
	<?php get_search_form(); ?>
	</div>
	
	<?php include (STYLESHEETPATH . '/_/inc/posts/archive-dropdown.php'); ?>	
	
	<main class="page-col-red animated fadeIn">
		
		<article class="page">

			<!-- ARCHIVE LIST -->
			<?php include (STYLESHEETPATH . '/_/inc/posts/archive-post-list.php'); ?>
		
			<?php get_sidebar(); ?>
			
		</article>
	
	</main>
			
</div><!-- CONTENT END -->

<?php get_footer(); ?>
