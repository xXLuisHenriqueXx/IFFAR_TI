<?php
	$txtCont = $_POST['cNum'];
	$txtSoma = 0;
	$txtNumImpar = 0;

	for ($i = 0; $i <= $txtCont ; $i++) { 
		if ($i % 2 != 0) {
			if ($txtCont == 1) {
				$txtNumImpar = $txtNumImpar + $i;

			} elseif ($txtCont == $i) {
				$txtNumImpar = $txtNumImpar . " e " . $i;

			} elseif ($i > 1) {
				$txtNumImpar = $txtNumImpar . ", " . $i;

			} else {
				$txtNumImpar = $i;
			}
			$txtSoma = $txtSoma + $i;
		}
	}

	echo "Os números impares de 0 até " . $txtCont . " são " . $txtNumImpar . ". A soma deles é " . $txtSoma;
?>