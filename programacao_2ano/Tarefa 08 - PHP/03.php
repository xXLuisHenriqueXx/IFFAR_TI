<?php
	$txtSeg = $_POST['cNum'];

	$txtHoras = $txtSeg / 3600;
	$txtSeg = $txtSeg % 3600;

	$txtMin = $txtSeg / 60;
	$txtSeg = $txtSeg % 60;
	
	$txtSeg = $txtSeg % 60;

	echo $txtHoras . "h" . $txtMin . "m e " . $txtSeg . "s";
?>