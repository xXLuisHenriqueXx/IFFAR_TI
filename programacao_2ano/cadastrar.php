<?php
 $conexao = mysqli_connect('localhost', 'root', '', 'login') or die ('Erro!');//variavel para conexão
  

  if (isset($_POST['registrar'])){
   
   $nome = $_POST['nome'];
   $cpf = $_POST['cpf'];
   $senha = md5($_POST['senha']);
   $senhaConfirmada = md5($_POST['senhaConfirmada']);

   if($senha==$senhaConfirmada){
    

   $sql = "INSERT INTO usuarios VALUES (NULL,'$nome', '$cpf', '$senha');";

   $resultado = mysqli_query($conexao, $sql);
  

  }else{
  	echo "SENHAS NÃO SÃO IGUAIS!!!!!";
  }

 }

?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Novo cadastro</title>
 		<style type="text/css">
		body{
			background-color:  #836FFF;
			font-family:courier,arial,helvetica;

		}
		main{
			background: #00000054;
			width: 450px;
			height: 350px;

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
 		
 		
 		<main> 	<form action="" method="POST">

 		<h1>Insira suas informações:</h1><br>
 	    
 	    Nome: <input type="text" name="nome"  ><br><br>

 		Cpf: <input type="text" name="cpf" size="11px" maxlength="11"><br><br>
 		
 		Senha: <input type="password" name="senha"><br><br>
 		
 		Confirme sua senha: <input type="password" name="senhaConfirmada"><br><br>
 		
 		<button name="registrar" >Registrar!</button><br><br>

 		<a href="exercicio1.php">Voltar a tela de login</a>



 		</main>

 	</form>

 	</center>

 
 </body>
 </html>

