<?php
	echo "<u><b>Identificação</b></u><br><br>";

	$tNome = $_GET['tNome'];
	echo "Nome: " . $tNome . '<br>';

	$tMae = $_GET['tMae'];
	echo "Nome da mãe: " . $tMae . '<br>';

	$tDataNasc = $_GET['tDataNasc'];
	echo "Data de nascimento: " . $tDataNasc . '<br>';

	$tNaturalidade = $_GET['tNaturalidade'];
	echo "Naturalidade: " . $tNaturalidade . '<br>';

	$tEmail = $_GET['tEmail'];
	echo "E-mail: " . $tEmail . '<br><br>';

	echo "<u><b>Endereço</b></u>" . '<br><br>';

	$tTipo = $_GET['tTipo'];
	echo "Local: " . $tTipo;

	$NomeRua = $_GET['NomeRua'];
	echo " " . $NomeRua . '<br>';

	$tComplemento = $_GET['tComplemento'];
	echo "Complemento: " . $tComplemento . '<br>';

	$tPontoRef = $_GET['tPontoRef'];
	echo "Ponto de referência: " . $tPontoRef . '<br>';

	$tCEP1 = $_GET['tCEP1'];
	echo "CEP: " . $tCEP1;

	$tCEP2 = $_GET['tCEP2'];
	echo "-" . $tCEP2 . '<br><br>';

	echo "<u><b>Telefone</b></u>" . '<br><br>';

	$tDDI = $_GET['tDDI'];
	echo "Numero de elefone: (" . $tDDI;
	echo ") ";

	$tDDD = $_GET['tDDD'];
	echo "(" . $tDDD;
	echo ") ";

	$tNumero = $_GET['tNumero'];
	echo " " . $tNumero;


?>