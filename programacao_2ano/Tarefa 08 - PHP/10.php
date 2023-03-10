<?php
	$txtNum = $_POST['cNum'];

	$salAum = $txtNum + ($txtNum * (15 / 100));

	$salDesc = $salAum - ($salAum * (8 / 100));

	echo "O salário incial é " . $txtNum . " / O salário com aumento de 15% é " . $salAum . " / O salário líquido é " . $salDesc;
?>