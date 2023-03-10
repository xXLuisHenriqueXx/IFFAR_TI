<?php
	$txtNota1 = $_POST['cNota1'];
	$txtNota2 = $_POST['cNota2'];
	$txtNota3 = $_POST['cNota3'];
	$txtMediaEx = $_POST['cMediaEx'];
	$txtId = $_POST['cIden'];

	$mediaA = ($txtNota1 + $txtNota2 * 2 + $txtNota3 * 3 + $txtMediaEx) / 7;

	if ($mediaA >= 9) {
		echo "O n° id: " . $txtId . " / Teve as notas: " . $txtNota1 . ", " . $txtNota2 . ", " . $txtNota3 . " e " .  $txtMediaEx . " / A média de aproveitamento foi " . $mediaA . " é >= 9 e obteve o conceito A / Aprovado";
	} 
	if ($mediaA >= 7.5 && $mediaA < 9) {
		echo "O n° id: " . $txtId . " / Teve as notas: " . $txtNota1 . ", " . $txtNota2 . ", " . $txtNota3 . " e " . $txtMediaEx . " / A média de aproveitamento foi " . $mediaA  ." está entre >= 7.5 e < 9 e obteve o conceito B / Aprovado";
	} 
	if ($mediaA >= 6 && $mediaA < 7.5) {
		echo "O n° id: " . $txtId . " / Teve as notas: " . $txtNota1 . ", " . $txtNota2 . ", " . $txtNota3 . " e " . $txtMediaEx . " / A média de aproveitamento foi " . $mediaA  ." está entre >= 6 e < 7.5 e obteve o conceito C / Aprovado";
	} 
	if ($mediaA >= 4 && $mediaA < 6) {
		echo "O n° id: " . $txtId . " / Teve as notas: " . $txtNota1 . ", " . $txtNota2 . ", " . $txtNota3 . " e " . $txtMediaEx . " / A média de aproveitamento foi " . $mediaA  ." está entre >= 4 e < 6 e obteve o conceito D / Reprovado";
	} 
	if ($mediaA < 4) {
		echo "O n° id: " . $txtId . " / Teve as notas: " . $txtNota1 . ", " . $txtNota2 . ", " . $txtNota3 . " e " . $txtMediaEx . " / A média de aproveitamento foi " . $mediaA  ." é < 4 e obteve o conceito E / Reprovado";
	}
?>