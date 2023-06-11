<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <title>Document</title>
</head>
<body>
    <div>
		<?php
			$site ="Curso em Video";
			$sub =substr($site,0,5);
			print $sub;
			//0 posição inicial e andou 5 letras adiante,com numeros negativos pega somente as outras letras
		?>
    </div>
</body>
</html>