<?php
/*
 * Progress Bar
 */
$bar_fields = explode("|", $atts['bar_fields']);
?>

<script>
	var wpcf7aform = "<?php echo $atts['form_name'] ?>"
	var wpcf7abar_fields = "<?php echo $atts['bar_fields'] ?>"
	var aBars = <?php echo json_encode($bar_fields); ?>;
</script>

<div class="wpf7a-say-progress">
	<h3><span id="wpcf7a-filled">0</span>/<?php echo count($bar_fields) ?> Complete</h3>
</div>
<div class="wpf7a-progress-buttons">
	<?php
		foreach ($bar_fields as $bar_field) {
			echo "<a class='wpcf7a-progress-btn wpcf7a-".$bar_field."'></a>&nbsp;";
		}
	?>
</div>

