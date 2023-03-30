<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 02 - POO</title>
</head>
<body>
	<!--
		O php nao exige que cada classe tenha um arquivo especifico.
		Auto referncia que é a palavra this.
		No php 1 ou qualquer valor diferente de 0 ou vazio é verdadeiro
	-->
	<pre>
		<?php
			require_once 'Caneta.php';
			$c1 = new Caneta;
			$c1->cor = "Azul";
			$c1->ponta = 0.5;
			$c1->tampar();
			print_r($c1);

			echo "<br>";
			
			$c2 = new Caneta;
			$c1->cor = "verde";
			$c2->carga = 50;
			$c2->tampar();
			print_r($c2);
		?>
	</pre>
</body>
</html>