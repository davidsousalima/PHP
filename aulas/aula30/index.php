<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 11 - POO</title>
</head>
<body><pre>
	<?php
		require_once 'Pessoa.php';
		require_once 'Visitante.php';
		require_once 'Aluno.php';
		require_once 'Bolsista.php';
		//$p1 = new Pessoa(); não pode instancia a classe pessoa..
		$v1 = new Visitante();
		$v1->setNome("Juvenal");
		$v1->setIdade(33);
		$v1->setSexo("M");

		print_r($v1);

		$a1 = new Aluno();
		$a1->setNome("Pedro");
		$a1->setMatricula(1111);
		$a1->setIdade(16);
		$a1->setCurso("Informatica");
		$a1->PagarMensalidade();

		print_r($a1);

		$b1 = new Bolsista();
		$b1->setNome("Jubileu");
		$b1->setMatricula(1112);
		$b1->setIdade(17);
		$b1->setBolsa(12.5);
		$b1->setCurso("Administração");
		$b1->PagarMensalidade();

		print_r($b1);
	?>
</body></pre>
</html>