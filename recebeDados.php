<?php
	echo "Recebendo dados";
	echo "<br/>"
	
	$nome = $_GET["nome"];
	$sobrenome = $_GET["sobrenome"];
	$email = $_GET["email"];
	$senha = $_GET["password"];
	$sexo = $_GET["sexo"];
	$tipoDeficiencia = $_GET["TipoDef"];

	echo "Nome =", $nome "<br/>";
	echo "Sobrenome =", $sobrenome "<br/>";
	echo "Email =", $email "<br/>";
	echo "Senha =", $password "<br/>";
	echo "Sexo =", $sexo "<br/>";
	echo "Tipo de Deficiência =", $tipoDeficiencia "<br/>";
?>