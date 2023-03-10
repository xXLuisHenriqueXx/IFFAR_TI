 <?php 
	$txtConexao = mysqli_connect('localhost', 'root', '', 'pizzaria');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Lista de usuários</title>
 	<meta charset="utf-8">

 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 </head>
 <body>
 	<table id="listaUser" class="striped">
 		<thead>
 			<tr>
 				<th colspan="7"><img src="imagens/logoPizza1.png" width="100px" height="100px">Lista de usuários</th>
 			</tr>
 			<tr>
 				<th>ID</th>
 				<th>Nome</th>
 				<th>Email</th>
 				<th>Senha</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php
 				$txtQuery = "SELECT * FROM usuarios ORDER BY idUsuario;";
				$txtSql = mysqli_query($txtConexao, $txtQuery);
 				while ($txtRow = mysqli_fetch_array($txtSql)) {
 					$txtIdUsuario = $txtRow['idUsuario'];
 					$txtNomeUsuario = $txtRow['nomeUsuario'];
 					$txtEmailUsuario = $txtRow['emailUsuario'];
 					$txtSenhaUsuario = $txtRow['senhaUsuario'];

 					echo "<tr>
 						<td>" . $txtIdUsuario . " </td>
 						<td>" . $txtNomeUsuario . " </td>
 						<td>" . $txtEmailUsuario . " </td>
 						<td>" . $txtSenhaUsuario . " </td>
 						<td><a href = editarUsuarios.php?idUsuario=" . $txtRow['idUsuario'] . ">Editar</a></td>
 						<td><a href = excluirUsuario.php?idUsuario=" . $txtRow['idUsuario'] . ">Excluir</a></td>
 					</tr>";

 				}
 			?>
 		</tbody>
 	</table>
 	<a href = "cadastroUsuario.php">Voltar para tela de cadastro</a>
 </body>
 </html>
