<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-=device-width, initial-scale=1.0">
	<title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
	<?php
		$nome =isset($_GET["nome"])?$_GET["nome"]:"[não informado]"; #isset significar "foi configurado"..
		$ano =isset( $_GET["ano"])? $_GET["ano"]:"nenhum dado foi enviado....";
		$sexo =isset($_GET["sexo"])?$_GET["sexo"]:"nenhum dado foi enviado...";
		$idade = date("Y") - $ano;
		echo "$nome é $sexo tem $idade anos.";
	?>
	<br>
	<a href="02-exercicio.html">Voltar</a>
</body>
</html>