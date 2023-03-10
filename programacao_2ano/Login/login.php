<?php
		$txtConexao = mysqli_connect('localhost', 'root', '', 'login') or die('Error');

		if (isset($_POST['tBtn'])) {
			$txtCPF = $_POST['tCPF'];
			$txtSenha = md5($_POST['tSenha']);

			$txtVerificar = "SELECT * FROM usuarios WHERE cpf = '" . $txtCPF . "' AND senha = '" . $txtSenha . "';";

			$txtResult = mysqli_query($txtConexao , $txtVerificar);

			if (mysqli_num_rows($txtResult) > 0) {

				header('Location: http://www.iffarroupilha.edu.br');

			} else {

				echo "<script language='javascript' type='text/javascript'>alert('Credenciais incorretos'); window.location.href='login.html'</script";

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
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="row">
				<div class="col s12 m4 offset-m4">
					<div class="card">

						<div class="card-action green lighteen-1 white-text">
							<h3>Logar</h3>
						</div>

						<div class="card-content">
							<div class="form-field">
								<i class="material-icons right">account_circle</i>
								<label class="active" for="tCPF">CPF</label>
								<input type="text" name="tCPF" id="tBlock" class="validate" max="11" maxlength="11"><br><br>
							</div>

							<div class="form-field">
								<i class="material-icons right">lock</i>
								<label for="tSenha">Senha</label>
								<input type="password" name="tSenha" id="tBlock" class="validate"><br><br>	
							</div>

							<div class="form-field">
								<button class="btn large waves-effect waves-dark green lighteen-1" style="width: 100%" type="submit" name="tBtn">
								Logar
								<i class="material-icons right">send</i>
								</button>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		
	</form>
</body>
</html>