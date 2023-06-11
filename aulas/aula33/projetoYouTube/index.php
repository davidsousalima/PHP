<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 14 - POO</title>
</head>
<body><pre>
	<?php
		require_once 'AcoesVideo.php';
		require_once 'Video.php';
		require_once 'Pessoa.php';
		require_once 'Gafanhoto.php';
		$v[0] = new Video("Aula 1 de POO");
		$v[1] = new Video("Aula 12 de PHP");
		$v[2] = new Video("Aula 15 de HTML5");
		print_r($v);

		$g[0] = new Gafanhoto("Jubileu",22,"M","juba");
		print_r($g);
	?>
</body></pre>
</html>