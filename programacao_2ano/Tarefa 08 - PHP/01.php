<?php
		$txtAnos = $_POST['cAnos'];
		$txtMes = $_POST['cMes'];
		$txtDia = $_POST['cDia'];

		$resultado = ($txtAnos * 360) + ($txtMes * 30) + ($txtDia);

		echo $resultado . " dias";
?>