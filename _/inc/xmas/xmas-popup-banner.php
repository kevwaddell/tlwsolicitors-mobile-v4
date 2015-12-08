<?php 
$xmas_opening_hrs_active = get_field('xmas_hrs_active', 'options');	
$turn_off_date = get_field('turn_off_date', 'options');	
?>
<?php if ($xmas_opening_hrs_active) { 
$today = date('Ymd');		
$xmas_popup_times = get_field('xmas_popup_times', 'options');	
$turn_off_date = get_field('turn_off_date', 'options');
$main_email = get_field('main_email', 'option');
?>

<?php if ($today < $turn_off_date) { ?>	
<div id="xmas-popup-btn-wrap" class="pop-up-inactive">
	<div  class="wrap-inner">
		<p><?php echo bloginfo('name'); ?> opening hours for the Christmas period.</p>
		<button id="xmas-popup-btn-open" class="btn btn-default btn-block">View times</button>
	</div>
	<div class="holly left"></div>
	<div class="holly right"></div>
</div>

<?php } ?>

<?php } ?>