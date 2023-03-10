<?php
	$txtId = $_POST['tId'];
	$txtNome = $_POST['tNome'];
	$txtCPF = $_POST['tCPF'];
	$txtSenha = md5($_POST['tSenha']);
	$txtButton = $_POST['tBtn'];
	$txtConexao = mysqli_connect('localhost' , 'root' , '' , 'login');
	$txtQuerySelect = "SELECT * FROM usuarios WHERE tCPF = '" . $txtCPF . "';";
	$txtArray = mysql_fetch_array($txtQuerySelect , $txtConexao);
	$txtCPFarray = $txtArray['tCPF'];

	if ($txtCPF == "" || $txtCPF == null) {

		echo "<script language='javascript' type='text/javascript'>alert('Campo CPF deve ser preenchido'); window.location.href='cadastro.html'</script>";

	} else {
		if ($txtCPFarray == $txtCPF) {
			
			echo "<script language='javascript' type='text/javascript'>alert('O CPF digitado já foi cadastrado'); window.location.href='cadastro.html'</script>";

		} else {

			$txtQuery = "INSERT INTO usuarios (id_user , nome_user , cpf_user , senha_user) VALUES ('$txtId' , '$txtNome' , '$txtCPF' , '$txtSenha')";

			$txtInsert = mysqli_query($txtQuery , $txtConexao);

			if ($txtInsert) {
				
				echo "<script language='javascript' type='text/javascript'>alert('Cadastro efetuado com sucesso'); window.location.href='cadastro.html'</script";


			} else {

				echo "<script language='javascript' type='text/javascript'>alert('Não foi possivel efetuar o cadastro'); window.location.href='cadastro.html'</script";

			}

		}
	}
?>