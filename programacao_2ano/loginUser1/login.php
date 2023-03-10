<?php
		$txtCPF = $_POST['tCPF'];
		$txtSenha = md5($_POST['tSenha']);
		$txtButton = $_POST['tBtn'];
		$txtConexao = mysqli_connect('localhost' , 'root' , '' , 'login');

		if (isset($txtButton)) {

			$txtVerificar = mysql_query("SELECT * FROM usuarios WHERE tCPF = '" . $txtCPF . "' AND tSenha = '" . $txtSenha . "';") or die('Error 404');

			if (mysql_num_rows($txtVerificar) <= 0){

				echo "<script language='javascript' type='text/javascript'>alert('Credenciais incorretos'); window.location.href='login.html'</script";
			
			} else {

				setcookie("Cpf" , $txtCPF);
				header("location: www.iffarroupilha.edu.br");
			}
		}
?>