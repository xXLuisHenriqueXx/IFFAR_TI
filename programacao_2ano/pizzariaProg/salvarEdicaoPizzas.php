<?php
    $txtConexao = mysqli_connect('localhost', 'root', '', 'pizzaria');

    $txtIdPizza = $_GET['tId'];
    $txtSaborPizza = $_GET['tSabor'];
    $txtValorPizza = $_GET['tValor'];

    $txtEdit = "UPDATE pizzas SET saborPizza = '" . $txtSaborPizza . "', valorPizza = '" . $txtValorPizza . "' WHERE idPizza = '" . $txtIdPizza . "';";
	    $txtQuery = mysqli_query($txtConexao, $txtEdit);
	    echo $txtEdit;
	    header("Location:listarPizzas.php");    
?>