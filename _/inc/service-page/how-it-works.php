<?php if ($how_it_works_active) { 
$process_id = get_field('hiw_process');	
$processes = get_field('hiw_processes', $process_id);
$process_counter = 0;	
$process_total = count($processes);	
?>	
	<div id="how-it-works" class="hidden">
		
		<header class="hiw-header">
			<h3><span>The Claims Process</span>How it works</h3>
			<button id="close-how-it-works"><span class="sr-only">Close</span><i class="fa fa-times fa-lg"></i></button>
		</header>
		
		<?php include (STYLESHEETPATH . '/_/inc/how-it-works/how-it-works-panel.php'); ?>
		
		<footer class="hiw_footer">
			<nav class="hiw-nav">
				
				<?php for ($i = 0; $i < ($process_total-1); $i++) { ?>
				
				<a href="#slide<?php echo $i; ?>"<?php echo ($i == 0) ? ' class="active"':''; ?>><?php echo ($i+1); ?></a>
				
				<?php } ?>
			</nav>
		</footer>
		
	</div>
<?php } ?>
