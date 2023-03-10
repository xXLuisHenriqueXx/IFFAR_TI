<?php
	$txtCookieCPF = $_COOKIE['tCPF'];

	if (isset($txtCookieCPF)) {

		echo "Olá" . $txtCookieCPF . "<br>";
		echo "As informações podem ser acessadas por você";

	} else {

		echo "Você se conectou como convidado<br>";
		echo "As informações não podem ser acessadas por você<br>";
		echo "<a href= 'cadastro.html'>Cadastre-se</a> ou <a href= 'login.html'>Logue-se</a> para acessar as informações";
	}
?>