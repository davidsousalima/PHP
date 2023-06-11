<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 09 - POO</title>
</head>
<body><pre>
	<?php
		require_once 'Pessoa.php';
		require_once 'Livro.php';
		$p[0] = new Pessoa("Pedro", 22, "M");
		$p[1] = new Pessoa("Maria", 32,"F");

		$l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
		$l[1] = new Livro("POO com PHP","Maria de Souza", 500, $p[0]);
		$l[2] = new Livro("PHP Avançado","Ana Paula", 800, $p[1]);

		print_r($l[0]);

		$l[0]->Abrir();
		$l[0]->Folhear(80);
		$l[0]->detalhes();

	?>
</body></pre>
</html>