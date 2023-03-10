<?php
	$txtNum1 = $_POST['cNum1'];
	$txtNum2 = $_POST['cNum2'];
	$txtNum3 = $_POST['cNum3'];

	if ($txtNum1 > $txtNum2 && $txtNum1 > $txtNum3) {
		echo $txtNum1 . " é o maior número";
	}elseif ($txtNum2 > $txtNum1 && $txtNum2 > $txtNum3) {
		echo $txtNum2 . " é o maior número";
	}else{
		echo $txtNum3 . " é o maior número";
	}

?>