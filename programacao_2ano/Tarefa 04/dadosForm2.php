<?php

	$tEsc = $_POST['tEsc'];
	echo "Abertura ou atualização: " . $tEsc . '<br>';

	$tCodClie = $_POST['tCodClie'];
	echo "Codigo do cliente: " . $tCodClie . '<br><br>';


	echo "<u><b>DADOS PESSOAIS</b></u><br>";

	$tNome = $_POST['tNome'];
	echo "Nome Completo: " . $tNome . '<br>';

	$tCPF1 = $_POST['tCPF1'];
	echo "CPF: " . $tCPF1 . '<br>';

	$tNomePai = $_POST['tNomePai'];
	echo "Nome do pai: " . $tNomePai . '<br>';

	$tNomeMae = $_POST['tNomeMae'];
	echo "Nome da mãe: " . $tNomeMae . '<br>';

	$tDataNasc = $_POST['tDataNasc'];
	echo "Data de nascimento: " . $tDataNasc . '<br>';

	$tNacio = $_POST['tNacio'];
	echo "Nacionalidade: " . $tNacio . '<br>';

	$tNatur = $_POST['tNatur'];
	echo "Naturalidade: " . $tNatur . '<br>';

	$tSexo = $_POST['tSexo'];
	echo "Sexo: " . $tSexo . '<br>';

	$tEC = $_POST['tEC'];
	echo "Estado civil: " . $tEC . '<br>';

	$tNomeCia = $_POST['tNomeCia'];
	echo "Nome do cônjuge ou companheiro(a): " . $tNomeCia . '<br>';

	$tTipoDoc = $_POST['tTipoDoc'];
	echo "Tipo de documento: " . $tTipoDoc . '<br>';

	$tNumReg = $_POST['tNumReg'];
	echo "N° de registro: " . $tNumReg . '<br>';

	$tOrgao = $_POST['tOrgao'];
	echo "Órgão emissor: " . $tOrgao . '<br>';

	$tUF1 = $_POST['tUF1'];
	echo "UF: " . $tUF1 . '<br>';

	$tDataEmi = $_POST['tDataEmi'];
	echo "Data de emissão: " . $tDataEmi . '<br>';

	$tTel = $_POST['tTel'];
	echo "Telefone: " . $tTel . '<br>';

	$tCel = $_POST['tCel'];
	echo "Celular: " . $tCel . '<br>';

	$tEmail = $_POST['tEmail'];
	echo "E-mail: " . $tEmail . '<br>';

	$tMSG = $_POST['tMSG'];
	echo "Mensagem eletrônica: " . $tMSG . '<br><br>';


	echo "<u><b>DADOS DE ENDEREÇO PARA CORRESPONDÊNCIA</b></u><br>";

	$tLog1 = $_POST['tLog1'];
	echo "Logradouro: " . $tLog1 . '<br>';

	$tNum1 = $_POST['tNum1'];
	echo "Número: " . $tNum1 . '<br>';

	$tComp1 = $_POST['tComp1'];
	echo "Complemento: " . $tComp1 . '<br>';

	$tBairro1 = $_POST['tBairro1'];
	echo "Bairro: " . $tBairro1 . '<br>';

	$tCidade1 = $_POST['tCidade1'];
	echo "Cidade: " . $tCidade1 . '<br>';

	$tUF2 = $_POST['tUF2'];
	echo "UF: " . $tUF2 . '<br>';

	$tCEP1 = $_POST['tCEP1'];
	echo "CEP: " . $tCEP1 . '<br><br>';


	echo "<u><b>DADOS DE ENDEREÇO COMERCIAL</b></u><br>";

	$tLog2 = $_POST['tLog2'];
	echo "Logradouro: " . $tLog2 . '<br>';

	$tNum2 = $_POST['tNum2'];
	echo "Número: " . $tNum2 . '<br>';

	$tComp2 = $_POST['tComp2'];
	echo "Complemento: " . $tComp2 . '<br>';

	$tBairro2 = $_POST['tBairro2'];
	echo "Bairro: " . $tBairro2 . '<br>';

	$tCidade2 = $_POST['tCidade2'];
	echo "Cidade: " . $tCidade2 . '<br>';

	$tUF3 = $_POST['tUF3'];
	echo "UF: " . $tUF3 . '<br>';

	$tCEP2 = $_POST['tCEP2'];
	echo "CEP: " . $tCEP2 . '<br><br>';


	echo "<u><b>DADOS PROFISSIONAIS</b></u><br>";

	$tForm = $_POST['tForm'];
	echo "Formação: " . $tForm . '<br>';

	$tOcup = $_POST['tOcup'];
	echo "Ocupação: " . $tOcup . '<br>';

	$tEnti = $_POST['tEnti'];
	echo "Entidade para qual trabalha: " . $tEnti . '<br><br>';


	echo "<u><b>SITUAÇÃO FINANCEIRA PATRIMONIAL</b></u><br>";

	$tRendaM = $_POST['tRendaM'];
	echo "Renda mensal: " . $tRendaM;

	echo " / ";

	$tR1 = $_POST['tR1'];
	echo "R$: " . $tR1 . '<br>';

	$tBensM = $_POST['tBensM'];
	echo "Bens móveis";

	echo " / ";

	$tR2 = $_POST['tR2'];
	echo "R$: " . $tR2 . '<br>';

	$tBensI = $_POST['tBensI'];
	echo "Bens imóveis: " . $tBensI;

	echo " / ";

	$tR3 = $_POST['tR3'];
	echo "R$: " . $tR3 . '<br>';

	$tAplic = $_POST['tAplic'];
	echo "Aplicações/Conta corrente: " . $tAplic;

	echo " / ";

	$tR4 = $_POST['tR4'];
	echo "R$: " . $tR4 . '<br>';

	$tOut = $_POST['tOut'];
	echo "Outros rendimentos: " . $tOut;

	echo " / ";

	$tR5 = $_POST['tR5'];
	echo "R$: " . $tR5 . '<br><br>';


	echo "<u><b>DADOS BANCÁRIOS</b></u><br>";

	if (isset($_POST['tContaP1'])) {
		echo "Conta principal";

		echo " / ";
	}
	
	$tCodB1 = $_POST['tCodB1'];
	echo "Cód/Banco: " . $tCodB1;

	echo " / ";

	$tAgen1 = $_POST['tAgen1'];
	echo "Agência: " . $tAgen1;

	echo " / ";

	$tNumConta1 = $_POST['tNumConta1'];
	echo "N° da conta:" . $tNumConta1;

	echo " / ";

	if (isset($_POST['tContaC1'])) {
		echo "Conta conjunta";

		echo " / ";
	}

	$tNomeCoT1 = $_POST['tNomeCoT1'];
	echo "Nome do co-titular: " . $tNomeCoT1;

	echo " / ";

	$tCPF11 = $_POST['tCPF11'];
	echo "CPF: " . $tCPF11 . '<br>';


	if (isset($_POST['tContaP2'])) {
		echo "Conta principal";

		echo " / ";
	} 

	$tCodB2 = $_POST['tCodB2'];
	echo "Cód/Banco: " . $tCodB2;

	echo " / ";

	$tAgen2 = $_POST['tAgen2'];
	echo "Agência: " . $tAgen2;

	echo " / ";

	$tNumConta2 = $_POST['tNumConta2'];
	echo "N° da conta:" . $tNumConta2;

	echo " / ";

	if (isset($_POST['tContaC2'])) {
		echo "Conta conjunta";

		echo " / ";
	}

	$tNomeCoT2 = $_POST['tNomeCoT2'];
	echo "Nome do co-titular: " . $tNomeCoT2;

	echo " / ";

	$tCPF22 = $_POST['tCPF22'];
	echo "CPF: " . $tCPF22 . '<br>';


	if (isset($_POST['tContaP3'])) {
		echo "Conta principal";

		echo " / ";
	} 

	$tCodB3 = $_POST['tCodB3'];
	echo "Cód/Banco: " . $tCodB3;

	echo " / ";

	$tAgen3 = $_POST['tAgen3'];
	echo "Agência: " . $tAgen3;

	echo " / ";

	$tNumConta3 = $_POST['tNumConta3'];
	echo "N° da conta: " . $tNumConta3;

	echo " / ";
	
	if (isset($_POST['tContaC3'])) {
		echo "Conta conjunta";

		echo " / ";
	}

	$tNomeCoT3 = $_POST['tNomeCoT3'];
	echo "Nome do co-titular: " . $tNomeCoT3;

	echo " / ";

	$tCPF33 = $_POST['tCPF33'];
	echo "CPF: " . $tCPF33 . '<br>';
?>