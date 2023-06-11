<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 12 - POO</title>
</head>
<body>
	<?php
		require_once 'Animal.php';
		require_once 'Manifero.php';
		require_once 'Reptil.php';
		require_once 'Peixe.php';
		require_once 'Ave.php';
		require_once 'Cobra.php';
		require_once 'Tartaruga.php';
		require_once 'GoldFish.php';
		require_once 'Arara.php';
		require_once 'Cachorro.php';
		require_once 'Canguru.php';

		$m = new Manifero();
		$a = new Ave();
		$r = new Reptil();
		$c = new Canguru();
		$k = new Cachorro();
		$t = new Tartagura();

		$m->Locomover();
		$c->Locomover();
		$k->Locomover();
		$t->Locomover();
	?>
</body>
</html>