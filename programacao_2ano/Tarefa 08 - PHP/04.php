<?php
	$txtCusto = $_POST['cCusto'];

	$txtCusto1 = $txtCusto + ($txtCusto * (28 / 100));

	$txtCustoCons = $txtCusto1 + ($txtCusto1 * (45 / 100));

	echo $txtCustoCons;
?>