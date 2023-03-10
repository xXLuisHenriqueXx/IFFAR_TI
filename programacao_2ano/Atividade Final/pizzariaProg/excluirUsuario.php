<?php
	$txtConexao = mysqli_connect('localhost', 'root', '', 'pizzaria');
	$txtIdUsuario = $_GET['idUsuario'];
	$txtSql = "DELETE FROM usuarios WHERE idUsuario = '" . $txtIdUsuario . "';";
	echo $txtSql;
	$txtResult = mysqli_query($txtConexao, $txtSql);

	echo '<script> window.location.href="listarUsuarios.php"; </script>';
?>