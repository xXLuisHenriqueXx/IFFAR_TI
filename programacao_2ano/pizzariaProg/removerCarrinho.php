<?php  
	session_start();
	if (isset($_GET['remover']) == 'carrinhoPedidos') {
		$txtIdPizza = $_GET['idPizza'];
		unset($_SESSION['pizzas'][$txtIdPizza]);

		echo "<script>alert(\"Pizza removida com êxito!\")</script><meta HTTP-EQUIV='refresh' CONTENT='0;URL=carrinhoPedidos.php'></script>";
		//header('location: carrinhoPedidos.php')
	}
?>