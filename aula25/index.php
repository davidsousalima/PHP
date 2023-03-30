 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Aula 06 - POO</title>
 </head>
 <body>
 	<h1>Projeto Controle Remoto</h1>
 	<pre>
 	<?php
 		require_once 'ControleRemoto.php';
 		$c1 = new ControleRemoto;
 		$c1->ligar();
 		$c1->abrirMenu();

 	?>
 	</pre>
 </body>
 </html>