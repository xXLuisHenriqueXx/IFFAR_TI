<?php
 	$txtConexao = mysqli_connect('localhost', 'root', '', 'pizzaria');

 	$txtIdPizza = $_GET['idPizza'];
 	$txtSql = "SELECT * FROM pizzas WHERE idPizza = '" . $txtIdPizza ."';";
 	
 	$txtResult = mysqli_query($txtConexao, $txtSql);

 	while ($txtRow = mysqli_fetch_array($txtResult)) {

 		$txtIdPizza = $txtRow['idPizza'];
 		$txtSaborPizza = $txtRow['saborPizza'];
 		$txtValorPizza = $txtRow['valorPizza'];

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
			<form method='GET' action='salvarEdicaoPizzas.php'>
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
									<input type='hidden' name='tId' id='tBlock' class='validate' value='" . $txtIdPizza . "'>
								</div>

							<div class='card-content'>
								<div class='form-field'>
									<i class='material-icons right'>assignment</i>
									<label class='active' for='tSabor'>Sabor</label>
									<input type='text' name='tSabor' id='tBlock' class='validate' value='" . $txtSaborPizza . "'>
								</div>

								<div class='form-field'>
										<i class='material-icons right'>attach_money</i>
										<label class='active' for='tValor'>Valor</label>
										<input type='text' name='tValor' id='tBlock' class='validate' value='". $txtValorPizza . "' ><br><br>
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
