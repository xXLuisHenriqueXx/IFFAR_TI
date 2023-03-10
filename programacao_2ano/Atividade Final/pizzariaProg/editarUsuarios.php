<?php
 	$txtConexao = mysqli_connect('localhost', 'root', '', 'pizzaria');

 	$txtIdUsuario = $_GET['idUsuario'];
 	$txtSql = "SELECT * FROM usuarios WHERE idUsuario = '" . $txtIdUsuario ."';";
 	
 	$txtResult = mysqli_query($txtConexao, $txtSql);

 	while ($txtRow = mysqli_fetch_array($txtResult)) {

 		$txtIdUsuario = $txtRow['idUsuario'];
 		$txtNomeUsuario = $txtRow['nomeUsuario'];
 		$txtEmailUsuario = $txtRow['emailUsuario'];
 		$txtSenhaUsuario = $txtRow['senhaUsuario'];

 		echo ("
		<head>
			<title>Edição de pizzas</title>
			<meta charset='utf-8'>

			<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>


			<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>


			<link type='text/css' rel='stylesheet' href='css/materialize.min.css'  media='screen,projection'/>

		    <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
		</head>
		<body>
			<form method='GET' action='salvarEdicaoUsuarios.php'>
				<div class='row'>
					<div class='col s12 m4 offset-m4'>
						<div class='card'>
							
							<div class='card-action grey darken-1 white-text'>

								<h3><img src='imagens/logoPizza1.png' width='100px' height='100px'>Editar</h3>
							</div>

							<div class='card-content'>
								<div class='form-field'>
									<i class='material-icons right'>assignment</i>
									<label class='active' for='tId'>Sabor</label>
									<input type='hidden' name='tId' id='tBlock' class='validate' value='" . $txtIdUsuario . "'>
								</div>

							<div class='card-content'>
								<div class='form-field'>
									<i class='material-icons right'>assignment</i>
									<label class='active' for='tNome'>Nome</label>
									<input type='text' name='tNome' id='tBlock' class='validate' value='" . $txtNomeUsuario . "'>
								</div>

								<div class='form-field'>
										<i class='material-icons right'>attach_money</i>
										<label class='active' for='tEmail'>Email</label>
										<input type='text' name='tEmail' id='tBlock' class='validate' value='". $txtEmailUsuario . "' ><br><br>
									</div>

								<div class='form-field'>
										<i class='material-icons right'>attach_money</i>
										<label class='active' for='tSenha'>Senha</label>
										<input type='text' name='tSenha' id='tBlock' class='validate' value='". $txtSenhaUsuario . "' ><br><br>
									</div>

								<div class='form-field'>
									<button class='btn large waves-effect waves-dark grey darken-1' style='width: 100%' type='submit' name='tBtn1'>
									Editar
									<i class='material-icons right'>send</i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</body>
		");
	}
?>
