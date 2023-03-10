<?php
	$txtNota1 = $_POST['cNota1'];
	$txtNota2 = $_POST['cNota2'];
	$txtNota3 = $_POST['cNota3'];

	$mediaArit = ($txtNota1 + $txtNota2 + $txtNota3) / 3;

	if (isset($mediaArit) >= 6) {
		echo $mediaArit . " - Aprovado";
	}else{
		echo $mediaArit . " - Reprovado";
	}
?>