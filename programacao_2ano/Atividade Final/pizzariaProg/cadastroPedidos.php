 <?php 
	$txtConexao = mysqli_connect('localhost', 'root', '', 'pizzaria');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cadastro de pedidos</title>
 	<meta charset="utf-8">

 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 </head>
 <body>
 	<form method="GET" action="carrinhoPedidos.php">
 	<table id="listaUser" class="striped">
 		<thead>
 			<tr>
 				<th colspan="7"><img src="imagens/logoPizza1.png" width="100px" height="100px">Lista de pizzas para compra</th>
 			</tr>
 			<tr>
 				<th>ID</th>
 				<th>Sabor</th>
 				<th>Valor (R$)</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php
 				$txtQuery = "SELECT * FROM pizzas ORDER BY saborPizza;";
				$txtSql = mysqli_query($txtConexao, $txtQuery);
 				while ($txtRegistro = mysqli_fetch_array($txtSql)) {
 					$txtIdPizza = $txtRegistro['idPizza'];
 					$txtSaborPizza = $txtRegistro['saborPizza'];
 					$txtValorPizza = $txtRegistro['valorPizza'];

 					echo "<tr>
 						<td>" . $txtIdPizza . " </td>
 						<td>" . $txtSaborPizza . " </td>
 						<td>" . $txtValorPizza . " </td>
 						<td><a href='carrinhoPedidos.php?adicionar=carrinho&idPizza=" . $txtRegistro['idPizza'] ."'>Adicionar ao carrinho</a></td>
 					</tr>";

 				}
 			?>
 		</tbody>
 	</table>
 	<a href = "cadastroPizzas.php">Voltar para tela de cadastro de pizzas</a><br>
 	<a href="carrinhoPedidos">Ver o carrinho</a>
 </form>
 </body>
 </html>
