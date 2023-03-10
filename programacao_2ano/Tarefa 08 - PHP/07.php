<?php
	$txtNum = $_POST['cNum'];

	if ($txtNum >= 0 && $txtNum %2 == 0) {
		echo "O número " . $txtNum . " é postivo e par";
	} elseif ($txtNum >= 0 && $txtNum %2 != 0) {
		echo "O número " . $txtNum . " é postivo e ímpar";
	} elseif ($txtNum < 0 && $txtNum %2 == 0) {
		echo "O número " . $txtNum . " é negativo e par";
	} else {
		echo "O número " . $txtNum . " é negativo e ímpar";
	}
?>