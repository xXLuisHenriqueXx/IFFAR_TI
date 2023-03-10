<?php 
	
	$txtConexao = mysqli_connect('localhost', 'root', '', 'pizzaria');

		if (isset($_POST['tBtn1'])) {

			$txtSabor =  $_POST['tSabor'];
			$txtValor =  $_POST['tValor'];

			$txtInserir = "INSERT INTO pizzas VALUES (NULL, '$txtSabor', '$txtValor');";

			$txtResult = mysqli_query($txtConexao, $txtInserir);

				
			if ($txtResult > 0) {

				echo "<script language='javascript' type='text/javascript'>alert('Cadastro efetuado com sucesso'); window.location.href='cadastroPizzas.php'</script";

				header('cadastroPedidos.php');

			} else {

				echo "<script language='javascript' type='text/javascript'>
				alert('Erro ao efetuar o cadastro'); window.location.href='cadastroPizzas.php'
				document.getElementByName('tNome').focus();
				</script";

			}
			
		}		

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de pizzas</title>

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
							<i class="material-icons right"></i>
							<i class="material-icons right">assignment</i>
							<label class="active" for="tSabor">Sabor</label>
							<input type="text" name="tSabor" id="tBlock" class="validate">
						</div>

						<div class="form-field">
								<i class="material-icons right">attach_money</i>
								<label class="active" for="tValor">Valor</label>
								<input type="text" name="tValor" id="tBlock" class="validate" max="11" maxlength="11"><br><br>
							</div>

							<div class="form-field">
								<button class="btn large waves-effect waves-dark grey darken-1" style="width: 100%" type="submit" name="tBtn1">
								Cadastrar pizza
								<i class="material-icons right">send</i>
								</button>
								<a href="listarPizzas.php">Lista de pizzas</a>
							</div>
					</div>

				</div>
			</div>
		</div>
	</form>
</body>
</html>