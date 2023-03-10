<?php 
	session_start();
	$txtConexao = mysqli_connect('localhost', 'root', '', 'pizzaria');

	$txtSql = "INSERT INTO pedidos VALUES (NULL, " . $_SESSION['idUsuario'] . ", default, 0)";
	echo $txtSql;

	$txtResult = mysqli_query($txtConexao, $txtSql);

	$txtUltimoId = mysqli_insert_id($txtConexao);

	foreach ($_SESSION['dados'] as $txtItensPedido) {
		$txtSqlItens = "INSERT INTO itenspedido VALUES (NULL, " . $txtUltimoId . ", " . $txtItensPedido['idPizza'] . "," . $txtItensPedido['quantidadeItensPedido'] . ");";
		echo $txtSqlItens;

		$txtResult1 = msqli_query($txtConexao, $txtSqlItens);

		echo $txtItensPedido['total'] . "<br>";
	}
?>