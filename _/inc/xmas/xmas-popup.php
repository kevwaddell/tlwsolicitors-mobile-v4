<?php 
$xmas_opening_hrs_active = get_field('xmas_hrs_active', 'options');	
$turn_off_date = get_field('turn_off_date', 'options');	
?>
<?php if ($xmas_opening_hrs_active) { 
$today = date('Ymd');
$xmas_banner_message = 	get_field('xmas_banner_message', 'options');		
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

<div id="xmas-popup-wrap" class="xmas-popup-outer-wrap pop-up-inactive">
	<div class="xmas-popup-inner-wrap">
		<div class="xmas-popup-inner hidden">
			<h3 class="text-center">Christmas opening hours</h3>
			<p class="text-center">Our opening hours for the Christmas period are as follows:</p>
			<?php echo $xmas_popup_times; ?>
			<p class="text-center">If you have an urgent request please contact us on <a href="mailto:<?php echo $main_email; ?>"><?php echo $main_email; ?></a></p>
			<button id="close-xmas-popup" class="btn btn-default btn-block">Close</button>
			<div class="holly tl"></div>
			<div class="holly tr"></div>
			<div class="holly bl"></div>
			<div class="holly br"></div>
		</div>
	</div>

</div>

<?php } ?>

<?php } ?>