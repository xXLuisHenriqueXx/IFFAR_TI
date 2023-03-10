<?php 
	
	$txtConexao = mysqli_connect('localhost', 'root', '', 'pizzaria');

		if (isset($_POST['tBtn1'])) {

			$txtNome =  $_POST['tNome'];
			$txtEmail =  $_POST['tEmail'];
			$txtSenha =  sha1($_POST['tSenha']);
			$txtSenha1 =  sha1($_POST['tSenha1']);

			if ($txtSenha == $txtSenha1) {

				$txtInserir = "INSERT INTO usuarios VALUES (NULL, '$txtNome', '$txtEmail', '$txtSenha');";

				$txtResult = mysqli_query($txtConexao, $txtInserir);

				
				if ($txtResult > 0) {

					echo "<script language='javascript' type='text/javascript'>alert('Cadastro efetuado com sucesso'); window.location.href='loginPizzaria.php'</script";
					header('Location: loginUsuario.php');

				} else {

					echo "<script language='javascript' type='text/javascript'>
					alert('Erro ao efetuar o cadastro'); window.location.href='cadastroUsuario.php'
					document.getElementByName('tNome').focus();
					</script";

				}
			} else {

				echo "<script language='javascript' type='text/javascript'>
					alert('As senhas são diferentes'); window.location.href='cadastroUsuario.php'
					document.getElementByName('tNome').focus();
					</script";
			}

		}
	
			

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de usuários</title>

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

						<h3><img src="imagens/logoPizza1.png" width="100px" height="100px">Cadastrar</h3>
					</div>

					<div class="card-content">
						<div class="form-field">
							<i class="material-icons right">account_circle</i>
							<label class="active" for="tNome">Nome</label>
							<input type="text" name="tNome" id="tBlock" class="validate">
						</div>

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
								<i class="material-icons right">lock</i>
								<label for="tSenha1">Confirme sua senha</label>
								<input type="password" name="tSenha1" id="tBlock" class="validate"><br><br>	
							</div>

							<div class="form-field">
								<button class="btn large waves-effect waves-dark grey darken-1" style="width: 100%" type="submit" name="tBtn1">
								Cadastrar
								<i class="material-icons right">send</i>
								</button>
							</div>
							<a href="loginUsuario.php">Logar-se</a><br>
							<a href="listarUsuarios.php">Lista de usuários</a>
					</div>

				</div>
			</div>
		</div>
	</form>
</body>
</html>