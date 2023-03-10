<?php
		$txtNota1 = $_POST['cNota1'];
		$txtNota2 = $_POST['cNota2'];
		$txtNota3 = $_POST['cNota3'];

		$mediaPonderada = (($txtNota1 * 2) + ($txtNota2 * 3) + ($txtNota3 * 5)) / 10;

		echo $mediaPonderada;
?>