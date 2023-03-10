
<?php
 $conexao = mysqli_connect('localhost', 'root', '', 'login') or die ('Erro!');//variavel para conexão
 if(isset($_POST['logar'])){//verifica se o bota logar foi precionado
 	 
 	 $cpf = $_POST['cpf'];//captura O CPF digitado
     $senha = md5($_POST['senha']);//captura a senha digitada usando o MD5 (criptografia)
     //print_r($_POST); //caso precisar testar
     $sql = "SELECT * FROM usuarios WHERE cpf = '" . $cpf . "' AND senha = '" . 
     $senha . "';";
     //$sql1 = "SELECT * FROM  usuarios;"; (marquinho bravinho!)
    
     $resultado = mysqli_query($conexao, $sql);
    print_r($resultado);

     if(mysqli_num_rows($resultado) > 0 ){//se o cpf e senha digitados forem válidos
      header("Location:  http://www.iffarroupilha.edu.br");//redirecione o usuário a pagina teste

    }
    
    /* if(mysqli_num_rows($resultado)>0){
     	header('Location:  http://www.iffarrroupilha.edu.br');
     }*/
 }

?>

<!DOCTYPE html>
<html>
<head>
	<title> mysql - prog (1) </title>
	<style type="text/css">
		body{
			background-color:  #836FFF;
			font-family:courier,arial,helvetica;

		}
		main{
			background: #00000054;
			width: 450px;
			height: 250px;

		}
		input{
        border-radius: 4px;
         box-shadow: 2px 2px 2px #333333; 
         border:1px solid #000000;
         width:150px;
		}
		button{
			box-shadow: 5px 5px 3px #333333;
		}
		label{
			border-radius: 4px;
		}
		a{
			font-size: 10px;
			color: black;
		}
	</style>
</head>
<body> 
		<center>
 <main>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		 <h1>LOGIN: </h1>
		<b><label>Cpf:</label></b><br>
		<input type="text" name="cpf"><br><br>
		<b><label>Senha:</label></b><br>
		<input type="password" name="senha"><br><br><!-- type password quando usamos senha !-->
		<button name="logar"> Logar</button> 
	</form><br>
	<a href="cadastrar.php">Cadastrar novo usuário</a>
  </main>
     	</center>
	


</body>