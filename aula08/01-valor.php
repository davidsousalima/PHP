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
		$valor =$_GET["v"];
		$rq = sqrt($valor);
		echo "A raiz de  $valor e igual a ".number_format($rq,2);
	?>
	<br>
	<a href="01-exercicio.html">Voltar</a>
</body>
</html>