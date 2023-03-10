<?php
	$txtConexao = mysqli_connect('localhost', 'root', '', 'pizzaria');
	$txtIdPizza = $_GET['idPizza'];
	$txtDelete = "DELETE FROM pizzas WHERE idPizza = '" . $txtIdPizza . "';";
	echo $txtDelete;
	$txtApagar = mysqli_query($txtConexao, $txtDelete);

	echo '<script> window.location.href="listarPizzas.php"; </script>';
?>