<?php if (!empty($archives)) { ?>
<div class="cats-dropdown">
	
	<select id="archive" class="selectpicker" data-width="100%">
		<option value="0" data-hidden="true">Archives</option>
		<?php echo $archives; ?>
	</select>
	
</div>
<script type="text/javascript">
	<!--
	var dropdown = document.getElementById("archive");
	function onCatChange() {
		if ( dropdown.options[dropdown.selectedIndex].value != 0 ) {
			location.href = dropdown.options[dropdown.selectedIndex].value;
		}
	}
	dropdown.onchange = onCatChange;
	-->
</script>
<?php } ?>
