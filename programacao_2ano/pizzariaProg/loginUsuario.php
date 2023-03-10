<?php
		session_start();
		$txtConexao = mysqli_connect('localhost', 'root', '', 'pizzaria');


		if (isset($_POST['tBtn'])) {
			$txtEmail = $_POST['tEmail'];
			$txtSenha = sha1($_POST['tSenha']);

			$txtVerificar = "SELECT * FROM usuarios WHERE emailUsuario = '" . $txtEmail . "' AND senhaUsuario = '" . $txtSenha . "';";
			

			$txtResult = mysqli_query($txtConexao , $txtVerificar);
			$txtRegistro = mysqli_fetch_array($txtResult);
			if (mysqli_num_rows($txtResult) > 0) {
				$_SESSION['idUsuario'] = $txtRegistro['idUsuario'];
				header('location:cadastroPedidos.php');

			} else {

				echo "<script language='javascript' type='text/javascript'>alert('Credenciais incorretos'); window.location.href='loginUsuario.php'</script";

			}
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body background="imagens/pizzas.jpg">
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="row">
				<div class="col s12 m4 offset-m4">
					<div class="card">

						<div class="card-action grey darken-1 white-text">
							<h3><img src="imagens/logoPizza1.png" width="100px" height="100px">Logar</h3>
						</div>

						<div class="card-content">
							<div class="form-field">
								<i class="material-icons right">call_to_action</i>
								<label class="active" for="tEmail">Email</label>
								<input type="text" name="tEmail" id="tBlock" class="validate" ><br><br>
							</div>

							<div class="form-field">
								<i class="material-icons right">lock</i>
								<label for="tSenha">Senha</label>
								<input type="password" name="tSenha" id="tBlock" class="validate"><br><br>	
							</div>

							<div class="form-field">
								<button class="btn large waves-effect waves-dark grey darken-1" style="width: 100%" type="submit" name="tBtn">
								Logar
								<i class="material-icons right">send</i>
								</button>
								<a href="cadastroUsuario.php">Cadastrar-se</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		
	</form>
</body>
</html>