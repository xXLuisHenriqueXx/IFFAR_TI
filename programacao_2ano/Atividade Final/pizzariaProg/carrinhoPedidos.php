<?php 
	session_start();
	if (isset($_SESSION['itens'])) {
		$_SESSION['itens'] = array();	
	}
	
	if (isset($_GET['adicionar']) == 'carrinho') {
		$txtIdPizza = $_GET['idPizza'];

		if (!isset($_SESSION['itens'][$txtIdPizza])) {
			$_SESSION['itens'][$txtIdPizza] = 1;
		} else {
			$_SESSION['itens'][$txtIdPizza] += 1;
		}
	}
	if ($_SESSION['itens'] == 0) {
		echo "O carrinho está vazio!!<br><a href = 'cadastroPedidos'>Adicionar pedidos ao carrinho</a>";
	} else {
		$txtConexao = mysqli_connect('localhost', 'root', '', 'pizzaria');

		$_SESSION['dados'] = array();

		foreach ($_SESSION['itens'] as $idPizza => $quantidade) {
			$txtSql = "SELECT * FROM pizzas WHERE idPizza = " . $idPizza;
			$txtResult = mysqli_query($txtConexao, $txtSql);

			$txtRegistro = mysqli_fetch_array($txtResult);

			$txtTotal = $quantidade * $txtRegistro['valorPizza'];

			echo "Pizza: " . $txtRegistro['saborPizza'] . "<br>Quantidade: " . $quantidade . "<br>Valor: R$" . number_format($txtRegistro['valorPizza'], 2, ",", ".") . "<br>Preço total: R$" . number_format($txtTotal, 2, ",", ".") . "<br><a href= 'removerCarrinho.php?remover=carrinhoPedidos&idPizza=" . $idPizza . "'>Remover pizza</a><br>";

			array_push($_SESSION['dados'], array('idPizza' => $idPizza, 'quantidadePizza' => $quantidade, 'total' => $txtTotal));
		}
		echo "<a href='finalizarCompras.php'>Finalizar compras</a>";

		echo '<pre>';
		var_dump($_SESSION['dados']);
		echo '</pre>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Carrinho</title>
</head>
<body>
	<form method="POST"></form>
</body>
</html>