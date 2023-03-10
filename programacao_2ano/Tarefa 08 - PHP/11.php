<?php
	$txtNum = $_POST['cNum'];

	$temp = ($txtNum * (9 / 5)) + 32;

	echo "A temperatura de " . $txtNum . "°C é " . $temp . "°F";
?>